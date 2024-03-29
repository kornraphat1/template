<?php

namespace App\Models;

use CodeIgniter\Email\Email;
use CodeIgniter\Model;

class AV_Model extends Model
{
    protected $table_movie = 'av_movie';
    protected $table_category = 'av_category';
    protected $mo_moviecate = 'av_moviecate';
    protected $table_vdoads = 'mo_adsvideo';
    protected $pathAdsVideo = 'movie/adsvdo';
    protected $ads = 'ads';
    protected $report_movie = 'report';
    protected $live_stream = 'mo_livestream';
    protected $setting = 'setting';
    protected $content = 'content';
    protected $mo_request = 'request';
    protected $seo = 'seo';
    // public $backURL = "https://backend.gumovie1.com/public/";
    private $path_filelogo;
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->path_filelogo = "logo";
    }
    function get_adsvideolist($backurl, $branch)
    {
        $sql = "SELECT 
					$this->table_vdoads.adsvideo_id,
					$this->table_vdoads.adsvideo_name,
                    $this->table_vdoads.adsvideo_skip,

					$this->table_vdoads.adsvideo_status,
					$this->table_vdoads.adsvideo_url as url,
					$this->table_vdoads.branch_id,
                    (
                        CASE
                        WHEN $this->table_vdoads.adsvideo_video IS NOT NULL THEN
                            CONCAT(
                                '$backurl',
                                '$this->pathAdsVideo',
                                '/',
                                $this->table_vdoads.adsvideo_video
                            )
                        END
                    ) AS 'file'
				FROM
					$this->table_vdoads
				WHERE $this->table_vdoads.branch_id = $branch AND $this->table_vdoads.adsvideo_status = 1";
        //echo $sql;die;
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    public function get_category($branch_id, $keyword) // เรียก Category ตาม Branch 
    {

        if ($keyword == 'av') {
            $sql = "SELECT
                    *
                FROM
                    $this->table_category
                inner JOIN $this->mo_moviecate ON $this->table_category.category_id = $this->mo_moviecate.category_id 
                WHERE
                    $this->table_category.branch_id = ?
                    AND $this->table_category.category_type = '$keyword' 
                GROUP BY $this->table_category.category_id
                LIMIT 0, 40";
        } else if ($keyword == 'cl') {
            $sql = "SELECT
                    *,COUNT($this->table_category.category_id) as countid
                FROM
                    $this->table_category
                inner JOIN $this->mo_moviecate ON $this->table_category.category_id = $this->mo_moviecate.category_id 
                WHERE
                    $this->table_category.branch_id = ?
                    AND $this->table_category.category_type = '$keyword' 
                GROUP BY $this->table_category.category_id
                HAVING countid>20
                LIMIT 0, 40";
        }


        $query = $this->db->query($sql, [$branch_id]);
        return $query->getResultArray();
    }




    public function get_caterow($cate_id) // เรียก Category ตาม Branch 
    {
        $sql = "SELECT
                    *
                FROM
                    $this->table_category
                WHERE
                `$this->table_category`.category_id = ?";
        $query = $this->db->query($sql, [$cate_id]);
        return $query->getRowArray();
    }
    public function get_list_video($branchid, $keyword = "", $perpage = '', $page = 1)
    {
        $sql_where = " ";
        if ($keyword != "") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branchid'
                    AND `$this->table_movie`.movie_type IN ('av') 
                    AND $this->table_movie.movie_active = '1' " .
            $sql_where .
            "ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_id DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        if ($perpage == '') {
            $perpage = 25;
        }


        // return $query->getResultArray();
        return get_pagination($sql, $page, $perpage, $total);
    }



    public function get_movie_new_recommend($branchid, $keyword = "", $page = 1)
    {
        $sql_where = " ";
        if ($keyword != "") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branchid'  
                    AND `$this->table_movie`.movie_active = '1' " .
            $sql_where;
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 10;
        return get_pagination($sql, $page, $perpage, $total);
    }
    //Get video 
    public function get_movie_page_video($branchid)
    {
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branchid' 
                    AND `$this->table_movie`.movie_active = '1' ";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    // Get video_movie
    public function get_id_video($id)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_movie`
                WHERE
                    `$this->table_movie`.movie_id = ? 
                    AND `$this->table_movie`.movie_active = '1'";
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();
    }
    // Get video_series
    public function get_ep_series($id)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_movie`
                WHERE
                `$this->table_movie`.movie_id =" . $id;
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        if (!empty($data[0]['movie_thmain'])) {
            $data[0]['ep_thmai'] = $this->normalizeSeriestoArray($data[0]['movie_thmain']);
            $data[0]['name_ep'] = $this->getListNameSeries($data[0]['movie_thmain'])[0];
        } else {
            $data[0]['ep_thmai'] = $this->normalizeSeriestoArray($data[0]['movie_series']);
            $data[0]['name_ep'] = $this->getListNameSeries($data[0]['movie_series'])[0];
        }
        return $data[0];
    }
    public function normalizeSeriestoArray($str)
    {
        $pattern = '(\{{[^}}]*\}})';
        $str = preg_replace($pattern, '', $str);
        $delimiter = '!!end!!';
        $seriesList = explode($delimiter, $str);
        if (($key = array_search('', $seriesList)) !== false) {
            unset($seriesList[$key]);
        }
        return $seriesList;
    }

    public function showcategory_pagevideo($id)
    {
        $sql = " SELECT av_category.category_id ,av_category.category_name 
                    FROM av_moviecate
                    JOIN av_category 
                    ON av_moviecate.category_id = av_category.category_id 
                    WHERE movie_id = $id LIMIT 4";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }


    public function getListNameSeries($str)
    {
        $m = [];
        preg_match_all("/(?<=\{{)[^}}]*(?=\}})/", $str, $m);
        return $m;
    }
    public function get_ads($branch_id)
    {
        $ads = [];
        $sql = "SELECT ads_position FROM  `$this->ads` WHERE branch_id = '$branch_id' group by ads_position";
        $query = $this->db->query($sql);
        $ads_position = $query->getResultArray();
        foreach ($ads_position as $val) {
            $ads_position = $val['ads_position'];
            $sql = "SELECT * FROM  `$this->ads` WHERE branch_id = '$branch_id' AND ads_position =  '$ads_position' ";
            $query = $this->db->query($sql);
            $ads['pos' . $ads_position] = $query->getResultArray();
        }
        return $ads;
    }
    //Get database livestream
    public function  get_path_livesteram()
    {
        $sql = "SELECT * FROM `$this->live_stream`";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    //Get video livestream
    public function  get_video_livesteram($id)
    {
        $sql = "SELECT * FROM $this->live_stream WHERE `$this->live_stream`.livestream_id = ?";
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();
    }
    //Get setting show fontend 
    public function  get_setting($branch_id)
    {
        $sql = "SELECT * FROM `$this->setting` WHERE branch_id = '$branch_id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    //Get Content
    public function  get_content($branch_id, $id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id' AND content_id  = '$id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    //Get List Content
    public function  get_listcontent($branch_id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    //Get Seo
    public function  get_seo($branch_id)
    {
        $sql = "SELECT * FROM `$this->seo` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    //Get Name video
    public function get_namevideo($id)
    {
        $sql = "SELECT movie_thname,movie_des FROM `$this->table_movie` WHERE movie_id = '$id'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    //Get Name video
    public function get_title($branch)
    {
        $sql = "SELECT setting_title,setting_description FROM `$this->setting` WHERE branch_id = '$branch'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    //Get Img_og
    public function get_img_og($id)
    {
        $sql = "SELECT movie_picture FROM `$this->table_movie` WHERE movie_id = '$id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
    public function  get_listyear($branch_id)
    {
        $sql = "SELECT 
                    movie_year 
                FROM `$this->table_movie` 
                WHERE branch_id = '$branch_id' 
                GROUP BY movie_year
                ORDER BY movie_year DESC ";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    public function get_id_video_bycategory($id, $branch_id, $perpage = '', $page = 1)
    {
        $sql_where = " ";

        $sql = "SELECT
                    *
                FROM
                  $this->mo_moviecate
                INNER JOIN `$this->table_movie` ON  $this->mo_moviecate.movie_id = `$this->table_movie`.movie_id 
                WHERE 
                $this->mo_moviecate.category_id = '$id' 
                    AND $this->mo_moviecate.branch_id = '$branch_id' ";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        if ($perpage == '') {
            $perpage = 30;
        }

        return get_pagination($sql, $page, $perpage, $total);
    }
    public function get_id_video_byyear($id, $branch_id, $page = 1, $keyword = "")
    {
        $sql_where = " ";
        if ($keyword != "") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }
        $sql = "SELECT
                    *
                FROM
                   mo_movie
                WHERE movie_year = $id AND branch_id = '$branch_id' 
                ORDER BY `$this->table_movie`.movie_year DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 28;
        return get_pagination($sql, $page, $perpage, $total);
    }
    public function get_id_video_random($branch_id)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_movie`
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id'
                    AND `$this->table_movie`.movie_type IN ('av') 
                ORDER BY RAND()  limit 5";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    //แจ้งหนังเสีย
    public function save_reports($branch, $id, $reason, $name)
    {
        $bd =  $this->db->table($this->report_movie);
        $this->db->transBegin();
        $data =  [
            'movie_id' =>  $id,
            'branch_id' => $branch,
            'moviereport_status' => 1,
            'ep_name' => '-',
            'movie_name' => $name,

            'reason' => $reason
        ];
        try {
            if ($bd->insert($data) == true) {
                $this->db->transCommit();
                return true;
            }
        } catch (\Exception $e) {
            // throw new Exception("Error Insert user", 1);
            $this->db->transRollback();
            return $e->getMessage();
        }
    }
    public function get_list_video_search($keyword, $branch_id, $perpage = '', $page)
    {
        $sql_where = " ";
        $keyword = str_replace("'", "\'", $keyword);
        if ($keyword != "") {
            $sql_where .= " AND REPLACE(CONCAT_WS('',`$this->table_movie`.movie_thname, 
                                              `$this->table_movie`.movie_enname,
                                              `$this->table_movie`.movie_year
                                              ), \"'\", \"\'\") LIKE '%$keyword%' ";
        }
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id' 
                    AND `$this->table_movie`.movie_type IN ('av') 
                    
                    $sql_where ";
        // echo $sql;die;
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        if ($perpage == '') {
            $perpage = 30;
        }

        return get_pagination($sql, $page, $perpage, $total);
    }
    //ขอหนัง 
    public function save_requests($branch, $movie)
    {
        $bd =  $this->db->table($this->mo_request);
        $this->db->transBegin();
        $data =  [
            'branch_id' => $branch,
            'mo_request' => $movie
        ];
        try {
            if ($bd->insert($data) == true) {
                $this->db->transCommit();
                return true;
            }
        } catch (\Exception $e) {
            // throw new Exception("Error Insert user", 1);
            $this->db->transRollback();
            return $e->getMessage();
        }
    }
    // นับจำนวนผู้ชม
    public function movie_view($movie_id)
    {
        $sql = "SELECT
                    `$this->table_movie`.movie_id,
                    `$this->table_movie`.movie_view
                FROM
                    $this->table_movie
                WHERE `$this->table_movie`.movie_id = '$movie_id' ";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        if ($data[0]['movie_view'] == 0 && empty($data[0]['movie_view'])) {
            $movie_view = 1;
        } else {
            $movie_view = $data[0]['movie_view']++;
        }
        $builder = $this->db->table($this->table_movie);
        $builder->where('movie_id', $movie_id);
        $this->db->transBegin();
        $dataadd =  [
            'movie_view' =>  $movie_view,
        ];
        try {
            if ($builder->update($dataadd) == true) {
                $this->db->transCommit();
                // return true;
            }
        } catch (\Exception $e) {
            // throw new Exception("Error Insert user", 1);
            $this->db->transRollback();
            // return $e->getMessage();
        }
        return $movie_view;
    }
    //หนังที่น่สนใจ 2 
    public function get_list_video_bycate($branchid, $catereq)
    {


        $sql = "SELECT
                    *
                FROM
                $this->table_movie

                INNER JOIN $this->mo_moviecate ON $this->table_movie.movie_id = $this->mo_moviecate.movie_id 
                INNER JOIN `$this->table_category` ON `$this->table_category`.category_id = `$this->mo_moviecate`.category_id

                WHERE

                `$this->mo_moviecate`.category_id = $catereq
                    AND `$this->table_movie`.movie_active = '1'
                    AND   `$this->table_movie`.branch_id = '$branchid'
                ORDER BY `$this->table_movie`.movie_year DESC, `$this->table_movie`.movie_create DESC , `$this->table_movie`.movie_view DESC limit 30 ";

        $query = $this->db->query($sql);
        $data['list'] = $query->getResultArray();
        $data['category_name'] = $data['list'][0]['category_name'];
        $data['category_id'] = $data['list'][0]['category_id'];
        return $data;
    }
    public function get_list_video_zoom($branchid, $page)
    {
        $sql = "SELECT 
                    * 
                FROM 
                    $this->table_movie 
                WHERE 
                    `$this->table_movie`.branch_id = '$branchid' 
                    AND LOWER(`$this->table_movie`.movie_quality) = 'zoom' 
                ORDER BY `mo_movie`.movie_id DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 28;
        return get_pagination($sql, $page, $perpage, $total);
    }

    //หนังโป๊มาใหม่ ranking
    public function get_list_video_ranking($branchid, $keyword = "", $page = 1)
    {
        $sql_where = " ";

        if ($keyword != "") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }

        $sql = "SELECT
             *
             FROM
             $this->table_movie
             WHERE
             `$this->table_movie`.branch_id = " . $branchid . $sql_where;

        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 8;
        // return $query->getResultArray();
        return get_pagination($sql, $page, $perpage, $total);
    }


    public function get_list_video_popular_ranking($branchid, $keyword = "", $page = 1)
    {
        $sql_where = " ";

        if ($keyword != "") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }

        $sql = "SELECT
             *
             FROM
             $this->table_movie
             WHERE
             `$this->table_movie`.branch_id = " . $branchid . $sql_where . " ORDER BY  `$this->table_movie`.movie_ratescore DESC ";


        //   print_r($sql);die;
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 8;
        // return $query->getResultArray();
        return get_pagination($sql, $page, $perpage, $total);
    }


    public function countView($id)

    {



        $sql = "SELECT

                    `$this->table_movie`.movie_id,

                   

                    `$this->table_movie`.movie_view

                FROM

                    $this->table_movie

                WHERE `$this->table_movie`.movie_id = '$id' ";



        $query = $this->db->query($sql);

        $data = $query->getResultArray();



        if ($data[0]['movie_view'] == 0 || empty($data[0]['movie_view'])) {



            $movie_view_add = 1;
        } else {



            $movie_view_add = $data[0]['movie_view'] + 1;
        }





        $builder = $this->db->table($this->table_movie);

        $builder->where('movie_id', $id);

        $this->db->transBegin();



        $dataadd =  [

            'movie_view' =>  $movie_view_add,

        ];





        try {



            if ($builder->update($dataadd) == true) {



                $this->db->transCommit();

                // return true;



            }
        } catch (\Exception $e) {



            // throw new Exception("Error Insert user", 1);

            $this->db->transRollback();

            // return $e->getMessage();



        }



        return $movie_view_add;
    }
}

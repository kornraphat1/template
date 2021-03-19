<?php

namespace App\Models;

use CodeIgniter\Email\Email;
use CodeIgniter\Model;

class Video_Model extends Model
{
    protected $table_movie = 'mo_movie';
    protected $table_slide = 'mo_slide';
    protected $table_category = 'mo_category';
    protected $mo_moviecate = 'mo_moviecate';
    protected $table_vdoads = 'mo_adsvideo';
    protected $mo_adscontact = 'mo_adscontact';
    protected $pathAdsVideo = 'movie/adsvdo';
    protected $ads = 'ads';
    protected $report_movie = 'report';
    protected $live_stream = 'mo_livestream';
    protected $setting = 'setting';
    protected $content = 'content';
    protected $mo_request = 'request';
    protected $seo = 'seo';
    public $backURL = "https://backend.gumovie1.com/public/";
    private $path_filelogo;


    //-------------------------------------------------------------------------------------------------


    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->path_filelogo = "logo";
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


    //-------------------------------------------------------------------------------------------------


    function get_adsvideolist($backurl, $branch)
    {
        $sql = "SELECT 
					$this->table_vdoads.adsvideo_id,
                    $this->table_vdoads.adsvideo_skip,
					$this->table_vdoads.adsvideo_name,
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


    //-------------------------------------------------------------------------------------------------


    public function get_category($branch_id) // เรียก Category ตาม Branch 
    {
        $sql = "SELECT
            *
            FROM
            $this->table_category
            INNER JOIN $this->mo_moviecate ON $this->mo_moviecate.category_id = $this->table_category.category_id
            INNER JOIN $this->table_movie ON $this->mo_moviecate.movie_id = $this->table_movie.movie_id
            WHERE
            `$this->table_category`.branch_id = ? AND $this->table_movie.movie_active = '1'
            GROUP BY $this->table_category.category_id";

        $query = $this->db->query($sql, [$branch_id]);
        return $query->getResultArray();
    }


    //-------------------------------------------------------------------------------------------------


    public function get_list_video($branchid, $keyword = "", $perpage, $page = 1)
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
                    AND `$this->table_movie`.movie_type IN ('mo','se') 
                    AND $this->table_movie.movie_active = '1' " .
            $sql_where .
            "ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_create DESC";
        // echo $sql;die;
        $query = $this->db->query($sql);

        $total = count($query->getResultArray());
        // return $query->getResultArray();
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_list_series($branchid, $perpage, $page = 1)
    {
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branchid'
                    AND `$this->table_movie`.movie_type IN ('se') 
                    AND $this->table_movie.movie_active = '1' " .
            "ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_id DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        // return $query->getResultArray();
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_list_topimdb($branchid, $perpage, $page = 1)
    {
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branchid'
                    AND `$this->table_movie`.movie_type IN ('mo','se') 
                    AND $this->table_movie.movie_active = '1' " .
            "ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_ratescore DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        // return $query->getResultArray();
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_movie_new_recommend($branchid, $keyword = "", $perpage, $page = 1)
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
            "ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_ratescore DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());

        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


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


    //-------------------------------------------------------------------------------------------------


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
        $data = $query->getResultArray();
        $data = divineMovieName($data);
        return $data[0];
    }


    //-------------------------------------------------------------------------------------------------


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
        $data = divineMovieName($data);
        return $data[0];
    }

    //-------------------------------------------------------------------------------------------------


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

    //-------------------------------------------------------------------------------------------------


    public function get_id_video_bycategory($id, $branch_id, $perpage, $page = 1)
    {
        

        $sql = "SELECT
                    mo_moviecate.*,
                    mo_movie.*,
                    mo_category.category_name
                FROM
                    mo_moviecate
                INNER JOIN mo_movie ON mo_moviecate.movie_id = mo_movie.movie_id 
                INNER JOIN mo_category ON mo_moviecate.category_id = mo_category.category_id 
                WHERE 
                    mo_moviecate.category_id = '$id' 
                    AND mo_moviecate.branch_id = '$branch_id' 
                    ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_create DESC ";

        // echo $sql;die;
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_id_video_byyear($id, $branch_id, $perpage, $page = 1, $keyword = "")
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
                ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_create DESC";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_video_newmovie($branch_id, $perpage, $page = 1)
    {
        $yearnow = date('Y');
        $yearold  = (date('Y') - 1);
        $sql = "SELECT
                    *
                FROM
                   mo_movie
                WHERE movie_year in ($yearold,$yearnow) AND branch_id = '$branch_id' 
                ORDER BY `$this->table_movie`.movie_year DESC , `$this->table_movie`.movie_create DESC ";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_id_video_random($branch_id, $limit)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_movie`
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id'
                ORDER BY RAND()  limit $limit";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        $data = divineMovieName($data);
        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    //แจ้งหนังเสีย
    public function save_reports($branch, $id, $reason, $name, $ep)
    {
        $bd =  $this->db->table($this->report_movie);
        $this->db->transBegin();
        $data =  [
            'movie_id' =>  $id,
            'branch_id' => $branch,
            'moviereport_status' => 1,
            'movie_name' => $name,
            'ep_name' => $ep,
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


    //-------------------------------------------------------------------------------------------------


    public function get_list_video_search($keyword, $branch_id, $perpage, $page = 1)
    {
        $sql_where = " ";
        $search_array = array("'", "%");
        $replace_array = array("\'", "%25");
        $keyword = str_replace($search_array, $replace_array, $keyword);

        if ($keyword != "") {
            $sql_where .= " AND REPLACE(REPLACE(CONCAT_WS('',`$this->table_movie`.movie_thname, 
                                              `$this->table_movie`.movie_enname,
                                              `$this->table_movie`.movie_year
                                              ), \"'\", \"\'\"), '%', '%25') LIKE '%$keyword%' ";
        }
        $sql = "SELECT
                    *
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id' AND `$this->table_movie`.movie_active = '1' $sql_where ";
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }


    //-------------------------------------------------------------------------------------------------


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


    //-------------------------------------------------------------------------------------------------


    //ติดต่อโฆษณา 
    public function save_contact_ads($namesurname, $email, $lineid, $phone, $branch_id)
    {

        $bd =  $this->db->table($this->mo_adscontact);
        $this->db->transBegin();
        $data =  [
            'mo_adscontact_namesurname' => $namesurname,
            'mo_adscontact_email' => $email,
            'mo_adscontact_lineid' => $lineid,
            'mo_adscontact_phone' => $phone,
            'mo_adscontact_branch_id' => $branch_id
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


    //-------------------------------------------------------------------------------------------------


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


    //-------------------------------------------------------------------------------------------------


    //หนังที่น่สนใจ 2 
    public function get_list_video_bycate($branchid, $catereq)
    {

        $data['total'] = $this->count_get_list_video_bycate($catereq);
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
                ORDER BY `$this->table_movie`.movie_year DESC, `$this->table_movie`.movie_create DESC , `$this->table_movie`.movie_view DESC limit 8 ";

        $query = $this->db->query($sql);
        $data['list'] = $query->getResultArray();
        $data['list'] = divineMovieName($data['list']);

        $data['category_name'] = $data['list'][0]['category_name'];
        $data['category_id'] = $data['list'][0]['category_id'];
        return $data;
    }


    //-------------------------------------------------------------------------------------------------


    // LOOP Category หน้าบ้าน
    public function category_list()
    {
        $sql = "SELECT
                mo_category.category_id,
                mo_category.category_name,
                mo_category.category_status,
                mo_category.category_seq,
                mo_category.branch_id
            FROM
                mo_category
            WHERE mo_category.branch_id = '1'
            AND mo_category.category_id != '1'
            AND mo_category.category_id != '11'
            AND mo_category.category_id != '3'
            AND mo_category.category_id != '28'
            AND mo_category.category_status = '1'
            ORDER BY mo_category.category_seq ASC";

        //echo $sql;die;
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    //-------------------------------------------------------------------------------------------------
    public function cate_movie($cat_id, $branch_id)
    {
        $sql = "SELECT
                    `$this->table_movie`.*
                FROM
                    `$this->mo_moviecate`
                INNER JOIN `$this->table_movie` ON `$this->table_movie`.movie_id =   `$this->mo_moviecate`.movie_id
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id'
                    AND `$this->table_movie`.movie_active = '1'
                    AND `$this->mo_moviecate`.category_id = '$cat_id'
                ORDER BY  `$this->table_movie`.movie_year DESC, `$this->table_movie`.movie_create DESC limit 5";

        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        $data = divineMovieName($data);

        return $data;
    }
    //-------------------------------------------------------------------------------------------------
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


    //-------------------------------------------------------------------------------------------------


    public function countView($id)
    {
        $sql = "SELECT
                    `$this->table_movie`.movie_id,
                     `$this->table_movie`.movie_thname,
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


    //-------------------------------------------------------------------------------------------------


    public function getListNameSeries($str)
    {
        $m = [];
        preg_match_all("/(?<=\{{)[^}}]*(?=\}})/", $str, $m);
        return $m;
    }


    //-------------------------------------------------------------------------------------------------


    public function get_path_imgads($branch_id)
    {
        $sql = "SELECT * FROM  `$this->ads` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get database livestream
    public function  get_path_livesteram()
    {
        $sql = "SELECT * FROM `$this->live_stream`";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get video livestream
    public function  get_video_livesteram($id)
    {
        $sql = "SELECT * FROM $this->live_stream WHERE `$this->live_stream`.livestream_id = ?";
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get setting show fontend 
    public function  get_setting($branch_id)
    {
        $sql = "SELECT * FROM `$this->setting` WHERE branch_id = '$branch_id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get Content
    public function  get_content($branch_id, $id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id' AND content_id  = '$id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get List Content
    public function  get_listcontent($branch_id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get Seo
    public function  get_seo($branch_id)
    {
        $sql = "SELECT * FROM `$this->seo` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get Name video
    public function get_namevideo($id)
    {
        $sql = "SELECT movie_thname,movie_des FROM `$this->table_movie` WHERE movie_id = '$id'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get Name video
    public function get_title($branch)
    {
        $sql = "SELECT setting_title,setting_description FROM `$this->setting` WHERE branch_id = '$branch'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


    //Get Img_og
    public function get_img_og($id)
    {
        $sql = "SELECT movie_picture FROM `$this->table_movie` WHERE movie_id = '$id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


    //-------------------------------------------------------------------------------------------------


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


    //-------------------------------------------------------------------------------------------------


    public function count_get_list_video_bycate($catereq)
    {


        $sql = "SELECT
                     count(category_id) as num
                FROM
                $this->mo_moviecate       
                WHERE
                `$this->mo_moviecate`.category_id = $catereq ";

        $query = $this->db->query($sql);
        $data =  $query->getRowArray();

        // print_r($data);die;
        return $data['num'];
    }

    //-------------------------------------------------------------------------------------------------
    public function get_popular($branch_id)
    {
        $sql = "SELECT
                    $this->table_movie.*,
                    $this->table_slide.slide_img
                FROM
                $this->table_movie
                INNER JOIN $this->table_slide ON $this->table_slide.movie_id = $this->table_movie.movie_id 
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id'
                    AND `$this->table_movie`.movie_active = '1' 
                ORDER BY `$this->table_slide`.slide_id ASC";


        $query = $this->db->query($sql);
        $result = $query->getResultArray();
        $result = divineMovieName($result);

        if (!empty($result)) {
            foreach ($result as $key => $val) {

                $id = $val['movie_id'];
                $sqlcate = "SELECT
                        *
                    FROM
                        `$this->table_category`
                    INNER JOIN `$this->mo_moviecate` ON `$this->mo_moviecate`.category_id = `$this->table_category`.category_id
                    WHERE
                    `$this->mo_moviecate`.movie_id = '$id'";

                $querycate = $this->db->query($sqlcate);
                $result[$key]['cate_data'] = $querycate->getResultArray();
            }
        }

        return $result;
    }

    //-------------------------------------------------------------------------------------------------

    public function get_list_popular($branch_id, $perpage, $page = 1)
    {
        $sql = "SELECT
                    $this->table_movie.*
                FROM
                    $this->table_movie
                WHERE
                    `$this->table_movie`.branch_id = '$branch_id'
                    AND `$this->table_movie`.movie_active = '1' 
                ORDER BY `$this->table_movie`.movie_ratescore DESC";

        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        // return $query->getResultArray();
        $data = get_pagination($sql, $page, $perpage, $total);
        $data['list'] = divineMovieName($data['list']);

        return $data;
    }
}

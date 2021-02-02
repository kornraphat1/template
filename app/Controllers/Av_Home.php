<?php

namespace App\Controllers;

use App\Models\AV_Model;

class Av_Home extends BaseController
{

	public $document_root = '';
	protected $base_backurl;
	public $path_setting = "";
	public $path_ads = "";
	public $img_backurl = "img_movies/";
	public $branch_id = 3;
	public $backURL = "https://backend.donengded.com/public/";
	public function __construct()
	{
		$config = new \Config\App();
		// $this->base_backurl = $config->backURL;
		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->VideoModel = new AV_Model();
		$this->branch = 3;
		$this->document_root = $config->docURL;

		// Directory
		$this->path_ads = $this->backURL . 'banners/';
		$this->path_setting = $this->backURL . 'setting/';
		helper(['url', 'pagination']);
	}
	public function index()
	{
		
		$catereq = [6, 7, 28];
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$setting = $this->VideoModel->get_setting($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$keyword_string = "";
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
	
		$list_video = $this->VideoModel->get_list_video($this->branch, '', $page);
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch, '', $page);

// die;
		$av_category = $this->VideoModel->get_category($this->branch, 'av');
		$cl_category = $this->VideoModel->get_category($this->branch, 'cl');



		$listyear = $this->VideoModel->get_listyear($this->branch);

		foreach ($catereq as $val) {
			$video_interest[] = $this->VideoModel->get_list_video_bycate($this->branch, $val);
		}
		$data = [
			'category_id' => $av_category,
			'list_video' => $list_video['list'],
			
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => array('category_name' => 'รายการหนัง'),
			'paginate' => $list_video,
			'ads'  => $ads,
			'new_movie_recom' => $list_movie_recommend['list'],
			'listyear' => $listyear,
			'video_interest' => $video_interest
		];
		// echo '<pre>'.print_r($video_interest ,true).'</pre>';die;

		echo view('AV/header.php', $header_data);
		echo view('AV/body.php', $data);
		echo view('AV/footer.php');
	}
	//--------------------------------------------------------------------
	public function zoom()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$listzoom = $this->VideoModel->get_list_video_zoom($this->branch, $page);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/header', $header_data);
		$data = [
			'movie' => $listzoom,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl
		];
		echo view('zoom', $data);
		echo view('AV/footer');
	}
	public function video_bycate($id, $name)
	{

		$title = urldecode($name);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$keyword_string = "";
		$list_video = $this->VideoModel->get_id_video_bycategory($id, $this->branch_id, $page);
		// echo "<pre>";
		// print_r($list_video['list']);die;
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string,

		];
		echo view('AV/header', $header_data);
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$cateRow = $this->VideoModel->get_caterow($id);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear
		];
	

		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$list_data_video = [
			'list_video' => $list_video['list'],
			'paginate' => $list_video,
			'category_id' => $category_id,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'listyear' => $listyear,
			'title' => $title,
		];

		echo view('AV/search', $list_data_video);
		echo view('AV/footer');
	}
	public function video_byyear($id)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$keyword_string = "";
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/header', $header_data);

		$title = $id;
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$cateRow = ['category_name' => $id];
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$list_video = $this->VideoModel->get_id_video_byyear($id, $this->branch_id, $page);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$body_data = [
			'paginate' => $list_video,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'title' => $title,
		];
		echo view('AV/search', $body_data);
		echo view('AV/footer');
	}
	public function DateThai($strDate)
	{
		$strYear = date("Y", strtotime($strDate)) + 543;
		$strMonth = date("n", strtotime($strDate));
		$strDay = date("j", strtotime($strDate));
		$strHour = date("H", strtotime($strDate));
		$strMinute = date("i", strtotime($strDate));
		$strSeconds = date("s", strtotime($strDate));
		$strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		$strMonthThai = $strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}
	public function series($id, $title)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = "";
		$series = $this->VideoModel->get_ep_series($id);
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['image'] = $series['movie_picture'];
		$seo = $this->VideoModel->get_seo($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $series['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $series['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/header-video.php', $header_data);
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);
		if (!empty($video_data['movie_thmain'])) {
			$feildplay = 'movie_thmain';
		} else if (!empty($video_data['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($video_data['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($video_data['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($video_data['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($video_data['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		} else {
			$feildplay = '';
		}
		$body_data = [
			'category_id' => $category_id,
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $series,
			'feildplay' => $feildplay,
			'ads' => $path_imgads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];

		echo view('AV/series.php', $body_data);
		echo view('AV/footer.php');
	}
	public function video_series($series_id, $title, $index, $ep_name)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = "";
		$series = $this->VideoModel->get_ep_series($series_id);
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['image'] = $series['movie_picture'];
		$seo = $this->VideoModel->get_seo($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $series['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $series['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		// echo '<pre>'.print_r($series ,true).'</pre>';die;

		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/header-video.php', $header_data);

		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);
		$feildplay = "";
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$listyear = $this->VideoModel->get_listyear($this->branch);
		if (!empty($video_data['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($video_data['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($video_data['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($video_data['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($video_data['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		} else {
			$feildplay = 'movie_thmain';
		}
		$body_data = [
			'index' => $index,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $series,
			'feildplay' => $feildplay,
			'ads' => $path_imgads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];

		echo view('AV/video.php', $body_data);
		echo view('AV/footer.php');
		//add view
		// $this->VideoModel->movie_view($series_id);
	}
	public function video($id, $typeplay)
	{
	
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = "";
		$video_data = $this->VideoModel->get_id_video($id);
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['image'] = $video_data['movie_picture'];
		$seo = $this->VideoModel->get_seo($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $video_data['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $video_data['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string,
			'index' => ""
		];
		echo view('AV/header-video.php', $header_data);
		$feildplay = "";

		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);
		if (!empty($video_data['movie_thmain'])) {
			$feildplay = 'movie_thmain';
		} else if (!empty($video_data['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($video_data['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($video_data['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($video_data['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($video_data['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		}
		$body_data = [
			'category_id' => $category_id,
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $video_data,
			'feildplay' => $feildplay,
			'ads' => $path_imgads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/video.php', $body_data);
		echo view('AV/footer.php');
		//add view
		// $this->VideoModel->movie_view($id);
	}


	public function player($id, $filed = "", $index = "")
	{
		if ($filed == "") {
			$filed = 'movie_thmain';
		}
		if ($index != "") {
			$video_data = $this->VideoModel->get_ep_series($id);
			$urlplay = $video_data['ep_thmai'][$index];
		} else {
			$video_data = $this->VideoModel->get_id_video($id);
			$urlplay = $video_data[$filed];
		}
		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->backURL ,$this->branch);
		$data = [
			
			'document_root' => $this->document_root,
			'video_data' 	=> $video_data,
			'playerUrl'		=> $urlplay,
			'adsvideo'		=> $adsvideo_data,
			'backUrl'	=> $this->backURL,
			'branch' 		=> $this->branch
		];
		echo view('AV/player', $data);
	}
	public function video_search($keyword_string)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = urldecode($keyword_string);
		$title = $keyword_string;
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$header_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string
		];
		echo view('AV/header', $header_data);
		$category_id = $this->VideoModel->get_category($this->branch,'av');
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$list_video = $this->VideoModel->get_list_video_search($keyword_string, $this->branch_id, $page);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$body_data = [
			'paginate' => $list_video,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'title' => $title
		];
		echo view('AV/search', $body_data);
		echo view('AV/footer');
	}
	// แจ้งหนังเสีย
	public function save_report($branch, $id, $reason,$name)
	{
		$reason = urldecode($reason);
		$result = $this->VideoModel->save_reports($branch, $id, $reason, urldecode($name));
		if ($result == true && is_bool($result)) {
			echo "OK";
		} else {
			echo "Error";
		}
	}
	// ขอหนัง
	public function save_request($branch, $movie)
	{
		$movie = urldecode($movie);
		$result = $this->VideoModel->save_requests($branch, $movie);
		if ($result == true && is_bool($result)) {
			echo "OK";
		} else {
			echo "Error";
		}
	}

	public function countView($id)
	{
	
		$this->VideoModel->countView($id);
	}


}

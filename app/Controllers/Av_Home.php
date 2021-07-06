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

	public function __construct()
	{


		$config = new \Config\App();
		$this->backURL = $config->backURL;

		// $this->base_backurl = $config->backURL;
		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->VideoModel = new AV_Model();
		$this->branch = 3;
		$this->document_root = $config->docURL_av;
		$this->template = 'AV-2';

		// Directory
		$this->path_ads = $this->backURL . 'banners/';
		$this->path_setting = $this->backURL . 'setting/';
		$this->keyword_string = "";
		helper(['url', 'pagination_helper', 'template']);
		// Query
		$this->setting = $this->VideoModel->get_setting($this->branch);
		$this->ads = $this->VideoModel->get_ads($this->branch);
		$this->template = 'AV-2';
	}
	public function index()
	{
		// die;

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}


		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string
		];
		$data_query = calltemplate_av($this->template, 'index', $parameter);
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads'  => $this->ads,
			'keyword_string' => $this->keyword_string,
		];
		$view_data = array_merge($view_data, $data_query);

		echo view('AV/' . $this->template . '/header.php', $view_data);
		echo view('AV/' . $this->template . '/body.php');
		echo view('AV/' . $this->template . '/footer.php');
	}
	//--------------------------------------------------------------------

	public function video_new()
	{

		$title = 'หนังใหม่';
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$keyword_string = "";

		// echo "<pre>";
		// print_r($list_video['list']);die;


		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,

		];
		$data_query = calltemplate_av($this->template, 'video_new', $parameter);


		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'ads' => $this->ads,

			'keyword_string' => $this->keyword_string,
			'title' => $title,
		];
		$view_data = array_merge($view_data, $data_query);
		// echo '<pre>',print_r($view_data,true),'</pre>';die;
		echo view('AV/' . $this->template . '/header', $view_data);
		echo view('AV/' . $this->template . '/list');
		echo view('AV/' . $this->template . '/footer');
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

		$keyword_string = "";

		// echo "<pre>";
		// print_r($list_video['list']);die;


		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,
			'cate_id' => $id,
		];
		$data_query = calltemplate_av($this->template, 'video_bycate', $parameter);


		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'ads' => $this->ads,

			'keyword_string' => $this->keyword_string,
			'title' => $title,
		];
		$view_data = array_merge($view_data, $data_query);
		// echo '<pre>',print_r($view_data,true),'</pre>';die;
		echo view('AV/' . $this->template . '/header', $view_data);
		echo view('AV/' . $this->template . '/list');
		echo view('AV/' . $this->template . '/footer');
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
		$category_id = $this->VideoModel->get_category($this->branch, 'av');
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

	public function video_search($keyword_string = '')
	{
		$title = urldecode($keyword_string);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);



		// echo "<pre>";
		// print_r($list_video['list']);die;


		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $keyword_string,

		];
		$data_query = calltemplate_av($this->template, 'video_search', $parameter);


		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' => $this->path_ads,
			'ads' => $this->ads,
			'keyword_string' => $this->keyword_string,
			'title' => $title,
		];
		$view_data = array_merge($view_data, $data_query);
		// echo '<pre>',print_r($view_data,true),'</pre>';die;
		echo view('AV/' . $this->template . '/header', $view_data);
		echo view('AV/' . $this->template . '/list');
		echo view('AV/' . $this->template . '/footer');
	}
	public function video($id)
	{

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$parameter = [
			'branch' => $this->branch,
			'keyword_string' => $this->keyword_string,
			'id' => $id,
		];

		$data_query = calltemplate_av($this->template, 'video', $parameter);
		$setting = $this->setting;
		$setting['image'] = $data_query['video_data']['movie_picture'];



		if (!empty($data_query['seo'])) {
			if (!empty($data_query['seo']['seo_title'])) {
				$title = $data_query['seo']['seo_title'];
				$name_videos = $data_query['video_data']['movie_thname'];
				$title_name = $this->setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$this->setting['setting_title'] = $title_web;
			}

			if (!empty($data_query['seo']['seo_description'])) {
				$description = $data_query['seo']['seo_description'];
				$description_movie = $data_query['video_data']['movie_des'];
				$this->setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}

		$feildplay = "";

		if (!empty($data_query['video_data']['movie_thmain'])) {
			$feildplay = 'movie_thmain';
		} else if (!empty($data_query['video_data']['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($data_query['video_data']['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($data_query['video_data']['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($data_query['video_data']['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($data_query['video_data']['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		}



		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,
			'index' => "",
			'keyword_string' => $this->keyword_string,
			'feildplay' => $feildplay,

		];
		$view_data = array_merge($view_data, $data_query);

		echo view('av/' . $this->template . '/header.php', $view_data);
		echo view('av/' . $this->template . '/video.php');
		echo view('av/' . $this->template . '/footer.php');

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
		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->backURL, $this->branch);
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

	// แจ้งหนังเสีย
	public function save_report($branch, $id, $reason, $name)
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
	public function countView($id)
	{

		$this->VideoModel->countView($id);
	}
}

<?php

namespace App\Controllers;

use App\Models\Video_Model;

class Home extends BaseController
{
	public $document_root = '';
	protected $backURL;
	public $path_setting = "";
	public $path_ads = "";
	public $img_backurl = "img_movies/";
	public $branch = '';

	public function __construct()
	{
		$config = new \Config\App();
		$this->backURL = $config->backURL;
		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->VideoModel = new Video_Model();
		$this->branch = 1;
		$this->document_root = $config->docURL;

		// Directory
		$this->path_ads = $this->backURL . 'banners/';
		$this->path_setting = $this->backURL . 'setting/';
		$this->keyword_string = "";
		$this->path_slide = $this->backURL . 'img_slide/';
		$this->path_bg_cate = base_url() . '/public/bg_cate/';
		// Query
		$this->setting = $this->VideoModel->get_setting($this->branch);
		$this->ads = $this->VideoModel->get_ads($this->branch);
		$this->template = 'MV-7';

		helper(['url', 'pagination', 'template', 'moviename', 'library']);
	}

	public function index()
	{

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string
		];

		$data_query = calltemplate($this->template, 'index', $parameter);
		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];
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


		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/body.php');
		echo view('movie/' . $this->template . '/footer.php');
	}
	//--------------------------------------------------------------------

	public function video_bycate($cate_id, $name)
	{

		$title = urldecode($name);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,
			'cate_id' => $cate_id,
		];
		$data_query = calltemplate($this->template, 'video_bycate', $parameter);

		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];

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


		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}
	//--------------------------------------------------------------------


	public function video_byyear($year)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,
			'year' => $year,
		];
		$data_query = calltemplate($this->template, 'video_byyear', $parameter);

		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];

		$title = 'หนังปี : ' . $year;
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'title' => $title,
			'keyword_string' => $this->keyword_string
		];

		$view_data = array_merge($view_data, $data_query);

		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}
	//--------------------------------------------------------------------

	public function newmovie()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,

		];
		$data_query = calltemplate($this->template, 'newmovie', $parameter);
		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];
		$title = 'หนังใหม่';
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $this->setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'title' => $title,
			'keyword_string' => $this->keyword_string
		];
		$view_data = array_merge($view_data, $data_query);


		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}
	//--------------------------------------------------------------------

	public function video_search($keyword_string)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];


		$keyword_string = urldecode($keyword_string);
		$title = $keyword_string;
		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $keyword_string,
		];
		$data_query = calltemplate($this->template, 'video_search', $parameter);
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'setting' => $this->setting,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'title' => $title,

			'keyword_string' => $keyword_string
		];
		$view_data = array_merge($view_data, $data_query);

		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}

	//--------------------------------------------------------------------


	public function video_topimdb()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];



		$title = 'TOP-IMDB';
		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string,
		];
		$data_query = calltemplate($this->template, 'list_topimdb', $parameter);
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'setting' => $this->setting,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'title' => $title,
			'keyword_string' => $this->keyword_string
		];
		$view_data = array_merge($view_data, $data_query);

		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}

	//--------------------------------------------------------------------


	public function list_series()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];

		$title = 'ซีรีย์';
		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
		];
		$data_query = calltemplate($this->template, 'list_series', $parameter);
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'setting' => $this->setting,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'title' => $title,
		];
		$view_data = array_merge($view_data, $data_query);


		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/list');
		echo view('movie/' . $this->template . '/footer');
	}

	//--------------------------------------------------------------------




	public function series($id, $title, $index = 0, $ep_name = '')
	{

		$parameter = [
			'branch' => $this->branch,
			'keyword_string' => $this->keyword_string,
			'id' => $id,
		];

		$data_query = calltemplate($this->template, 'series', $parameter);

		// echo "<pre>";
		// print_r($data_query['series']);die;

		$setting = $this->setting;
		$setting['image'] = $data_query['video_data']['movie_picture'];



		if (!empty($data_query['seo'])) {
			if (!empty($data_query['seo']['seo_title'])) {
				$title = $data_query['seo']['seo_title'];
				$name_videos = $data_query['video_data']['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($data_query['seo']['seo_description'])) {
				$description = $data_query['seo']['seo_description'];
				$description_movie = $data_query['video_data']['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}


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
		} else {
			$feildplay = '';
		}

		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'keyword_string' => $this->keyword_string,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

			'feildplay' => $feildplay,
			'index' => $index,
			'keyword_string' => $this->keyword_string

		];
		$view_data = array_merge($view_data, $data_query);


		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/video.php');
		echo view('movie/' . $this->template . '/footer.php');
	}

	//--------------------------------------------------------------------

	public function video_series($id, $title, $index = 0, $ep_name = '')
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
		$data_query = calltemplate($this->template, 'video_series', $parameter);


		$setting = $this->setting;
		$setting['image'] = $data_query['video_data']['movie_picture'];

		if (!empty($data_query['seo'])) {
			if (!empty($data_query['seo']['seo_title'])) {
				$title = $data_query['seo']['seo_title'];
				$name_videos = $data_query['video_data']['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}
			if (!empty($data_query['seo']['seo_description'])) {
				$description = $data_query['seo']['seo_description'];
				$description_movie = $data_query['video_data']['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
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
		} else {
			$feildplay = '';
		}
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'setting' => $setting,
			'backURL' => $this->backURL,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,
			'keyword_string' => $this->keyword_string,
			'index' => $index,
			'ep_name' => $ep_name,
			'feildplay' => $feildplay,

		];
		$view_data = array_merge($view_data, $data_query);

		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/video.php');
		echo view('movie/' . $this->template . '/footer.php');
	}

	//--------------------------------------------------------------------


	public function video($id)
	{
		$parameter = [
			'branch' => $this->branch,
			'keyword_string' => $this->keyword_string,
			'id' => $id,
		];

		$data_query = calltemplate($this->template, 'video', $parameter);
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

		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/video.php');
		echo view('movie/' . $this->template . '/footer.php');
		//add view
		// $this->VideoModel->movie_view($id);
	}
	//--------------------------------------------------------------------


	public function player($id, $filed = "", $index = "")
	{
		$video_data = $this->VideoModel->get_ep_series($id);
		//echo "<pre>";print_r($video_data);die;
		if ($filed == "") {
			$filed = 'movie_thmain';
		}
		if ($index != "") {

			$urlplay = $video_data['ep_thmai'][$index];
		} else {

			$urlplay = $video_data[$filed];
		}
		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->backURL, $this->branch);
		$data = [

			'document_root' => $this->document_root,
			'video_data' 	=> $video_data,
			'url_play'		=> $urlplay,
			'adsvideo'		=> $adsvideo_data,
			'base_backurl'	=> $this->backURL,
			'branch' 		=> $this->branch
		];
		echo view('movie/player/player', $data);
	}

	//--------------------------------------------------------------------


	// แจ้งหนังเสีย
	public function save_report($branch, $id, $reason, $name, $ep)
	{

		$reason = urldecode($reason);
		$result = $this->VideoModel->save_reports($branch, $id, $reason, urldecode($name), $ep);
		if ($result == true && is_bool($result)) {
			echo "OK";
		} else {
			echo "Error";
		}
	}
	//--------------------------------------------------------------------

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
	//--------------------------------------------------------------------

	// ติดต่อโฆษณา
	public function contact_ads()
	{

		$ads_con_name = $_POST['namesurname'];
		$ads_con_email = $_POST['email'];
		$ads_con_line = $_POST['lineid'];
		$ads_con_tel = $_POST['phone'];

		// print_r($_POST);
		// die;


		$this->VideoModel->save_contact_ads($ads_con_name, $ads_con_email, $ads_con_line, $ads_con_tel, $this->branch);
	}

	//--------------------------------------------------------------------


	public function countView($id)
	{
		$this->VideoModel->countView($id);
	}
	//--------------------------------------------------------------------

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
	//--------------------------------------------------------------------

	public function moviedata()
	{

		$list = $this->VideoModel->get_list_video($this->branch, '', $_GET['page']);

		$header_data = [
			'document_root' => $this->document_root,
			// 'path_thumbnail' => $this->path_thumbnail,
			'list' => $list,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
		];
		// echo '<pre>',print_r( $header_data,true),'</pre>';die;

		echo view('movie/' . $this->template . '/moviedata.php', $header_data);
	}
	//--------------------------------------------------------------------

	public function moviedata_category()
	{

		$list = $this->VideoModel->get_id_video_bycategory($_GET['keyword'], $this->branch,  $_GET['page']);


		$header_data = [
			'document_root' => $this->document_root,
			'list' => $list,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
		];
		// echo '<pre>',print_r( $_GET['keyword'],true),'</pre>';die;

		echo view('movie/' . $this->template . '/moviedata.php', $header_data);
	} //--------------------------------------------------------------------

	public function moviedata_search()
	{

		$list = $this->VideoModel->get_list_video_search($this->keyword_string, $this->branch,  $_GET['page']);

		$header_data = [
			'document_root' => $this->document_root,
			'list' => $list,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
		];
		// echo '<pre>',print_r( $header_data,true),'</pre>';die;

		echo view('movie/' . $this->template . '/moviedata.php', $header_data);
	}

	public function moviedata_newmovie()
	{

		$list = $this->VideoModel->get_video_newmovie( $this->branch,  $_GET['page']);

		$header_data = [
			'document_root' => $this->document_root,
			'list' => $list,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
		];
		echo '<pre>',print_r( $header_data,true),'</pre>';die;

		echo view('movie/' . $this->template . '/moviedata.php', $header_data);
	}
	//--------------------------------------------------------------------

	public function contract()
	{

		$data_query = calltemplate($this->template, 'contract',);
		$view_data = [
			'document_root' => $this->document_root,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'setting' => $this->setting,
			'path_setting' => $this->path_setting,
			'path_ads' =>	$this->path_ads,
			'ads' => $this->ads,

		];
		$view_data = array_merge($view_data, $data_query);

		echo view('movie/' . $this->template . '/header', $view_data);
		echo view('movie/' . $this->template . '/contract');
		echo view('movie/' . $this->template . '/footer');
	}

	//--------------------------------------------------------------------

	//Popular dunung4u - mv7
	public function popular() //ต้นแบบ หน้า cate / search
	{
		$ads = $this->VideoModel->get_ads($this->branch);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string
		];

		$data_query = calltemplate($this->template, 'popular', $parameter);
		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];


		$this->setting = $this->VideoModel->get_setting($this->branch);
		$this->setting['setting_img'] = $this->path_setting . $this->setting['setting_logo'];



		$chk_act = [
			'home' => '',
			'poppular' => 'active',
			'newmovie' => '',
			'topimdb' => '',
			'category' => '',
			'contract' => ''
		];

		$view_data = [
			'document_root' => $this->document_root,
			'path_setting' => $this->path_setting,
			'setting' => $this->setting,
			'chk_act' => $chk_act,

			'ads' => $ads,
			'path_ads' => $this->path_ads,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'path_slide' => $this->path_slide
		];
		$view_data = array_merge($view_data, $data_query);
		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/popular.php');
		echo view('movie/' . $this->template . '/footer.php');
	}

	//--------------------------------------------------------------------

	//Popular dunung4u - mv7
	public function categorylist() //ต้นแบบ หน้า cate / search
	{
		$ads = $this->VideoModel->get_ads($this->branch);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$parameter = [
			'branch' => $this->branch,
			'page' => $page,
			'keyword_string' => $this->keyword_string
		];

		$data_query = calltemplate($this->template, 'category', $parameter);
		$this->setting['image'] = $this->path_setting . $this->setting['setting_logo'];


		$this->setting = $this->VideoModel->get_setting($this->branch);
		$this->setting['setting_img'] = $this->path_setting . $this->setting['setting_logo'];



		$chk_act = [
			'home' => '',
			'poppular' => 'active',
			'newmovie' => '',
			'topimdb' => '',
			'category' => '',
			'contract' => ''
		];

		$view_data = [
			'document_root' => $this->document_root,
			'path_setting' => $this->path_setting,
			'setting' => $this->setting,
			'chk_act' => $chk_act,

			'ads' => $ads,
			'path_ads' => $this->path_ads,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'path_slide' => $this->path_slide,
			'path_bg_cate' => $this->path_bg_cate
		];
		$view_data = array_merge($view_data, $data_query);
		echo view('movie/' . $this->template . '/header.php', $view_data);
		echo view('movie/' . $this->template . '/category.php');
		echo view('movie/' . $this->template . '/footer.php');
	}

	//--------------------------------------------------------------------
}

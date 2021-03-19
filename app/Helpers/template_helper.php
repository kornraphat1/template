<?php

use App\Models\Video_Model;

function calltemplate($template, $view, $parameter = [])
{
    $VideoModel = new Video_Model();
    switch ($template) {
        case 'MV-1':
            switch ($view) {
                case 'index':
                    $cate_req = [6, 7, 28];
                    foreach ($cate_req as $val) {
                        $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    }
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $paginate,
                        'video_cate' => $video_cate,
                        'category_list' => $category_list,
                        'listyear' => $listyear,

                    ];
                    break;
                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24, $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $vdorandom = $VideoModel->get_id_video_random($parameter['branch'], 4);


                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'series' => $series,
                        'vdorandom' => $vdorandom,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 4);

                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;

        case 'MV-2':
            switch ($view) {
                case 'index':
                    // $cate_req = [6, 7, 28];
                    // foreach ($cate_req as $val) {
                    //     $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    // }
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $paginate,
                        // 'video_cate' => $video_cate,
                        'category_list' => $category_list,
                        'listyear' => $listyear,

                    ];
                    break;
                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'newmovie':
                    $list_video = $VideoModel->get_video_newmovie($parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'list_series':
                    $list_video = $VideoModel->get_list_series($parameter['branch'], 24,$parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'list_topimdb':
                    $list_video = $VideoModel->get_list_topimdb($parameter['branch'],24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24,$parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $vdorandom = $VideoModel->get_id_video_random($parameter['branch'], 4);
                    
                    $list = [
                        'video_data' => $VideoModel->get_ep_series($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'series' => $series,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                   
                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 4);
                    
                    $list = [
                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;

        case 'MV-3':
            switch ($view) {
                case 'index':

                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'list_video' => $paginate,
                        'category_list' => $category_list

                    ];
                    break;

                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list
                    ];
                    break;


                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $vdorandom = $VideoModel->get_id_video_random($parameter['branch'], 4);


                    $list = [

                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_data' => $series,
                        'vdorandom' => $vdorandom,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    
                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 4),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 4);
                    
                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;

        case 'MV-4':
            switch ($view) {
                case 'index':
                    $cate_req = [6, 7, 28];
                    foreach ($cate_req as $val) {
                        $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    }


                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $movie_recomend = $VideoModel->get_movie_new_recommend($parameter['branch'], $parameter['keyword_string'], 10, $parameter['page']);

                    $category_list_interest = $VideoModel->category_list();
                    foreach ($category_list_interest as $key => $val) {
                        $cat_id = $val['category_id'];
                        $cate_movie = $VideoModel->cate_movie($cat_id, $parameter['branch']);
                        $category_list_interest[$key]['movie'] = $cate_movie;
                    }

                    $list = [
                        'list_video' => $paginate,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'movie_recomend' => $movie_recomend,
                        'category_list_interest' => $category_list_interest

                    ];
                    break;
                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24, $parameter['page']);


                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], 24,$parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24,$parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);


                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_data' => $series,
                        'video_random' => $video_random,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 5),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);

                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;

        case 'MV-5':
            switch ($view) {
                case 'index':
                    $cate_req = [6, 7, 28];
                    foreach ($cate_req as $val) {
                        $video_cate[] = $VideoModel->get_id_video_bycategory($val, $parameter['branch'], $parameter['page']);
                    }
                    $list_video = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $movie_recomend = $VideoModel->get_movie_new_recommend($parameter['branch'], $parameter['keyword_string'], 20, $parameter['page']);

                    $category_list_interest = $VideoModel->category_list();
                    foreach ($category_list_interest as $key => $val) {
                        $cat_id = $val['category_id'];
                        $cate_movie = $VideoModel->cate_movie($cat_id, $parameter['branch']);
                        $category_list_interest[$key]['movie'] = $cate_movie;
                    }

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_cate' => $video_cate,
                        'movie_recomend' => $movie_recomend,
                        'category_list_interest' => $category_list_interest

                    ];
                    // echo '<pre>',print_r($category_list,true),'</pre>';die;
                    break;
                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;


                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24, $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 3);


                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),

                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_data' => $series,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 5),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);

                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;
        case 'MV-6':
            switch ($view) {

                case 'index':

                    $cate_req = [6, 7, 28];
                    foreach ($cate_req as $val) {
                        $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    }
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 10, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $movie_recomend = $VideoModel->get_movie_new_recommend($parameter['branch'], $parameter['keyword_string'], 10, $parameter['page']);

                    $category_list_interest = $VideoModel->category_list();
                    $top_imdb = $VideoModel->get_list_topimdb($parameter['branch'], 10, $parameter['page']);
                    // echo "<pre>";print_r($top_imdb);die;
                    foreach ($category_list_interest as $key => $val) {
                        $cat_id = $val['category_id'];
                        $cate_movie = $VideoModel->cate_movie($cat_id, $parameter['branch']);
                        $category_list_interest[$key]['movie'] = $cate_movie;
                    }
                    $chk_act = [
                        'home' => 'active',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [
                        'list_video' => $paginate,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'movie_recomend' => $movie_recomend,
                        'chk_act' => $chk_act,
                        'category_list_interest' => $category_list_interest,
                        'top_imdb' =>  $top_imdb,
                        'video_cate' => $video_cate,
                        'test' =>  array('test'),
                        // 'url_loadmore' => base_url('moviedata'),
                    ];

                    break;


                case 'popular':
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => 'active',
                        'contact' => ''
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list_video = $VideoModel->get_popular($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                    ];
                    break;


                case 'category':
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => 'active',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list_video = $VideoModel->get_popular($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                    ];
                    break;

                case 'contact':
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => 'active'
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);


                    $list = [

                        'category_list' => $category_list,

                        'chk_act' => $chk_act,
                    ];
                    break;


                case 'newmovie':
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => 'active',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list_video = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 25, $parameter['page']);
                    //echo "<pre>"; print_r($list_video);die;
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                        'url_loadmore' => base_url('moviedata'),

                    ];
                    break;


                case 'video_bycate':
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 25, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'keyword' => $parameter['cate_id'],
                        'url_loadmore' => base_url('moviedata_category'),
                    ];
                break;

                case 'moviedata_category':
                  
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['keyword'], $parameter['branch'], 25, $parameter['page']);
                  
                    $list = [
                        'list_video' => $list_video
                    ];

                    break;


                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], 24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;

                case 'video_search':
                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24, $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => 'active',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                        'url_loadmore' => base_url('moviedata_search'),
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);

                    $chk_act = [
                        'home' => 'active',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => '',
                        'contact'
                    ];
                    $list = [
                        'chk_act' => $chk_act,
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_data' => $series,
                        'video_random' => $video_random,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $chk_act = [
                        'home' => 'active',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 5),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                    ];
                    break;

                case 'video_series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);
                    $chk_act = [
                        'home' => '',
                        'topimdb' => '',
                        'newmovie' => '',
                        'netflix' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act
                    ];

                    break;


                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }
            break;
        case 'MV-7':
            switch ($view) {
                case 'index':
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24,$parameter['page']);
                    $chk_act = [
                        'home' => 'active',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [
                        'list_video' => $paginate,
                        'chk_act' => $chk_act,
                        'url_loadmore' => base_url('moviedata'),

                    ];
                    break;

                    case 'moviedata':

                        $list_video = $VideoModel->get_list_video($parameter['branch'], '', 24, $parameter['page']);
    
                        $list = [
                            'list_video' => $list_video
                        ];
    
                        break;

                case 'category':
                    $chk_act = [
                        'home' => '',
                        'newmovie' => '',
                        'category' => 'active',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $list = [
                        'category_list' => $category_list,
                        'chk_act' => $chk_act,

                    ];

                    break;
                case 'popular':
                    $chk_act = [
                        'home' => '',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => 'active',
                        'contact' => ''
                    ];
                    $list_video = $VideoModel->get_popular($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'chk_act' => $chk_act,
                    ];
                    break;

                case 'newmovie':
                    $chk_act = [
                        'home' => '',
                        'newmovie' => 'active',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list_video = $VideoModel->get_video_newmovie($parameter['branch'], 24,$parameter['page']);
                    $list = [
                        'list_video' => $list_video,
                        'chk_act' => $chk_act,
                        'keyword' => '-',
                        'url_loadmore' => base_url('moviedata_newmovie'),

                    ];
                    break;
                case 'video_bycate':

                    $chk_act = [
                        'home' => '',
                        'newmovie' => '',
                        'category' => 'active',
                        'poppular' => '',
                        'contact' => ''
                    ];

                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], 24,$parameter['page']);

                    $list = [
                        'list_video' => $list_video,
                        'chk_act' => $chk_act,
                        'keyword' => $parameter['cate_id'],
                        'url_loadmore' => base_url('moviedata_category'),

                    ];

                    break;

                case 'video_search':
                    $chk_act = [
                        'home' => 'active',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];

                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'], 24,$parameter['page']);
                    $list = [
                        'list_video' => $list_video,
                        'chk_act' => $chk_act,
                        'keyword' => $parameter['keyword_string'],
                        'url_loadmore' => base_url('moviedata_search'),
                    ];
                    break;

                case 'series':
                    $chk_act = [
                        'home' => 'active',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 6);
                    $list = [
                        'video_data' => $series,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'chk_act' => $chk_act,
                    ];
                    break;

                case 'video':
                    $chk_act = [
                        'home' => 'active',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 6),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'chk_act' => $chk_act,
                    ];
                    break;

                case 'video_series':
                    $chk_act = [
                        'home' => 'active',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => ''
                    ];
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 6);
                    $list = [
                        'video_data' => $series,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'chk_act' => $chk_act,
                    ];

                    break;
                case 'contact':
                    $chk_act = [
                        'home' => '',
                        'newmovie' => '',
                        'category' => '',
                        'poppular' => '',
                        'contact' => 'active'
                    ];

                    $list = [

                        'chk_act' => $chk_act,
                    ];

                    break;

                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }

            break;

        case 'MV-8':
            switch ($view) {
                case 'index':

                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], 24, $parameter['page']);
                    $popular_list = $VideoModel->get_list_popular($parameter['branch'], 10, '1');
                    $category_list = $VideoModel->get_category($parameter['branch']);
                 
                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list = [
                        'list_video' => $paginate,
                        'chk_act' => $chk_act,
                        'popular' => $popular_list,
                        'category_list' => $category_list,
                        'url_loadmore' => base_url('moviedata'),
                    ];

                    break;

                case 'category':

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);

                    $list = [
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                case 'video_bycate':

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'],24, $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'chk_act' => $chk_act,
                        'cate_name' => $list_video['list'][0]['category_name'],
                        'cate_id' => $parameter['cate_id'],
                        'keyword' => '',
                        'url_loadmore' => base_url('moviedata_category'),
                    ];

                    break;

                case 'video_search':

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list_video = $VideoModel->get_list_video_search($parameter['keyword_string'], $parameter['branch'],24, $parameter['page']);

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                        'keyword' => $parameter['keyword_string'],
                        'cate_id' => '',
                        'url_loadmore' => base_url('moviedata_category'),
                    ];
                    break;

                case 'popular':
                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list_video = $VideoModel->get_popular($parameter['branch'], 24, '1');

                    $list = [
                        'title' => 'Popular',
                        'keyword' => '',
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act
                    ];
                    break;

                case 'series':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $series = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 6);

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list = [
                        'chk_act' => $chk_act,
                        'video_data' => $series,
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'video_random' => $video_random,
                        'seo' => $seo,
                    ];

                    break;

                case 'video':
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch'], 6),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                    ];

                    break;

                case 'video_series':

                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $video_data = $VideoModel->get_ep_series($parameter['id']);
                    $seo = $VideoModel->get_seo($parameter['branch']);
                    $video_random = $VideoModel->get_id_video_random($parameter['branch'], 5);

                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];

                    $list = [
                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                        'chk_act' => $chk_act,
                    ];

                    break;

                case 'contact':
                    $chk_act = [
                        'home' => 'active',
                        'contact' => ''
                    ];
                    $category_list = $VideoModel->get_category($parameter['branch']);

                    $list = [
                        'category_list' => $category_list,
                        'chk_act' => $chk_act,
                    ];

                    break;

                case 'moviedata':

                    $list_video = $VideoModel->get_list_video($parameter['branch'], '', 24, $parameter['page']);

                    $list = [
                        'list_video' => $list_video
                    ];

                    break;

                case 'moviedata_category':

                    $list_video = $VideoModel->get_id_video_bycategory($parameter['keyword'], $parameter['branch'], 24, $parameter['page']);

                    $list = [
                        'list_video' => $list_video
                    ];

                    break;

                case 'moviedata_search':

                    $list_video = $VideoModel->get_list_video_search($parameter['keyword'], $parameter['branch'], 24, $parameter['page']);

                    $list = [
                        'list_video' => $list_video
                    ];

                    break;

                case 'moviedata_newmovie':

                    $list_video = $VideoModel->get_video_newmovie($parameter['branch'], 24, $parameter['page']);

                    $list = [
                        'list_video' => $list_video
                    ];

                    break;

                case 'moviedata_popular':

                    $list_video = $VideoModel->get_popular($parameter['branch'], 24,  $parameter['page']);

                    $list = [
                        'list_video' => $list_video
                    ];

                    break;


                default:
                    $list = [
                        'error_message' => 'not found controller'
                    ];
                    break;
            }

            break;


        default:
            $list = [
                'error_message' => 'not found template'
            ];
            break;
    }


    return $list;
}

<?php

use App\Models\Video_Model;

function calltemplate($template, $view, $parameter = [])
{
    $VideoModel = new Video_Model();
    switch ($template) {
        case 'MV-1':
            switch ($view) {
                case 'index':
                    foreach ($parameter['cate_req'] as $val) {
                        $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    }
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], $parameter['page']);
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
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
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
                    $vdorandom = $VideoModel->get_id_video_random($parameter['branch']);


                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch']),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
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
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch']),
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
                    $video_random = $VideoModel->get_id_video_random($parameter['branch']);

                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    # code...
                    break;
            }
            break;
        case 'MV-2':
            switch ($view) {
                case 'index':
                    foreach ($parameter['cate_req'] as $val) {
                        $video_cate[] = $VideoModel->get_list_video_bycate($parameter['branch'], $val);
                    }
                    $paginate = $VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], $parameter['page']);
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
                    $list_video = $VideoModel->get_id_video_bycategory($parameter['cate_id'], $parameter['branch'], $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'video_byyear':
                    $list_video = $VideoModel->get_id_video_byyear($parameter['year'], $parameter['branch'], $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                case 'newmovie':
                    $list_video = $VideoModel->get_video_newmovie( $parameter['branch'], $parameter['page']);
                    $category_list = $VideoModel->get_category($parameter['branch']);
                    $listyear = $VideoModel->get_listyear($parameter['branch']);
                    $list = [
                        'list_video' => $list_video,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];
                    break;
                    case 'list_series':
                        $list_video = $VideoModel->get_list_series( $parameter['branch'], $parameter['page']);
                        $category_list = $VideoModel->get_category($parameter['branch']);
                        $listyear = $VideoModel->get_listyear($parameter['branch']);
                        $list = [
                            'list_video' => $list_video,
                            'category_list' => $category_list,
                            'listyear' => $listyear,
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
                    $vdorandom = $VideoModel->get_id_video_random($parameter['branch']);


                    $list = [
                        'video_data' => $VideoModel->get_id_video($parameter['id']),
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch']),
                        'seo' => $VideoModel->get_seo($parameter['branch']),
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
                        'video_random' => $VideoModel->get_id_video_random($parameter['branch']),
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
                    $video_random = $VideoModel->get_id_video_random($parameter['branch']);

                    $list = [

                        'video_data' => $video_data,
                        'video_random' => $video_random,
                        'seo' => $seo,
                        'category_list' => $category_list,
                        'listyear' => $listyear,
                    ];

                    break;

                default:
                    # code...
                    break;
            }
            break;

        default:


            $list = [];
            break;
    }


    return $list;
}

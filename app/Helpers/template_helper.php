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


                    $list = [

                        'list_video' => $paginate,
                        'video_cate' => $video_cate,



                    ];
                    break;

                    case 'video':
                        
                        $list = [
                            'video_data'=> $VideoModel->get_id_video($parameter['id']),
                            'video_random' => $VideoModel->get_id_video_random($parameter['branch']),
                            'setting'=>$VideoModel->get_setting($parameter['branch']),
                            'seo' => $VideoModel->get_seo($parameter['branch'])
                        ];
                        echo "<pre>";
                        print_r($list);die;
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

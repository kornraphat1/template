<?php
use App\Models\Video_Model;

function calltemplate($template,$view,$parameter = []){
    $VideoModel = new Video_Model();
    switch ($template) {
        case 'MV-1':
            switch ($view) {
                case 'index':
                    $list = [
                        'setting'=>$VideoModel->get_setting($parameter['branch']),
                        'list_video'=>$VideoModel->get_list_video($parameter['branch'], $parameter['keyword_string'], $parameter['page'])
                    ];
                    break;

                    case 'video':
                        $list = [
                            'setting'=>$VideoModel->get_setting($parameter['branch'])

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

  

?>
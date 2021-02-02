<?php
use App\Models\Video_Model;

function check_image_type($tmp_name)
{
    $mime_type = mime_content_type($tmp_name);

    $allowed_file_types = ['image/png', 'image/jpeg', 'image/gif'];
    if (in_array($mime_type, $allowed_file_types)) {
        return "OK";
    }else{
        return false;
    }
}

function check_video_type($tmp_name)
{
    $mime_type = mime_content_type($tmp_name);

    $allowed_file_types = ['audio/mpeg', 'video/quicktime', 'video/mp4'];
    if (in_array($mime_type, $allowed_file_types)) {
        return "OK";
    }else{
        return false;
    }
}


?>
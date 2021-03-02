<?php

function urlname_encode($name)
{
    $search = [")", "(", " ", '%'];
    $replace = [ "", "", "-", '%25'];

    $url_name = urldecode(trim(str_replace($search, $replace,  $name)));

    return $url_name;
}


?>
<?php
function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    //  redirect("/".$parent."?act=register&reg=ok");
    exit();
}


?>
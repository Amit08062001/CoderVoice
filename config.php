<?php


$dir_loc="https://".$_SERVER['HTTP_HOST']."/";
$whole_url=$_SERVER['REQUEST_URI'];
$targetpage=base64_encode($whole_url);
$php_self=$_SERVER['PHP_SELF'];
$page_name_1=str_replace("/","",$php_self);
$page_name_3=str_replace("/","",$page_name_1);
$page_name=$page_name_3;
$local_url_exculde="/";	



?>

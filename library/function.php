<?php
function __autoload($url){
    $url = strtolower($url);
    $url = str_replace("_","/",$url);
    $url = str_replace("model","models",$url);
    $url = str_replace("helper","helpers",$url);
    require "$url.php";
}
function loadview($name,$data=""){
    require "views/$name.php";
}
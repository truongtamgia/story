<?php
function __autoload($url){
    $url = strtolower($url);
    $url = str_replace("_","/",$url);
    $url = str_replace("model","models",$url);
    $url = str_replace("helper","helpers",$url);
    require "$url.php";
}
function loadview($name,$data="",$curent=""){
    require "views/$name.php";
}
function loadviewtpl($name,$data="",$curent=""){
    require "views/$name.php$curent";
}

function redirect($url){
    header("location:$url");
    exit();
}
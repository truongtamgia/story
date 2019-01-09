<?php 
session_start();
define("baseurl","http://localhost/story/");
require "library/function.php";
require "library/database.php";
if(isset($_GET["controller"])){
    switch($_GET["controller"]){
        case "admin":
        require "controllers/admin/controller.php"; 
        break;
        case "login":
        require "controllers/login/login.php"; 
        break;
    }
}else{

}
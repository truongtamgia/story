<?php 
if(isset($_GET["action"])){
    switch($_GET["action"]){
        case "add":
        require "controllers/user/add.php";
        break;
        
        case "list":
        require "controller/user/list.php";
        break;
    }
}else{

}
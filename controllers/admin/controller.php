<?php
if(isset($_GET['action'])){
	switch($_GET['action']){
		case "add":
		require "controllers/admin/add.php";
		break;
		case "edit":
		require "controllers/admin/edit.php";
		break;
		case "del":
		require "controllers/admin/del.php";
		break;
		case "list":
		require "controllers/admin/list.php";
		break;
	}
}else{
    require "controllers/admin/index.php";
}

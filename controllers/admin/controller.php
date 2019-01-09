<?php
if(isset($_SESSION["level"])){
	if($_SESSION["level"]==1){
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
	}else{
		require "controllers/admin/404.php";
	}
}else{
	require "controllers/admin/404.php";
}

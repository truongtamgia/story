<?php
if(isset($_SESSION["level"])){
	if($_SESSION["level"]==1){
		if(isset($_GET['action'])){
			switch($_GET['action']){
				case "index":
				require "controllers/admin/index.php";
				break;
				case "":
				require "controllers/admin/index.php";
				break;
				case "addcate":
				require "controllers/admin/cate/addcate.php";
				break;
				case "editcate":
				require "controllers/admin/cate/edit.php";
				break;
				case "delcate":
				require "controllers/admin/cate/del.php";
				break;
				case "listcate":
				require "controllers/admin/cate/list.php";
				break;
				case "list":
				require "controllers/admin/list.php";
				break;
				case "logout":
				require "controllers/admin/logout.php";
				break;
				case "truyendai":
				require "controllers/admin/longpost/longpost.php";
				break;
				case "themtruyendai":
				require "controllers/admin/longpost/add.php";
				break;
				default:
				require "controllers/admin/404.php";
				break;
				
			}
		}else{
			require "controllers/admin/index.php";
		}
	}else{
		require "controllers/admin/404.php";
	}
}else{
	require "controllers/login/login.php";
}

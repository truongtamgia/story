<?php 
$muser = new Model_Longpost;
$data['post']=$muser->listAll();
$data["ctpage"]="admin/content/listlpost";
loadview("admin/index",$data);

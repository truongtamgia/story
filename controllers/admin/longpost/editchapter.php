<?php
$id=$_GET['id'];
$muser= new Model_Post;
$data['post']=$muser->getpost($id);
$data['ctpage']="admin/content/editchapter";
loadview('admin/index',$data);
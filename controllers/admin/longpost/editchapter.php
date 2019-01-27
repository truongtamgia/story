<?php
$id=$_GET['id'];
$idtd=$_GET['idtd'];
if(isset($_POST['ok'])){
    $date=date("y/m/d");
    $insert=array(
        'ps_noidung'    =>  $_POST['noidung'],
        'ps_lastedit'   =>  $date,
        'ps_nguoisua'   =>  $_SESSION['fullname']
    );
    $admin= new Model_Post;
    $admin->editchapter($id,$insert);
    redirect(baseurl."index.php?controller=admin&action=listchapter&id=".$idtd);
}else{
    $getcat = new Model_Longpost;
    $muser= new Model_Post;
    $data['post']=$muser->getpost($id);
    $data['cat']=$getcat->lay1truyen($idtd);
    $data['ctpage']="admin/content/editchapter";
    loadview('admin/index',$data); 
}
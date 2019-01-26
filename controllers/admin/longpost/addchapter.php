<?php 
if(isset($_POST['ok'])){
   $noidung=$tap=$idtd=$date="";
   $noidung=$_POST['noidung'];
   $tap=$_POST['tap'];
   $idtd=$_POST['id_td'];
   $date=date('y/m/d');
   if($noidung && $tap && $idtd){
        $getcat = new Model_Longpost;
        $info['info']=$getcat->lay1truyen($idtd);
        $tacgia=$info['info']['tacgia'];
        $idcat=$info['info']['id_cat'];
        $admin = new Model_Post;
       $data= array(
            'ps_tentap' =>  $tap,
            'ps_noidung'=>  $noidung,
            'ps_tacgia' =>  $tacgia,
            'ps_ngaydang'=> $date,
            'ps_nguoidang'=>$_SESSION['fullname'],
            'ps_id_theloai'=>$idcat,
            'id_truyendai_f'=>$idtd,
            'ps_tentap' =>  $tap
       );
       $admin->addchapter($data);
       redirect(baseurl.'index.php?controller=admin&action=listchapter&id='.$idtd);
    }else{
       redirect(baseurl.'index.php?controller=admin&action=addchapter');
   }
}else{
    $id=$_GET['id'];
    $getcat = new Model_Longpost;
    $data['cat']=$getcat->lay1truyen($id);
    $data['ctpage']="admin/content/addchapter";
    loadview("admin/index",$data);
}
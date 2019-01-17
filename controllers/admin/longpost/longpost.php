<?php 
if(isset($_GET['page'])){
    if($_GET['page']=='0'){
        $trang=1;
    }else{
        $gtrang=$_GET['page'];
        $trang=(int)$gtrang;
    }
}else{
    $trang=1;
}
$record='5';
$muser = new Model_Longpost;
$data['post']=$muser->listAll($trang,$record);
$sosanh=$data['post']['sotrang'];
if($trang > $sosanh){
    loadview("admin/404");
}else{
    $data["ctpage"]="admin/content/listlpost";
    loadview("admin/index",$data);
}

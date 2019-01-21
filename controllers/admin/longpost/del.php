<?php
if(isset($_GET['page'])){
    $crpage=$_GET['page'];
}else{
    $crpage=1;
}
$id=$_GET['id'];
$muser=new Model_Longpost;
$muser->dellpost($id);
redirect(baseurl.'index.php?controller=admin&action=truyendai&page='.$crpage);
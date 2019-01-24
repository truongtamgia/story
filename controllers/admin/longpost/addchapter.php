<?php 
if(isset($_POST['ok'])){

}else{
    $data['ctpage']="admin/content/addchapter";
    loadview("admin/index",$data);
}
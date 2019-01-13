<?php
if(isset($_POST["ok"])){
    $name = $_POST["name"];
    if($name){
        $mcate = new Model_cate;
        $arr = array(
            "name" => $name
        );
        $mcate->add($arr);
    }
}
$data["ctpage"]="admin/content/addcate";
loadview("admin/index",$data);
<?php
if(isset($_POST["ok"])){
    $name = $_POST["name"];
    if($name){
        $mcate = new Model_Admin;
        $data = array(
            "name" => $name
        );
        $mcate->insertData($data);
    }
}
$data["ctpage"]="admin/content/addcate";
loadview("admin/index",$data);
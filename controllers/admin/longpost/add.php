<?php 
    if(isset($_POST["ok"])){

    }else{
        $mcate = new Model_Cate;
        $data["cate"]=$mcate->listAll();
        $data["ctpage"]="admin/content/addlpost";
        loadview("admin/index",$data);
    }
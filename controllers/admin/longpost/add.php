<?php 
    if(isset($_POST["ok"])){

    }else{
        $data["ctpage"]="admin/content/addlpost";
        loadview("admin/index",$data);
    }
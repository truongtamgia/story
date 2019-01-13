<?php 
    $id=$_GET["id"];
    $mcate = new Model_Cate;
    if(isset($_POST["ok"])){
        if($id!=""){
            $name = $_POST["name"];
            $data=array(
                "name"=>$name
            );
            $mcate->edit($id,$data);
            redirect(baseurl."index.php?controller=admin&action=listcate");
        }else{
            echo "asdasdasd";
        }
    }else{
        $data["cate"]=$mcate->getrow($id);
        $data["ctpage"]="admin/content/editcate";
        loadview("admin/index",$data);
    }
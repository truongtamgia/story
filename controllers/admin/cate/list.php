<?php
    $muser = new Model_Cate;
    $data["cate"] = $muser->listAll();
    $data["ctpage"]="admin/content/listcate";
    loadview("admin/index",$data);

<?php
    $id = $_GET['id'];
    $mcate = new Model_Cate;
    $mcate->del($id);
    echo $id;
    // redirect(baseurl."index.php?controller=admin&action=listcate");
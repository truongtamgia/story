<?php
    $id = $_GET['id'];
    $mcate = new Model_Cate;
    $mcate->del($id);
    redirect(baseurl."index.php?controller=admin&action=listcate");
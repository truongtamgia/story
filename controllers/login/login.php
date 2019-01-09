<?php 
if(isset($_POST['login'])){
    $u=$p="";
    $u=$_POST["username"];
    $p=$_POST["password"];
    if($u&&$p){
        $admin= new Model_Login;
        if($admin->checkLogin($u,$p)==FALSE){
            echo "sai";
        }else{
            $row=$admin->getInfo();
            echo "<pre>";
            print_r($row);
        }
    }
}
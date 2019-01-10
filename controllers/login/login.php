<?php 
if(isset($_POST['login'])){
    $u=$p="";
    $u=$_POST["username"];
    $p=$_POST["password"];
    if($u&&$p){
        $admin= new Model_Login;
        if($admin->checkLogin($u,$p)==FALSE){
            $data["err_login"] = "Sai tên hoặc mật khẩu";
            loadview("admin/login",$data);
        }else{
            $row=$admin->getInfo();
            $_SESSION["username"]=$row["username"];
            $_SESSION["level"]=$row["level"];
            $_SESSION["fullname"]=$row["fullname"];
            header("location:".baseurl."index.php?controller=admin&action=index");
        }
    }
}
<?php 
if(isset($_POST['ok'])){
    if(isset($_GET['page'])){
        $crpage=$_GET['page'];
    }else{
        $crpage=1;
    }
    $name=$tacgia=$mota=$cate=$anhbia=$nguoisua=$lastedit="";
    $name=$_POST['name'];
    $tacgia=$_POST['author'];
    $mota=$_POST['mota'];
    $cate=$_POST['category'];
    $nguoidang=$_SESSION["fullname"];
    $nguoisua=$_SESSION["fullname"];
    $id=$_GET['id'];
    if($_FILES['biasach']['name']!=''){
        $pathimg="upload/story/truyendai/";
        if($_FILES['biasach']['error']>0){
            $data['error'][]="upload ảnh lỗi";
        }else{
            $anhbia=time()."--".$_FILES['biasach']['name'];
        }
    }else{
        $anhbia='';
    }
    if($name&&$tacgia&&$mota&&$cate){
        $time=date('y/m/d');
        if($anhbia!=''){
            $data=array(
                "ten"=>$name,
                "mota"=>$mota,
                "tacgia"=>$tacgia,
                "id_cat"=>$cate,
                "image"=>$anhbia,
                'nguoidang'=>$nguoidang,
                'nguoi_sua'=>$nguoisua,
                'last_edit'=>$time
            );
            $mlp = new Model_Longpost;
            $mlp->edit($data,$id);
            move_uploaded_file($_FILES['biasach']['tmp_name'],$pathimg.$anhbia);
            redirect(baseurl."index.php?controller=admin&action=truyendai&page=".$crpage);
        }else{
            $data=array(
                "ten"=>$name,
                "mota"=>$mota,
                "tacgia"=>$tacgia,
                "last_edit"=>$time,
                "id_cat"=>$cate,
                'nguoidang'=>$nguoidang,
                'nguoi_sua'=>$nguoisua,
            );
            $mlp = new Model_Longpost;
            $mlp->edit($data,$id);
            redirect(baseurl."index.php?controller=admin&action=truyendai&page=".$crpage);
        }
    }else{
        $id=$_GET['id'];
        $page=$_GET['page'];
        $muser=new Model_Longpost;
        $mcate=new Model_Cate;
        $data['info']=$muser->dataedit($id);
        $data['cate']=$mcate->listAll();
        $data['ctpage']='admin/content/editlpost';
        loadview("admin/index",$data);
        $data['error']="Đã có lỗi phát sinh, tìm hiểu lại chứ lười check lỗi!!!";
    }
}else{
    $id=$_GET['id'];
    $page=$_GET['page'];
    $muser=new Model_Longpost;
    $mcate=new Model_Cate;
    $data['info']=$muser->dataedit($id);
    $data['cate']=$mcate->listAll();
    $data['ctpage']='admin/content/editlpost';
    loadview("admin/index",$data);
}


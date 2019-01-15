<?php 
    if(isset($_POST["ok"])){
        $name=$tacgia=$mota=$cate=$anhbia="";
        $name=$_POST['name'];
        $tacgia=$_POST['author'];
        $mota=$_POST['mota'];
        $cate=$_POST['category'];
        if($_FILES['biasach']['name']!=''){
            $pathimg="upload/story/truyendai/";
            if($_FILES['biasach']['error']>0){
                $data['error'][]="upload ảnh lỗi";
            }else{
                $anhbia=time().$_FILES['biasach']['name'];
            }
        }else{
            $data['error'][]="Cần thêm ảnh bìa khi đăng";
        }
        if($name&&$tacgia&&$mota&&$cate&&$anhbia){
            $time=time('d/m/y');
            $data=array(
                "ten"=>$name,
                "mota"=>$mota,
                "tacgia"=>$tacgia,
                "ngaydang"=>$time,
                "id_cat"=>$cate,
                "image"=>$anhbia
            );
            $mlp = new Model_Longpost;
            $mlp->insertlp($data);
            move_uploaded_file($_FILES['biasach']['tmp_name'],$pathimg.$anhbia);
        }else{
            $mcate = new Model_Cate;
            $data["cate"]=$mcate->listAll();
            $data["ctpage"]="admin/content/addlpost";
            loadview("admin/index",$data);
        }
    }else{
        $mcate = new Model_Cate;
        $data["cate"]=$mcate->listAll();
        $data["ctpage"]="admin/content/addlpost";
        loadview("admin/index",$data);
    }
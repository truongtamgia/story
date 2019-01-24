<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $muser = new Model_Longpost;
    $sopost=$muser->checkget($id);
    if($sopost==0){
        redirect(baseurl."index.php?controller=admin&action=addchapter&id=".$id);
    }else{
        $data['post']=$muser->laytruyendai($id);
        $data['row']=$muser->getfirst($id);
        $temp=$data['row']['ps_tentap'];
        $data['lastchap']=$temp +1;
        $data['ctpage']="admin/content/listchapter";
        loadview('admin/index',$data);
    }
}else{
    loadview('admin/404');
}

<?php
if(isset($_GET['id'])&&$_GET['id']!=""){
    $id=$_GET['id'];
    if(isset($_GET['page'])){
        if($_GET['page']=='0' || $_GET['page']<'0'){
            $trang=1;
        }else{
            $gtrang=$_GET['page'];
            $trang=(int)$gtrang;
        }
    }else{
        $trang=1;
        $muser = new Model_Longpost;
        $sopost=$muser->checkget($id);
        if($sopost >= 1){
            $record='10';
            $data['post']=$muser->laytruyendai($id,$trang,$record);
            $sosanh=$data['post']['sotrang'];
            $range=10;
            $min=$trang-ceil($range/2)+1;
            $max=$trang+ceil($range/2)-1;
            if($min<=0){
                $min=1;
            }elseif($max>=$sosanh){
                $delta=$max-$sosanh;
                $min=$min-$delta;
                $max=$sosanh;
            }
            if($trang > $sosanh){
                loadview("admin/404");
            }elseif(isset($_GET['page']) && $_GET['page']<=0){
                loadview("admin/404");
            }else{
                if($range>$trang){
                    $data['min']=1;
                    $data['max']=$range;
                }else{
                    $data['min']=$min;
                    $data['max']=$max;
                }
                $data['ctpage']="admin/content/listchapter";
                loadview("admin/index",$data);
            }
        }else{
            echo "tạm thời thế đã";
        }
    }
}else{
    redirect(baseurl."index.php?controller=admin&action=truyendai");
}
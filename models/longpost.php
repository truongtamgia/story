<?php 
class Model_Longpost extends Model{
    protected $_table="truyendai";
    public function listAll($trang="1",$record="5"){
        $sql="select * from truyendai inner join danhmuc on truyendai.id_cat=danhmuc.id";
        $this->query($sql);
        $sopost=$this->num_rows();
        $tongpage=ceil($sopost/$record);
        if($trang > $tongpage){
            $start='0';
        }else{
            $start=$trang*$record-$record;
        }
        $sql="select * from truyendai inner join danhmuc on truyendai.id_cat=danhmuc.id order by id_truyendai desc limit $start,$record";
        $this->query($sql);
        $data['fetch']=$this->fetchAll();
        $data['sotrang']=$tongpage;
        return $data;
    }
    public function insertlp($data){
        $this->insert($this->_table,$data);
    }
    public function dellpost($id){
        $this->where($where="id_truyendai='$id'");
        $this->delete($this->_table);
    }
    public function dataedit($id){
       $this->where($where="id_truyendai='$id'");
       $this->getData($this->_table);
       return $data[]=$this->fetch();
    }
    public function edit($data,$id){
        $this->where($where="id_truyendai='$id'");
        $this->update($this->_table,$data);
    }
    public function laytruyendai2($id){
        $sql="select * from post inner join truyendai on post.id_truyendai_f=truyendai.id_truyendai where id_truyendai='$id'";
        $this->query($sql);
        return $data=$this->fetchAll();
    }
    public function laytruyendai($id,$trang="1",$record="5"){
        $sql="select * from post inner join truyendai on post.id_truyendai_f=truyendai.id_truyendai where id_truyendai='$id'";
        $this->query($sql);
        $sopost=$this->num_rows();
        $tongpage=ceil($sopost/$record);
        if($trang > $tongpage){
            $start='0';
        }else{
            $start=$trang*$record-$record;
        }
        $sql="select * from post inner join truyendai on post.id_truyendai_f=truyendai.id_truyendai where id_truyendai='$id' order by tentap desc limit $start,$record";
        $this->query($sql);
        $data['fetch']=$this->fetchAll();
        $data['sotrang']=$tongpage;
        $data['sopost']=$sopost;
        return $data;
    }
    public function checkget($id){
        $sql="select * from post inner join truyendai on post.id_truyendai_f=truyendai.id_truyendai where id_truyendai='$id'";
        $this->query($sql);
        return $sopost=$this->num_rows();
    }
}
<?php 
class Model_Longpost extends Model{
    protected $_table="truyendai";
    public function listAll(){
        $sql="select * from truyendai inner join danhmuc on truyendai.id_cat=danhmuc.id";
        $this->query($sql);
        return $this->fetchAll();
    }
    public function insertlp($data){
        $this->insert($this->_table,$data);
    }
}
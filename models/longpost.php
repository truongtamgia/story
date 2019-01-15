<?php 
class Model_Longpost extends Model{
    protected $_table="truyendai";
    public function insertlp($data){
        $this->insert($this->_table,$data);
    }
}
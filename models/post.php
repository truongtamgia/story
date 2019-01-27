<?php 
class Model_Post extends Model{
    protected $_table="post";
    public function addchapter($data){
        $this->insert($this->_table,$data);
    }
    public function getpost($id){
        $this->where($where="postid='$id'");
        $this->getData($this->_table);
        return $this->fetch();
    }
    public function editchapter($id,$data){
        $this->where($where="postid='$id'");
        $this->update($this->_table,$data);
    }
}
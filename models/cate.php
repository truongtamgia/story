<?php
    class Model_Cate extends Model{
        protected $_table = "danhmuc";
        public function listAll(){
            $this->getData($this->_table);
            return $this->fetchAll();
        }
        public function del($id){
            $this->_where="where id='$id'";
            $this->delete($this->_table);
        }
    }
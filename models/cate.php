<?php
    class Model_Cate extends Model{
        protected $_table = "danhmuc";
        public function listAll(){
            $this->getData($this->_table);
            return $this->fetchAll();
        }
        public function del($id){
            $this->where($where="id='$id'");
            $this->delete($this->_table);
        }
        public function add($data){
            $this->insert($this->_table,$data);
        }
        public function getrow($id){
            $this->_where="where id='$id'";
            $this->getData($this->_table);
            return $this->fetch();
        }
        public function edit($id,$data){
            $this->where($where="id='$id'");
            $this->update($this->_table,$data);
        }
    }
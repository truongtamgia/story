<?php
class Model_Admin extends Model{
    protected $_table="admin";
    public function listAll(){
        $this->getData($this->_table);
        return $this->fetchAll();
    }
}
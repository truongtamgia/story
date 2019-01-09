<?php
class Model_Login extends Model{
    protected $_table="admin";
    public function checkLogin($user,$pass){
        $where=array(
            "username"=>$user,
            "password"=>$pass
        ); 
        $this->where($where);
        $this->getData($this->_table);
        if($this->num_rows()!=0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function getInfo(){
        return $this->fetch();
    }
}
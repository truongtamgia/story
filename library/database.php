<?php 
class Database{
    protected $_hostname="localhost";
    protected $_userhost="root";
    protected $_passhost="";
    protected $_dbname="t3g_blog";
    protected $_conn;
    protected $_result;
    protected $_select;

    public function connect(){
        $this->_conn=mysqli_connect($this->_hostname,$this->_userhost,$this->_passhost,$this->_dbname);
        mysqli_select_db($this->_conn,$this->_dbname);
    }
    public function query($sql){
        $this->_result = mysqli_query($this->_conn,$sql);
    }
    public function num_rows(){
        if($this->_result){
            $row = mysqli_num_rows($this->_result);
        }else{
            $row=0;
        }
        return $row;
    }
    public function fetch(){
        if($this->_result){
            $row=mysqli_fetch_assoc($this->_result);
        }else{
            $row=0;
        }
        return $row;
    }
    public function fetchAll(){
        if($this->_result){
            while($row=$this->fetch()){
                $data[]=$row;
            }
        }else{
            $data=0;
        }
        return $data;
    }
}
 
class Model extends Database{
    protected $_where;
    protected $_select="*";
    protected $_order;
    protected $_limit;
    public function __construct(){
        $this->connect();
    }
    public function where($where){
        if(is_array($where)){
            foreach($where as $k=>$v){
                $arr[]="$k= '$v'";
            }
            $this->_where="where ".implode(" and ",$arr);
        }else{
            $this->_where="where $where";
        }
    }

    public function select($col){
        if($col!=""){
            $this->_select=$col;
        }
    }
    public function order($col,$type="asc"){
        if($col!=""){
            $this->_order="order by $col $type";
        }
    }
    public function limit($start,$record){
        $this->_limit="limit $start,$record";
    }
    public function insert($table,$data){
        $col=implode(",",array_keys($data));
        $newarr = array_values($data);
        foreach($newarr as $val){
            $arr[]="'$val";
        }
        $value = implode(",",$arr);
        $sql="insert into $table($col) values($value)";
        $this->query($sql);
    }
    public function update($table,$data){
        if($this->where()){
            $where = $this->_where;
        }else{
            $where="";
        }
        foreach($data as $k=>$v){
            $arr[] = "$k = '$v'";
        }
        $col = implode(",",$arr);
        $sql = "update $table  set $col where $where";
        $this->query($sql);
    }
    public function delete($table){
        if($this->where()){
            $where = $this->_where;
        }else{
            $where="";
        }
        $sql = "delete from $table where $where";
        $this->query($sql);
    }
    public function getData($table){
        $sql="select $this->_select from $table $this->_where $this->_order $this->_limit";
        $this->query($sql);
    }

}
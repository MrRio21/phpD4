<?php 

class Db{

 private $link ;

 public function constructor($host,$user,$pass,$dbName){
$this->link = mysqli_connect($host,$user,$pass,$dbName);
 }
public function getRowData($id){
    
    $query="select * from items where id = ".$id;
    $result = mysqli_query($this->link,$query);
    $row = mysqli_fetch_array($result);
    return $row;
}

}
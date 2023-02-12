<?php

class Mysqli implements Db {
    private $con;
    public function __construct()
    {
        $this->con = mysqli_connect('localhost' , 'root' , '' , 'test');
    }
    public function select($query){
        
    }
    public function selectAll($query){
        
    }
    public function update($query){
        
    }
    public function delete($query){
        
    }
}
?>
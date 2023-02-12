<?php

class Postgree implements Db {
    private $con;
    public function __construct()
    {
        $this->con = pg_connect();
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
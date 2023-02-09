<?php
include_once "User.php";

class Teacher extends User{
    public string $salary;

    public function loginTeacher(){
        echo "logged in";
    }

    public function login()
    {
        echo "logged in";
    }

    public static function getAnything(){
        echo "anyhing";
    }

}
?>
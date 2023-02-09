<?php
include_once "User.php";
class Student extends User implements Test ,Test2 {
    public string $major = 'cs';
    // methods
    public function getEmail(){
        echo $this->email;
    }
    public function doThat(){
        echo "you got that";
    }

    public function login(){
        echo "logged in";
    }

    public function func1()
    {
        echo "from func1";
    }
    public function func2()
    {
        echo "from func2";
    }
    public function func3()
    {
        echo "from func3";
    }
    public function func4()
    {
        echo "from func4";
    }
    public function func5()
    {
        echo "from func5";
    }
    public function func6()
    {
        echo "from func6";
    }


}

?>
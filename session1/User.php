<?php
    class User{
        // properties
        private int $id , $age = 0;
        public string $name , $email;


        // methods
        public function __construct($name , $email , $age)
        {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            echo $this->welcome();
        }

        public function __destruct()
        {
            echo "bye bye";
        }


        public function welcome(): string{
            return "welcome $this->name";
        }

        public function setAge($a){
            if($a < 0){
                echo 'invalid age';
            }else{
                $this->age = $a;
            }
        }

        public function getAge(){
            return $this->age;
        }
    }
?>
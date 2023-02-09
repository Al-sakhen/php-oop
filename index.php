<?php
/**
 * inheritnace * ✅
 * overriding overloading ✅
 * access modifires  ✅
 * abstract *  ✅
 * polymorphisim (interface) * ✅
 * static ✅
 * final ✅
 * chaining ✅
 */


//      3scopes
//    1- public scope => outside the classs
//    2- inherit scope
//    3- class
  


    include "Teacher.php";
    include "Calculate.php";

    // $user1 = new Teacher('ahmad' , 'ahmad@gmail.com' , 25);
    // $user1->name = "raed";
    // echo $user1->email;
 
    // echo '<pre>';
    // print_r($user1);
    // echo '</pre>';


    // call static method
    // Teacher::getAnything();

    // chaining
    $tot = new Calculate();
    echo $tot->addOne()->addTwo()->addThree()->addFour()->getTotal();
?>
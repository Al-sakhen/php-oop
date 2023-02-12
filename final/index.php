<?php
/** 
 * trait ✅
 *  -fix multi inheritance problem
 * nampespace ✅
 * pdo
*/

// ==== trait ====
// trait A {
//     private $name;
//     public function setName($name) {
//         $this->name = $name;
//     }
//     public function getName() {
//         return $this->name;
//     }
// }
// trait B  {
//     private $type;
//     public function setType($type)  {
//         $this->type = $type;
//     }
//     public function getType() {
//         return $this->type;
//     }
// }
// class User {
//     use A, B;
//     private $name;
//     public function __construct($name ,$type)
//     {
//         $this->name = $name;
//         $this->type = $type;
//     }
// }
// $user1 = new User('ahmad' , 'admin');
// $user1->setName('raed');
// echo $user1->getName();



//   ==== namespaces ==== 
// include "Auth.php";
// include "Payment.php";

// use Ahmad\Auth\User as AuthUser;
// use Ahmad\Payment\User as PaymentUser;
// $user = new AuthUser;
// $user1 = new AuthUser;
?>
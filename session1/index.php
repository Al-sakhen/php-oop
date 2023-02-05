<?php
    include "User.php";

    $user1 = new User('ahmad' , 'ahmad@gmail.com' , 25);
    echo '<pre>';
    print_r($user1);
    echo '</pre>';
?>
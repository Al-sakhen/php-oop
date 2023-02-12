<?php

    $db = new PDO("mysql:host=localhost;port=3306;dbname=company", 'root' ,'');

    // ====== select all =====
    $admins = $db->query("SELECT * FROM `admins`")->fetchAll();
    echo '<pre>';
    print_r($admins);
    echo '</pre>';


    // ====== insert into =====
    $name = "maram";
    $email = "maram@gmail.com";
    $password ="123456789";

    $query = $db->prepare("INSERT INTO `admins`(`name` , `email` , `password`)
        VALUES(:name , :email , :password)");
    $query->bindParam(":name" , $name);
    $query->bindParam(":email" , $email);
    $query->bindParam(":password" , $password);

    $query->execute();
?>
<?php

    

    require_once 'config/db.php';

    

    $contact_id = $_GET['id'];



    $contact = mysqli_query($connect, "SELECT * FROM `contacts` WHERE `id` = '$contact_id'");

    

    $contact = mysqli_fetch_assoc($product);


?>

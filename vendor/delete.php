<?php


require_once '../config/db.php';



$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `contacts` WHERE `contacts`.`id` = '$id'");



header('Location: /');
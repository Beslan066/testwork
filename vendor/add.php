<?php

require_once '../config/db.php';


$name = $_POST['name'];
$phone = $_POST['phone'];

mysqli_query($connect,"INSERT INTO `contacts` (`id`, `name`, `phone`) VALUES (NULL, '$name', '$phone')");

header('Location: /');



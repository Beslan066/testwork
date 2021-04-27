<?php
require_once 'config/db.php';


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testwork</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">

       <div class="container">
            
        <div class="form">

            <h2>Добавить контакт</h2>
            <hr>
            <div class="wrapper">
                
                <form action="vendor/add.php" method="post">
                    <input type="text" name="name" placeholder="Имя" class="name">
                    <input type="text" name="phone" placeholder="Телефон">
                    <button class="submit" type="submit">Добавить</button>
                </form>
            </div>
            
        </div>
        <div class="contact">
            <h2>Список контактов</h2>
            <hr>

                
            
                

                <?php

                    $contacts = mysqli_query($connect, "SELECT * FROM `contacts`");
                    $contacts = mysqli_fetch_all($contacts);

                    foreach ($contacts as $contact) {
                        ?>
                        
                        <div class="wrapper" id="contacts">
                            <span class="name-span"></span><?= $contact[1] ?><span><a href="vendor/delete.php?id=<?= $contact[0] ?>"> x</a></span><br>
                            <span class="phone-span"><?= $contact[2] ?></span><br>
                        </div>
                        <hr>
                        <?php
                    }
                ?>
                        

                
                
                

            
        </div>
       </div> 
        
    </div>

    <script src="js/index.js"></script>
</body>
</html>

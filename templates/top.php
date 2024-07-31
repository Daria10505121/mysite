<?php

session_start();

require_once('config/config.php');


// if(isset($_GET['url'])){
//     $url = $_GET['url'];
// }else{
//     $url = 'index';
// }
// $query = "SELECT * FROM main_texts WHERE url = '$url'";

// $tab = mysqli_query($link, $query);

// if(!$tab){
//     exit($query);
// }

// $arr = mysqli_fetch_array($tab);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Мой Сайт</a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Главная</a></li>
                    <li><a href="#" class="hover:text-gray-400">О нас</a></li>
                    <li><a href="#" class="hover:text-gray-400">Услуги</a></li>
                    <li><a href="#" class="hover:text-gray-400">Контакты</a></li>
                </ul>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="registration.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Регистрация</a>
            </div> 
            <?php
                if(isset($_SESSION['user_id'])){
                    
                ?>
                       <div class="flex items-center space-x-4">
                <a href="logout.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Выход</a>
            </div>
            <?php
                }else{
                ?>

            <div class="flex items-center space-x-4">
                <a href="login.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Вход</a>
            </div>
            <?php
                }
                ?>
            <div class="flex items-center space-x-4">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Заказать мероприятие</a>
            </div>
        </div>
    </header>


   



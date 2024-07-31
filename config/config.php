<?php

    // error_reporting(0);
    $db_host = 'localhost'; //адрес сервера
    $db_user = 'root'; //имя пользователя
    $db_password = ''; //пароль
    $db_name = 'site'; //имя базы данных

    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name); //создание подключения к базе


    if (!$link) {
        exit('Error connect database');
    }
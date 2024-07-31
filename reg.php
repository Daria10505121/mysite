<?php
require_once 'templates/top.php';

$pattern_login = strlen($_POST['login']);
$pattern_password = strlen($_POST['password']);
$pattern_confPassword = strlen($_POST['confPassword']);
$pattern_name = strlen($_POST['name']);

if(!empty($_POST)){
    $error = [];

    // сравниваем пароль 
    if ($pattern_password != $pattern_confPassword){
        $error[] = 'Не совпадают пароли';
    }
    

         $query = "SELECT * FROM users WHERE email = '".$_POST['email']."'";

    $usr = mysqli_query($link, $query);

    
  if(!$usr){
      exit($query);}

    $check = @mysqli_fetch_array($usr);

    #print_r($check);

    if($check != null){
    if($check['id'])
    {
        $error[] = "Пользователь с таким именем уже существует";
    }
}


    //echo $pattern_login; проверка
    if($pattern_login < 6 ){
    $error[] = 'В поле логин ввели менее 6 символов';
    }
    if($pattern_password < 6){
      $error[] = 'В поле пароль ввели менее 6 символов';
    }
    if($_POST['confPassword'] != $_POST['password'] ){
      $error[] = 'Пароли не совпадают!';
    }
    if($pattern_name < 2 ){
      $error[] = 'В поле имя ввели менее 2 символов';
    }
    // вся валидация
    if (empty($error)){

        $query = "INSERT INTO users VALUES (NULL,
                                            '{$_POST['name']}',
                                            '{$_POST['login']}',
                                            '{$_POST['email']}',
                                            '{$_POST['password']}',
                                            'default',
                                            NOW(),
                                            NOW()
                                            )";

        $result = mysqli_query($link, $query);

        if (!$result){
            exit('Ошибка');
        }else{
            echo 'Спасибо, вы зарегистрированы! Войдите в личный кабинет.';
        }

    }else{

        foreach ($error as $item) {
            echo $item . '';
        }

    }

}


require_once ('templates/bottom.php');



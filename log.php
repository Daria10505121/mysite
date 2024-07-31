<?php
require_once 'templates/top.php';

if (!empty($_POST)){

  $query = "SELECT * FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['password']}' AND status='default' LIMIT 1";

  $result = mysqli_query($link, $query);

  if (!$result){
      echo 'Ошибка';
  }

  $user = mysqli_fetch_array($result);
  if($user != null){
    if ($user['id']){
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['name'];
      echo 'Поздравляем! Вы успешно зашли в личный кабинет!';
    }
  }else{
    echo 'Не удалось войти';
  }
//   if ($user['id']){
//       $_SESSION['user_id'] = $user['id'];
//       $_SESSION['user_name'] = $user['name'];
//       echo 'Поздравляем! Вы успешно зарегистрированы!';
//       // header('location:index.php');
// // перенаправление

//   }else{
//       echo 'Не удалось войти';
//   }
}

require_once('templates/bootom.php');
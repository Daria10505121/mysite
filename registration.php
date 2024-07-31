<?php
require_once 'templates/top.php';
?>
 
 <div id="registration" class="page p-x-1 p-y-3">
  <form class="card card-block m-x-auto bg-faded form-width" method="post" action="reg.php" id="registration">
    <legend class="m-b-1 text-xs-center">Регистрация</legend>
    <div class="mb-3 form-group input-group">
      <label for="login" class="form-label">ЛОГИН</label>
      <input type="text" class="form-control"  required name="login">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="password" class="form-label">ПАРОЛЬ</label>
      <input type="password" class="form-control"  required name="password" title = "Пароль должен соcтоять из букв и цифр" pattern="[A-Za-zА-Яа-яЁё0-9]{1,}">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="confPassword" class="form-label">ПОВТОРИТЬ ПАРОЛЬ</label>
      <input type="password" class="form-control"  required name="confPassword">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control"  required name="email">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="name" class="form-label">ИМЯ</label>
      <input type="text" class="form-control" required name="name" title = "Имя должно состоять минимум из двух букв и не содержать цифр" pattern="[A-Za-zА-Яа-яЁё]{2,}">
    </div>
    <div class="text-xs-center">
        <button class="btn btn-block btn-primary" type="submit">Регистрация</button>
    </div>
  </form>
</div>


  
 <!-- <form metod="post" id="reg" action="reg.php">
        <div class="mb-4">
          <label for="name" class="block font-medium mb-2">Имя</label>
          <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-md p-2" >
        </div>
        <div class="mb-4">
          <label for="email" class="block font-medium mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block font-medium mb-2">Логин</label>
          <input type="text" id="login" name="login" class="w-full border-gray-300 rounded-md p-2" >
        </div>
        <div class="mb-4">
          <label for="password" class="block font-medium mb-2">Пароль</label>
          <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-6">
          <label for="confirm-password" class="block font-medium mb-2">Подтвердите пароль</label>
          <input type="password" id="confpassword" name="confpassword" class="w-full border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md">Зарегистрироваться</button>
    </form> -->

   
   
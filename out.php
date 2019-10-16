<?php
session_start(); 	
$id = $_SESSION['id'];			 	
mysql_query("UPDATE users SET online=0 WHERE id='$id'"); //обнуляем поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем) 	
unset($_SESSION['id']); //удаляем переменную сессии 	
SetCookie("login", ""); //удаляем cookie с логином 	
SetCookie("password", ""); //удаляем cookie с паролем  	
header('Location: http://'.$_SERVER['HTTP_HOST'].'/HsTutorial/index.php'); //перенаправляем на главную страницу сайта 
?>
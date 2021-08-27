<?php
session_start();

if($_SESSION['role']=="1"){ //Р1ЗВ
	header('Location: /admin/main.php');
}
if($_SESSION['role']=="2"){ //Контент-менеджер
	header('Location: /admin/main.php');
}
if($_SESSION['role']=="3"){ //Наполнитель
	header('Location: /admin/fill.php');
}
if($_SESSION['role']=="4"){ //Поисковик
	header('Location: /admin/search.php');
}
?>
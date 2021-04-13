<?php
session_start();

if(key_exists("logout",$_GET)){
   unset($_SESSION['login']);
    header('Location: login.php');
    exit();
}
elseif(!key_exists("login",$_SESSION)){
    header('Location: login.php');
    exit();
}
else{
    header('Location: diskuze.php');
    exit();
}




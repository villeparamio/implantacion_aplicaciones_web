<?php
session_start();
if (isset($_POST["usuario"])&&isset($_POST["contraseña"])){
    if ($_POST["usuario"]=="estudia"&&$_POST["contraseña"]=="mucho"){
        $_SESSION["correcto"]=1;
        header('location:bienvenido.php');
    }else{
        unset($_SESSION);
        session_destroy();
        header('location:login.php');
    }
}else{
    header('location:login.php');
}
<?php

session_start();
$login = $_SESSION['login'];

if(!$login){
    header('Location: index.php');
}
else{
    $email = $_SESSION['Correo'];
}


?>
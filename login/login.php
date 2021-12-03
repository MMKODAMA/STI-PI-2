<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../connection/connectionFactory.php');

$stmt = $db->prepare('SELECT id,email,senha FROM usuario WHERE email = :email');

$stmt->execute([':email'=> $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if($registro){
    if(password_verify($_POST['password'], $registro['senha'])){
        header('Location: ../home/index.php');
    }else{
        header('Location: erro.html');

    }
}else{

    header('Location: erro.html');
}

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=pi';
$bd_user = 'root';
$bd_pass = '';


$bd = new PDO($bd_dsn,$bd_user,$bd_pass);

if(!empty($_POST['apagar'])){
    $stmt = $bd-> prepare('DELETE FROM produto WHERE id = :id');

    $success = $stmt->execute([':id' => $_POST['apagar']]);

    header('Location: listarProdutos.php?apagado=' . $success);
}




/*
$preparda = $bd->prepare('UPDATE produto SET nome = :nome WHERE id = $registro['id']');

if($preparda){
    if($preparda->execute([':nome' => $novo_nome])){
        echo'foii';
    }  
}else{
    echo'errouu!!';
}
*/

//require("cadastroProduto.php");
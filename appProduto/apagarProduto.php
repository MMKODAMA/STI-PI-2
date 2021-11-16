<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../connection/connectionFactory.php");

if(!empty($_POST['apagar'])){
    $stmt = $db-> prepare('DELETE FROM produto WHERE id = :id');

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
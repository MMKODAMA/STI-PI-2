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



if(!empty($_POST['editar'])){
    $sql = 'SELECT id, nome, preco, descricao, quantidade FROM produto WHERE id = id';

    foreach($db->query($sql) as $registro){

    $id = $registro['id'];
    $nome = $registro['nome'];
    $preco = $registro['preco'];
    $descricao = $registro['descricao'];
    $quantidade = $registro['quantidade'];  
}

    require("editarProduto.php");
}

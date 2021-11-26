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
    $sql = 'SELECT id, nome, preco, descricao, quantidade FROM produto WHERE id = :id';

    $preparada = $db->prepare($sql);
    $preparada->execute([':id' => $_POST['editar']]);
    $result = $preparada->fetch(PDO::FETCH_ASSOC);

    $id = $result['id'];
    $nome = $result['nome'];
    $preco = $result['preco'];
    $descricao = $result['descricao'];
    $quantidade = $result['quantidade'];  
    
    require("editarProduto.php");
}
    

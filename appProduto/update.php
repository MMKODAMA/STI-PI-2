<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../connection/connectionFactory.php");

$preparada = $db->prepare("UPDATE produto SET nome =  :nome, preco = :preco, descricao = :descricao,quantidade = :quantidade WHERE id = :id");

$parameters = array(    ':id' => $_POST['id'], 
                        ':nome' => $_POST['nome'],
                        ':preco' => $_POST['preco'],
                        ':descricao' => $_POST['desc'],
                        ':quantidade'=> $_POST['quant']);
if($preparada->execute($parameters) ){
    header('Location: listarProdutos.php?gravado=1');
} else {
    echo "<br><br> Não consegui atualizar no banco :-(";
}


//header('Location: listar.php');


//$sql = 'UPDATE nome, preco, descricao, quantidade FROM produto WHERE id = id';

//$stmt->execute($sql);
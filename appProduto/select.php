<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../connection/connectionFactory.php");

$sql = 'SELECT id, nome, preco, descricao, quantidade FROM produto WHERE id = id';

foreach($db->query($sql) as $registro){

  $id = $registro['id'];
  $nome = $registro['nome'];
  $preco = $registro['preco'];
  $descricao = $registro['descricao'];
  $quantidade = $registro['quantidade'];

    
}

require('editarProduto.php');
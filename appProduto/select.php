<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$bd_dsn = 'mysql:host=localhost;port=3306;dbname=pi';
$bd_user = 'root';
$bd_pass = '';

//var_dump($_POST);
$bd = new PDO($bd_dsn,$bd_user,$bd_pass);


$sql = 'SELECT id, nome, preco, descricao, quantidade FROM produto WHERE id = id';

foreach($bd->query($sql) as $registro){

  $id = $registro['id'];
  $nome = $registro['nome'];
  $preco = $registro['preco'];
  $descricao = $registro['descricao'];
  $quantidade = $registro['quantidade'];

    
}

require('editarProduto.php');
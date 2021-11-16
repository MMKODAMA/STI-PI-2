<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$bd_dsn = 'mysql:host=localhost;port=3306;dbname=pi';
$bd_user = 'root';
$bd_pass = '';


$bd = new PDO($bd_dsn,$bd_user,$bd_pass);

$preparada = $bd->prepare("UPDATE produto SET nome =  $_POST['nome'], preco = $_POST['preco'], descricao = $_POST['desc'],quantidade = $_POST['quant'] WHERE id = id");




//header('Location: listar.php');


//$sql = 'UPDATE nome, preco, descricao, quantidade FROM produto WHERE id = id';

//$stmt->execute($sql);
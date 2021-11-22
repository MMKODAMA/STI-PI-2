<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../connection/connectionFactory.php");


        //$id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quant'];
       

        //Prerar a consulta do bd
        $stmt = $db->prepare('UPDATE produto SET 
                                        
                                        nome = :nome, 
                                        preco = :preco, 
                                        descricao = :descricao, 
                                        quantidade = :quant
                                    WHERE
                                        id = :id');

        $stmt->bindParam( ':nome', $nome);
        $stmt->bindParam( ':preco', $preco);
        $stmt->bindParam( ':descricao', $descricao);
        $stmt->bindParam( ':quantidade', $quantidade);
        $stmt->bindParam( ':id', $id);

$preparada = $db->prepare("UPDATE produto SET nome = :nome, preco = :preco, descricao = :descricao, quantidade = :quantidade  WHERE id = :id");

$stmt->execute();






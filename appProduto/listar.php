<?php

require("../connection/connectionFactory.php");

$stmt = $db->query('SELECT id, nome, descricao, preco, quantidade FROM produto');

$registros = $stmt->fetchAll();
include('telas/listar.php');

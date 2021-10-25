<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../connection/connectionFactory.php');

$_POST['nomeCliente'] =$_POST['nomeCliente'] ?? '';
$_POST['emailCliente'] = $_POST['emailCliente'] ?? '';
$_POST['senhaCliente'] = $_POST['senhaCliente'] ?? '';

if( empty($_POST['nomeCliente']) || empty($_POST['emailCliente']) || empty($_POST['senhaCliente'])){

    die('<br><br>ERRO! Os Campos nome e dia sao obrigatorios');

}

echo"Nome: {$_POST['nomeCliente']}";
echo"<br><br>";
echo"Email: {$_POST['emailCliente']}";
echo"<br><br>";
echo"Senha: {$_POST['senhaCliente']}";
echo"<br><br>";

$stmt = $db->prepare('INSERT INTO usuario 
                            (nome, email, senha)
                      VALUES
                            (:nomeCliente, :emailCliente,:senhaCliente)');

$valores[':nomeCliente'] = $_POST['nomeCliente'];
$valores[':emailCliente'] = $_POST['emailCliente'];
$valores[':senhaCliente'] = password_hash($_POST['senhaCliente'], PASSWORD_DEFAULT);

if($stmt->execute($valores)){
    echo "Dados gravados com sucesso!";
}else{
    echo"ERRO AO GRAVAR NO BANCO DE DADOS!";
}
echo"<pre>";
var_dump($valores);
echo"</pre>";
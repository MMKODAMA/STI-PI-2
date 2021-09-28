<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

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

//banco de dados

$db_dsn = 'mysql:host=localhost;port=3306;dbname=loja';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('INSERT usuario 
                            (nomeCliente, emailCliente, senhaCliente)
                      VALUES
                            (:nomeCliente, :emailCliente,:senhaCliente)');

$valores[':nomeCliente'] = $_POST['nomeCliente'];
$valores[':emailCliente'] = $_POST['emailCliente'];
$valores[':senhaCliente'] = $_POST['senhaCliente'];


// array(':nomeAula'= $_POST['nomeAula'],
//                 ':nomeProfessor' = $_POST['nomeProfessor'],
//                 ':diaAula' = $_POST['diaAula'],
//                 ':descricao' = $_POST['descricao'],
//                 ':ip' = $_SERVER['REMOTE_ADDR']
// );

if($stmt->execute($valores)){
    echo "Dados gravados com sucesso!";
}else{
    echo"ERRO AO GRAVAR NO BANCO DE DADOS!";
}
echo"<pre>";
var_dump($valores);
echo"</pre>";
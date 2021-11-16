<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$bd_dsn = 'mysql:host=localhost;port=3306;dbname=pi';
$bd_user = 'root';
$bd_pass = '';


$bd = new PDO($bd_dsn,$bd_user,$bd_pass);


//$sql = 'SELECT id, nome, preco, descricao, quantidade FROM produto';

/*
$_GET['apagado'] = $_GET['apagado'] ?? false;
$_GET['gravado'] = $_GET['gravado'] ?? false;

if($_GET['apagado']){
    echo"<font color='red'>Apagado com sucesso!</font><br>";
}
if($_GET['gravado']){
    echo"<font color='green'>Gravado com sucesso!</font><br>";
}

*/

$stmt = $bd->query('SELECT id, nome, descricao, preco, quantidade FROM produto');

$registros = $stmt->fetchAll();




require('telas/listar.php');  




/*
echo'<a href="cadastroProduto.html">+proudto</a><br>
    <form action="apagarProduto.php" method="post">
        <table border="2">
            <tr>
            <th>id</th> <th>Nome</th> <th>descrição</th> <th>preço</th> <th>quantidade</th> <th>Ações</th> 
            </tr>';
            
foreach($bd->query($sql) as $registro){
    echo" <tr>
            <td>{$registro['id']}</td> 
            <td>{$registro['nome']}</td> 
            <td>{$registro['descricao']}</td> 
            <td>{$registro['preco']}</td> 
            <td>{$registro['quantidade']}</td> 
            <td>
                <button name='editar' value='{$registro['id']}'>editar</button>
                <button name='apagar' value='{$registro['id']}'>apagar</button>
            </td> 
          </tr>";
}
echo'   </table>
    </form>';
*/


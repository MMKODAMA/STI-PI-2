<?php

require_once('../../connection/connectionFactory.php');

$stmt = $db->prepare(" INSERT INTO usuario
                            (nome, email, senha)
                        VALUES 
                            (:nome, :email, :senha)");

$valores[':nome'] = $_POST['nome'];
$valores[':email'] = $_POST['email'];
$valores[':senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);

var_dump($valores);
//Executamos a consulta SQL
if( $stmt->execute($valores) ){
    header('Location: ../login.html');
} else {
    echo "<br><br> Não consegui gravar no banco :-(";
}

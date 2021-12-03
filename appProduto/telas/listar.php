<?php
include(__DIR__ . '/header.php');
$_GET['apagado'] = $_GET['apagado'] ?? false;
$_GET['gravado'] = $_GET['gravado'] ?? false;

if($_GET['apagado']){
    echo"<div class='alert alert-warning' role='alert'>
    Produto Apagado com Sucesso!
  </div>";
}
if($_GET['gravado']){
    echo"<div class='alert alert-success' role='alert'>
    Produto Salvo com Sucesso!
  </div>";
}
?>

    <div class="teste">
        <form action="acoesProduto.php" method="post">
            <table border="2" class=" container table  table-striped table-hover text-center corDeFundo">
                <tr>
                    <th>Id</th> <th>Nome</th> <th>Descrição</th> <th>Preço</th> <th>Quantidade</th> <th>Ações</th> <th> </th>
                </tr>
                <?php
                foreach($registros as $registro){
                    echo"
                        <tr>
                            <td>{$registro['id']}</td> 
                            <td>{$registro['nome']}</td>
                            <td>{$registro['descricao']}</td> 
                            <td>{$registro['preco']}</td> 
                            <td>{$registro['quantidade']}</td> 
                            <td>
                            <button class=' btn btn-danger' name='apagar' value='{$registro['id']}'>apagar</button>
                            <button class='btn btn-info' name='editar' value='{$registro['id']}'>editar</button>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </form>
   
    
<?php




include(__DIR__ . '/footer.php');
?>



<?php
include(__DIR__ . '/header.php');
?>

    <form action="acoesProduto.php" method="post">
        <table border="2" class=" container table  table-striped table-hover text-center">
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



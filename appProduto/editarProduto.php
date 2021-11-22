    <?php
        require("telas/header.php");
    ?>
    <body>
        <form class="row g-3 container py-3 ps-5 " method="post" action="update.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome do Produto X</label>
                <input name="nome" value="<?php echo $nome; ?>" type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Preço</label>
                <input name="preco" value="<?php echo $preco; ?>"type="text" class="form-control" id="inputPassword4" placeholder="R$">
            </div>
            <div>
                <label for="inputAddress" class="form-label ">Descrição</label>
                <textarea name="descricao" value="<?php echo $descricao; ?>" class="form-control " aria-label="With textarea"></textarea>
            </div>

            <div class="col-md-4">
                <label for="inputState" class="form-label">Quantidade</label>
                <select name="quant"id="inputState" class="form-select">
                <option selected name="quant">1</option>
                <option name="quant">3</option>
                <option name="quant">6</option>
                <option name="quant">9</option>
                <option name="quant">12</option>
                <option name="quant">15</option>
                </select>
            </div>
            <!--
            <div class="col-md-4">
                <label for="inputState" class="form-label">Possiu cores diferentes?</label>
                <select name="#"id="inputState" class="form-select">
                <option selected>Sim</option>
                <option>Não</option>

                </select>
            </div>
        -->
            <div class="col-12 py-4">
                <button type="submit" class="btn btn-secondary fs-5">Atualizar</button>
            </div>
        </form>
    </body>
    <?php
        require("telas/footer.php");
    ?>

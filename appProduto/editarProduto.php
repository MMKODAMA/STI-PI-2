<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>cadastro de Produtos</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab&family=Yuji+Syuku&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Montagu Slab', serif;
                font-family: 'Yuji Syuku', serif;
            }
            .hover:hover{
                color: rgb(110, 112, 111)!important;
            }
           
        </style>
    </head>
    <header>
        <div class="pb-5">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#2c3e50">
          <div class="container">
              <a class="navbar-brand color-brand text-white fw-bold " href="#">Nossos quadrinhos</a>
              <h1 class="d-none">Nossos quadrinhos</h1>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#divMenu">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div id="divMenu" class="collapse navbar-collapse d-4 justify-content-end">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class=" text-white link-navbar nav-link fs-5  hover" href="cadastroProduto.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-navbar nav-link fs-5 text-white hover" href="listar.php">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-navbar nav-link fs-5 text-white hover" href="#"></a>
                    </li>
                  </ul>
              </div>
          </div>
        </nav>
        <div class="pt-2 pb-2" style="background-color: rgb(151, 151, 151);">
          <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center">
                  <a class="link-navbar fw-bold" href="#">Login</a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                  <img src="#"></a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                  <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Pesquisa</button>
                </div>
            </div>
          </div>
        </div>
        </div>
    </header>
    <body>
        
       
    
        <form class="row g-3 container py-3 ps-5 " method="post" action="update.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome do Produto</label>
                <input name="nome" value="<?php echo $nome; ?>" type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Preço</label>
                <input name="preco" value="<?php echo $preco; ?>"type="text" class="form-control" id="inputPassword4" placeholder="R$">
            </div>
            <div>
                <label for="inputAddress" class="form-label ">Descrição</label>
                <textarea name="desc" value="<?php echo $descricao; ?>" class="form-control " aria-label="With textarea"></textarea>
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
    <footer class="pt-5 pb-5  text-white" style="background-color:#2c3e50">
        <div>
            <address class="text-center">
                Av. Sei lá, 123 - 4º andar • CEP.: 00000-111 - São Paulo • Telefone: 55 11 3333 4444
            </address>
        </div>
        <hr>
        <div class="text-center">
            <span>Nossos quadrinhos - Todos os direitos reservados.</span>
        </div>
        </div>
    </footer>
</html>
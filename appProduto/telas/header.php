<?php
echo
'
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
                font-family: "Montagu Slab", serif;
                font-family: "Yuji Syuku", serif;
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
                        <a class="link-navbar nav-link fs-5  text-white hover" href="PI-telaDeLogin/index.html">Login</a>
                    </li>
                  </ul>
              </div>
          </div>
        </nav>
        <div class="pt-2 pb-2" style="background-color: rgb(151, 151, 151);">
          <div class="container">
            <div class="row">
            </div>
          </div>
        </div>
        </div>
    </header>';
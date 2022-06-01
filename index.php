<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wall Tech</title>

  <!-- Favicons -->
  <meta name="msapplication-TileColor" content="#FFC107">
  <meta name="msapplication-TileImage" content="./assets/images/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#FFC107">
  <!-- end Favicons -->

  <!-- Css -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <?php include('./components/header.php'); ?>

  <nav class="container-fluid nav-produtos">
    <!-- container -->
    <section class="container">
      <!-- menu -->
      <ul class="nav">
        <!-- lista de itens -->
        <li class="col-xl-2 col-lg-3 col-md-12 nav-item d-flex align-items-center">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
          Moda Feminina

          <!-- submenu -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="index.html">
                Home
              </a>
            </li>

            <li class="nav-item">
              <a href="lancamentos.html">
                Lançamentos
              </a>
            </li>

            <li class="nav-item">
              <a href="promocao.html">
                Promoção
              </a>
            </li>
          </ul>
          <!-- end submenu -->
        </li>
      <!-- menu -->
    </section>
    <!-- end container -->
  </nav>
  <!-- end menu do site -->

  <!-- main -->
  <main>
    <!-- banners promocionais rotativos  -->
    <section id="banners-promocionais" class="container carousel slide" data-ride="carousel">
      <!-- imagens -->
      <article class="carousel-inner">
        <figure class="carousel-item active">
          <img src="./assets/images/banner-1.jpg" class="d-block w-100" alt="Banner Promocional lançamento verão">
        </figure>

        <figure class="carousel-item">
          <img src="./assets/images/banner-2.jpg" class="d-block w-100" alt="Banner Promocional diversos itens da loja">
        </figure>
      </article>

      <!-- prev -->
      <a class="carousel-control-prev" href="#banners-promocionais" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <!-- next -->
      <a class="carousel-control-next" href="#banners-promocionais" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <!-- banners promocionais rotativos  -->

    <!-- banners promocionais com 6 colunas -->
    <section class="container banners-promocionais-statico">
      <!-- row -->
      <section class="row">
        <!-- banner -->
        <article class="col-md-6">
          <div class="banners-promocionais-statico-12x d-flex align-items-center">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
              <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
            </svg>

            <p>
              Parcele em até<br>
              <strong>12x sem juros</strong>
            </p>
          </div>
        </article>

        <!-- banner -->
        <article class="col-md-6">
          <div class="banners-promocionais-statico-todo-br d-flex align-items-center">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
            <p>
              Entrega para<br>
              <strong>todo Brasil</strong>
            </p>
          </div>
        </article>
      </section>
      <!-- end row -->
    </section>
    <!-- end banners promocionais com 6 colunas -->

    <?php include('./components/produtos.php'); ?>
  </main>
  <!-- end main -->

  <!-- Footer -->
  <footer class="container-fluid">
    <!-- container -->
    <section class="container">
      <!-- menus -->
      <section class="row">
        <!-- atendimento -->
        <article class="col-md-4">
          <h4>
            Atendimento
          </h4>
          <!-- links -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="tel:+5511999999999">(11) 98060-5906</a>
            </li>

            <li class="nav-item">
              <a href="mailto:contato@sualoja.com.br">cristinelinda2011@hotmail.com</a>
            </li>

            <li class="nav-item">
              Horário de atendimento on-line: Segunda à sexta das 9:00 até as 17:30h
            </li>
          </ul>
        </article>
        <!-- end atendimento -->

        <!-- acesso rápido -->
        <article class="col-md-3">
          <h4>
            Acesso rápido
          </h4>
          <!-- links -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#">Minha conta</a>
            </li>

            <li class="nav-item">
              <a href="#">Meus pedidos</a>
            </li>

            <li class="nav-item">
              <a href="#">Rastrear meus pedidos</a>
            </li>

            <li class="nav-item">
              <a>Troca e devoluções</a>
              
            </li>
          </ul>
        </article>
        <!-- end acesso rápido -->

        <!-- institucional -->
        <article class="col-md-3">
          <h4>
            Institucional
          </h4>
          <!-- links -->
          <ul class="nav flex-column">
            
            <li class="nav-item">
              <a >Sobre a loja</a>
            </li>

            <li class="nav-item">
              <a >Politica e privacidade</a>
            </li>

            <li class="nav-item">
              <a href="./estoque/adm/login.php">Administrador</a>
            </li>


          </ul>
        </article>
        <!-- end institucional -->

        
      </section>
      <!-- end menus -->
    </section>
    <!-- end container -->

  </footer>
  <!-- end Footer-->

  <!-- Arquivos Bootstrap -->
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/popper.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
</body>

</html>
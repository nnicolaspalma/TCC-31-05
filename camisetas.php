<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Loja Virtual - Camisetas</title>

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

  <!-- menu do site -->
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
              <a href="#">
                Lançamentos
              </a>
            </li>

            <li class="nav-item">
              <a href="#">
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


    <!-- container produtos -->
    <section class="container produtos">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Camisetas</li>
        </ol>
      </nav>

      <!-- title -->
      <h1>Veja todos os nosso produtos mais vendidos</h1>
      <p>
        Todos os meses disponibilizamos uma grande variedade de looks que são hits e queridinhos do momento através de
        lançamentos exclusivos de moda Feminina. Também oferecemos anualmente quatro coleções que mostram as peças que
        são desejo em cada estação e como combiná-las para valorizar ainda mais o estilo da mulher brasileira, super
        feminina e que preza pelo conforto. A diversidade das peças foi o jeito que a Quintess encontrou para retratar o
        perfil vibrante, alegre e independente de nossas clientes com tamanhos que vão do PP ao XLG.
      </p>
      <!-- listagem dos produtos -->
      <article class="row">

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
              <a href="tel:+5511999999999">(11) 9 9999 9999</a>
            </li>

            <li class="nav-item">
              <a href="mailto:contato@sualoja.com.br">contato@sualoja.com.br</a>
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
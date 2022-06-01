<?php
  session_start();
  include_once('./conexao.php');

  $sql = 'SELECT * FROM tb_produtos WHERE id_produto = ?';
  $stm = $banco->prepare($sql);
  $stm->bindValue(1, $_GET["id_produto"]);
  
  $stm->execute();
  $produto = $stm->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Loja Virtual - <?php echo $produto['nome_produto']; ?></title>

  <!-- Favicons -->
  <link rel="manifest" href="./assets/images/favicons/apple-icon.png">
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

        
      </ul>
      <!-- menu -->
    </section>
    <!-- end container -->
  </nav>
  <!-- end menu do site -->

  <!-- main -->
  <main>


    <!-- container produto -->
    <section class="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item"><a href="./camisetas.html">Camisetas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Camiseta manga comprida</li>
        </ol>
      </nav>

      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <div class="#">
            <img src="./estoque/uploads/<?php echo($produto['imagem_produto']) ?>" class="img-fluid" alt="<?php echo $produto['nome_produto'] ?>"/>
          </div>
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1><?php echo $produto['nome_produto'] ?></h1>
            <p><?php echo $produto['descricao_produto'] ?></p>
          </article>

          <article class="produtos-preco">
            <div class="produtos-stars">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </div>

            <strong>
              R$ <?php echo $produto['preco_produto'] ?>
              <span class="d-block">Em até 6x sem Juros</span>
            </strong>

            <form action="#">
              <div class="form-group">
                <label for="produtos-quantidade-itens">Quantidade</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <button type="submit" class="btn btn-success col-md-12">Comprar</button>
            </form>
          </article>
        </section>

        <div class="fb-comments col-md-12 mt-2 mb-5"
          data-href="http://127.0.0.1:5500/Hands-on-2/produto-camiseta-manga-comprida.html" data-numposts="5"
          data-width="100%"></div>
      </article>
    </section>
    <!-- container produto -->

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
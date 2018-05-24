<?php 
    header('Content-type: text/html; charset=ISO-8859-1');
    // INCLUI O ARQUIVO DE CONFIGURAÇÃO DE REQUISIÇÃO DA PASTA VIEW
    require_once('views/include/config.php');
    // INCLUI O ARQUIVO DE CONTROLE DE CÓDIGOS PHP DE CADA PÁGINA, EXEMPLO: ARQUIVO DE CADASTRO DE CLIENTES
    require_once('views/include/controle_codigos_php_paginas.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- INCLUI O HEAD -->
    <?php require_once ('views/include/head.php'); ?>
  </head>
  <body>
    <header>
      <!-- INCLUI O MENU -->
      <?php require_once ('views/include/menu.php'); ?>
    </header>
    <main role="main">
      <!-- MONTA O CORPO PRINCIPAL DE CADA PAGINA -->
      <?php  
          $Url[0] = (@$Url[0] === 'index' || @$Url[0] === 'index.php' ? 'index' : $Url[0]);
          $Url[1] = (empty($Url[1]) ? null : $Url[1]);
          $Url[2] = (empty($Url[2]) ? 'index' : $Url[2]);

          if(@file_exists(REQUIRE_PATH . $Url[0] . '.php')){
              require REQUIRE_PATH . $Url[0] . '.php';
          }else if (@file_exists(REQUIRE_PATH . $Url[0] . '/' . $Url[1] . '.php')) {
              require REQUIRE_PATH . $Url[0] . '/' . $Url[1] . '.php'; 
          }else if (@file_exists(REQUIRE_PATH . $Url[0] . '/' . $Url[1] . '/' . $Url[2] . '.php')) {
              require REQUIRE_PATH . $Url[0] . '/' . $Url[1] . '/' . $Url[2] . '.php'; 
          }else{
              require REQUIRE_PATH . '404.php';
          }
      ?>
      <!-- FOOTER -->
      <footer class="container pt-5">
        <hr class="featurette-divider">  
        <!-- INCLUI O FOOTER -->
        <?php require_once ('views/include/footer.php'); ?>
      </footer>
    </main>
     <!-- INCLUI OS SCRIPTS -->
      <?php require_once ('views/include/scripts.php'); ?>
  </body>
</html>

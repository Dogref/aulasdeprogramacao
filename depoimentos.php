<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Aulas de programação</title>
    <style>
      .carousel-item img {
          max-width: 60%;
          height: auto;
      }     
  </style>
  </head>
  <body>
    <nav class="navbar col-11 m-auto navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span> 
        </button>    
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servico1.html">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="empresa.html">Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contatos.html">Contatos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="depoimentos.php">Depoimentos</a>
              </li>         
        </div>
      </nav>
<br><br><br>

<div class="container mt-5">
  <h1 class="text-center">Depoimentos</h1>
  <br><br><br>

  <div id="depoimentosCarousel" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
          <li data-target="#depoimentosCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#depoimentosCarousel" data-slide-to="1"></li>
          <li data-target="#depoimentosCarousel" data-slide-to="2"></li>
          <li data-target="#depoimentosCarousel" data-slide-to="3"></li>
          <li data-target="#depoimentosCarousel" data-slide-to="4"></li>
      </ul>

      <div class="carousel-inner">
        <?php
          
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "depoimento_db";
  
          $conn = new mysqli($servername, $username, $password, $dbname);
  
          if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
          }
  
          $sql = "SELECT nome, mensagem FROM depoimentos";
          $result = $conn->query($sql);
  
          if ($result->num_rows > 0) {
            $first = true; 
  
            while ($row = $result->fetch_assoc()) {
              $nome = $row['nome'];
              $mensagem = $row['mensagem'];
  
              echo '<div class="carousel-item text-justify ' . ($first ? 'active' : '') . '">';
              echo '<p>' . $nome . ': "' . $mensagem . '"</p>';
              echo '</div>';
  
              $first = false;
            }
          } else {
            echo '<p>Nenhum depoimento disponível.</p>';
          }
  
          $conn->close();
        ?>
      </div>

      <a class="carousel-control-prev" href="#depoimentosCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#depoimentosCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
      </a>
  </div>
  <div class="mt-5">
    <h2>Adicionar Depoimento</h2>
    <form action="processa_depoimentos.php" method="post">
    <div class="form-group col-md-6">
          <label for="inputName">Nome</label>
          <input type="text" name="nome" class="form-control" placeholder="John" required>      
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Depoimentos</label>
        <textarea name="mensagem" class="form-control" rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<br><br><br><br><br><br>

</div>

<footer class="bg-dark text-light py-3 footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">  
        <h5>Desenvolvedor:</h5>
        <ul class="list-unstyled">
          <h6>Fernando Gabriel Gonçalves.</h6>
          <h6>Estudante em Sistema de Informação.</h6>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contato</h5>
        <ul class="list-unstyled">
          <li><a href="https://www.linkedin.com/in/fernando-gabriel-gon%C3%A7alves-801744197/"><i class="fab fa-facebook"></i> Linkedin</a></li>
          <li><a href="https://github.com/Dogref"><i class="fab fa-instagram"></i> Github</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Atendimento</h5>
        <ul class="list-unstyled">
          <a href="https://wa.me/5549988951092" target="_blank" class="btn btn-success">Iniciar Atendimento no WhatsApp</a>
        </ul>
      </div>
    </div>
    <hr>
    <p>&copy; 2023 Aulas de Programação</p>
  </div>
</footer>


  </html>
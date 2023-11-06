<?php 
	session_start();
	include('../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
    <link href="../css/QuemSomos.css" rel="stylesheet">


    <title>Turismo Aventura</title>
   
  </head>
<body>
  <?php 
    include_once('../topmenu2.php');
  ?>
<section>
    <div class="container">
      <div class="row" style="padding-top: 5%;">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align: center;">
          <h1 style="color:#42413d;">Conheça mais sobre nós,</h1>
          <h1 style="color:#42413d">Somos o Turismo Aventura</h1>
          <br>
          <p>
            O Instituto Técnico de Barueri (ITB) Brasílio Flores de Azevedo tem o prazer de apresentar o trabalho de conclusão de curso (TCC) desenvolvido pelos alunos do curso Tecnologia da Informação. Intitulado "Turismo Aventura", este 
            projeto inovador tem como objetivo proporcionar uma experiência única para os viajantes que buscam aventura e diversão em um único dia. Abaixo, você encontrará informações sobre os integrantes dedicados que tornaram 
            possível a realização deste incrível projeto.
          </p>
        </div>
        <div class="col-md-2"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3" style="padding-left:0; padding-right: 0;">
            <div class="card" style="border-right: solid #0086CC;" id="card1">
              <div class="imagem-container">
                <img src="../img/fotoperfilJose.jpeg" class="card-img-top" >
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;"><strong>José Henrique</strong></h4>
                    <p style="text-align: center;font-size:15px;">Responsável por:</p>
                    <p style="text-align: center;font-size:15px;">Liderança</p>
                    <p style="text-align: center;font-size:15px;">Designer de Banco de Dados</p>
                    <p style="text-align: center;font-size:15px;">Modelo Documentação</p>
                  </div>
              </div>
           </div>
        </div>
        <div class="col-md-3" style="padding-left:0; padding-right: 0;">
          <div class="card" style="border-right: solid #FFDE00;" id="card2">
            <div class="imagem-container">
              <img src="../img/fotoperfilGiovannaS.jpeg" class="card-img-top" >
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center;"><strong>Giovanna Souza</strong></h4>
                  <p style="text-align: center;font-size:15px;">Responsável por:</p>
                  <p style="text-align: center;font-size:15px;">Redes Sociais</p>
                  <p style="text-align: center;font-size:15px;">Designer de Banco de Dados</p>
                  <p style="text-align: center;font-size:15px;">Modelo Documentação</p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3"  style="padding-left:0; padding-right: 0;">
          <div class="card" style="border-right: solid #0086CC;" id="card3">
            <div class="imagem-container">
              <img src="../img/fotoperfilMatheus.jpeg" class="card-img-top" >
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center;"><strong>Matheus Eduardo</strong></h4>
                  <p style="text-align: center;font-size:15px;">Responsável por :</p>
                  <p style="text-align: center;font-size:15px;">Web Development</p>
                  <p style="text-align: center;font-size:15px;">Desenvolvimento front-end</p>
                  <p style="text-align: center;font-size:15px;">Desenvolvimento back-end</p>

                </div>
            </div>
          </div>
      </div>
      <div class="col-md-3"  style="padding-left:0; padding-right: 0;">
        <div class="card" style="border-right: solid #FFDE00;" id="card4">
          <div class="imagem-container">
            <img src="../img/FotoPerfilRyan.jpeg" class="card-img-top" >
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;"><strong>Ryan Santos</strong></h4>
                <p style="text-align: center;font-size:15px;">Responsável por :</p>
                <p style="text-align: center;font-size:15px;">Web Development</p>
                <p style="text-align: center;font-size:15px;">Desenvolvimento front-end</p>
                <p style="text-align: center;font-size:15px;">Desenvolvimento back-end</p>

              </div>
          </div>
      </div>
    </div>
  </div>
  <br>
  <hr style=" border: none;border-top: 3px solid gray;">
  <br>

    <div class="row">
      <div class="col-md-3" style="padding-left:0; padding-right: 0;">
          <div class="card" style="border-right: solid #0086CC;" id="card5">
            <div class="imagem-container">
              <img src="../img/fotoperfilRaysaM.jpeg" class="card-img-top" >
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center;"><strong>Rayssa Morais</strong></h4>
                  <p style="text-align: center;font-size:15px;">Responsável por:</p>
                  <p style="text-align: center;font-size:15px;">Designer Web</p>
                  <p style="text-align: center;font-size:15px;">Modelo Documentação</p>
                </div>
            </div>
          </div>
      </div>
      <div class="col-md-3" style="padding-left:0; padding-right: 0;">
        <div class="card" style="border-right: solid #FFDE00;" id="card6">
          <div class="imagem-container">
            <img src="../img/fotoperfilRayssaIvo.jpeg" class="card-img-top" >
              <div class="card-body">
                <h4 class="card-title" style="text-align: center;"><strong>Rayssa Giovanna</strong></h4>
                <p style="text-align: center;font-size:15px;">Responsável por:</p>
                <p style="text-align: center;font-size:15px;">Designer de Banco de Dados</p>
                <p style="text-align: center;font-size:15px;">Modelo Documentação</p>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-3"  style="padding-left:0; padding-right: 0;">
        <div class="card" style="border-right: solid #0086CC;" id="card7">
          <div class="imagem-container">
            <img src="../img/fotoperfilRafaela.jpeg" class="card-img-top" >
              <div class="card-body">
                <h4 class="card-title" style="text-align: center;"><strong>Rafaela Ambrósio</strong></h4>
                <p style="text-align: center;font-size:15px;">Responsável por :</p>
                <p style="text-align: center;font-size:15px;">App Development</p>
                <p style="text-align: center;font-size:15px;">Desenvolvimento front-end</p>
                <p style="text-align: center;font-size:15px;">Desenvolvimento back-end</p>

              </div>
          </div>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0; padding-right: 0;">
      <div class="card" style="border-right: solid #FFDE00;" id="card8">
        <div class="imagem-container">
          <img src="../img/fotoperfilGiovannaGomes.jpeg" class="card-img-top" >
          <div class="card-body">
              <h4 class="card-title" style="text-align: center;"><strong>Giovanna Gomes</strong></h4>
              <p style="text-align: center;font-size:15px;">Responsável por :</p>
              <p style="text-align: center;font-size:15px;">Designer Web</p>
              <p style="text-align: center;font-size:15px;">Tester QA</p>
            </div>
        </div>
    </div>
  </div>
</div>
      <br>
      <br>
      <br>
    </div>
</section>
<section>
  <footer>
    <?php
        include_once '../footer.php';
    ?>
  </footer>
          </section>
</body>
</html>
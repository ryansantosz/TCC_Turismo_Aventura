<?php 
	session_start();
	include('conexao.php');
?>
<!doctype html>
<html lang="pt-br">   
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <title>Turismo Aventura</title>
    <link rel="icon" href="https://turismoaventura.com.br/img/logoPqn.png">
    <link rel="stylesheet" href="../css/index.css"> 

    <style>
      *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-weight:bold;
          }
    </style>
  </head>
  <body>
   
  <?php 
    include_once('topmenu2.php');
   
  ?>
  <script type="text/javascript">
        window.ymConfig = {"bot":"x1697206629251","host":"https://r4.cloud.yellow.ai"};
      (function() {
          var w = window,
              ic = w.YellowMessenger;
          if ("function" === typeof ic) ic("reattach_activator"), ic("update", ymConfig);
          else {
              var d = document,
                  i = function() {
                      i.c(arguments)
                  };
              function l() {
                  var e = d.createElement("script");
                  e.type = "text/javascript", e.async = !0, e.src = "https://cdn.yellowmessenger.com/plugin/widget-v2/latest/dist/main.min.js";
                  var t = d.getElementsByTagName("script")[0];
                  t.parentNode.insertBefore(e, t)
              }
              i.q = [], i.c = function(e) {
                  i.q.push(e)
              }, w.YellowMessenger = i, w.attachEvent ? w.attachEvent("onload", l) : w.addEventListener("load", l, !1)}
      })();
    </script>
 

    <section>
      <div class="ImgInicial">
        <img src="/img/TurismoAventuraIncial.png" id="ImgInicial" alt="">
      </div>
    </section>
     
      <div class="container">
        <section>
          <div class="row">
            <div class="col-md-12" align="center">
              <span  class="SpanPasseios">Tipos de Passeios com a Turismo Aventura</span> 
            </div>
          </div>

        <div class="row" align="center" style="padding-top: 5%;">
          <div class="col-md-4" style="padding-left:0; padding-right: 0;">
              <div class="card">
                <div class="imagem-container">
                  <img src="../img/CardInicial1.jpg" class="card-img-top" id="santos">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;"><strong>Diversão e Adrenalina</strong></h4>
                      <hr id="HrCard1">
                      <p style="text-align: center;font-size:16px;">Se busca emoções fortes e adrenalina, os parques mais famosos do Brasil são a escolha certa. Montanhas-russas emocionantes, atrações eletrizantes e espetáculos incríveis estão prontos para proporcionar o frio na barriga que você procura.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4" style="padding-left:0; padding-right: 0;">
            <div class="card">
              <div class="imagem-container">
                <img src="../img/CardInicial2.jpg" class="card-img-top" id="santos">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;"><strong>Céu e Sol</strong></h4>
                    <hr id="HrCard1">
                    <p style="text-align: center;font-size:16px;">Se prefere tranquilidade e relaxamento, as praias mais lindas do Brasil são perfeitas para você. Areias douradas, águas cristalinas e o som das ondas criam o ambiente ideal para descansar e recarregar. Seu tipo de passeio é aproveitar a serenidade e a beleza natural.</p>
                  </div>
              </div>
            </div>
          </div>
        
          <div class="col-md-4"  style="padding-left:0; padding-right: 0;">
            <div class="card" >
              <div class="imagem-container">
                <img src="../img/CardInicial3.jpg" class="card-img-top" id="santos">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;"><strong>Aventuras</strong></h4>
                    <hr id="HrCard1">
                    <p style="text-align: center;font-size:16px;">Se deseja explorar o campo e a natureza, as trilhas mais visitadas do Brasil são ideais. Caminhe por paisagens deslumbrantes, supere desafios naturais e conecte-se com a terra. Seu tipo de passeio é se aventurar em ambientes rústicos e cativantes.</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
     </section>
    <br>
    <br>
  </div>
  <br>
  <section>
    <div class="row">
      <div class="col-md-12" align="center">
        <span  class="SpanPasseios2">Os passeios mais visitados conosco</span> 
      </div>
    </div>
  </section>
  <br>
  <section id="SectionViagem">
    <div class="container">
      <div class="row">
        <div class="col-md-5 Card-Column">
          
          <div class="cards">
            <div class="card red" id="DivChama1" style="background-color: #00abff !important;">
              <p class="tip">Para você</p>
              <p class="second-text">Que gosta de adrenalina e diversão.</p>
            </div>
            <div class="card blue" id="DivChama2" style="background-color: #00abff !important;">
              <p class="tip">Para você</p>
              <p class="second-text">Que ama o sol e o mar.</p>
            </div>
            <div class="card green" id="DivChama3" style="background-color: #00abff !important;">
              <p class="tip">Para você</p>
              <p class="second-text">Que adora aventuras e lugares marcantes.</p>
            </div>
          </div>
          <br>
<br>
        </div>
        <div class="col-md-7 Card-Passagem " id="DivEscondida1">
          <div class="card-viagem">
            <img src="img/hopihari4.png">
            <div class="card__content">
              <p class="card__title">Hopi Hari</p>
              <p class="card__description">Hopi Hari é o ideal, um famoso parque de diversões localizado em Vinhedo, São Paulo. Conhecido por suas emocionantes montanhas-russas e atrações temáticas, o parque oferece um dia de entretenimento repleto de diversão para todas as idades. Com uma variedade de atrações, shows e atividades, o Hopi Hari é um destino popular para famílias e amigos em busca de aventura e momentos memoráveis.</p>
              <button id="BtnChamaHopi" name="BtnChamaHopi" value="" class="btn btn-primary"><a href="../pages/ChamaHopiHari.php" style="text-decoration: none;color: white;">Ver mais sobre este lugar</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-7 Card-Passagem hidden-card" id="DivEscondida2">
          <div class="card-viagem">
            <img src="img/PraiaInicial.jpg">
            <div class="card__content">
              <p class="card__title">Santos</p>
              <p class="card__description">
                Santos é o ideal, uma cidade litorânea no estado de São Paulo, conhecida por suas belas praias e clima tropical. Com suas areias douradas e águas cristalinas, Santos é um paraíso para os amantes do sol e do mar. Além disso, a cidade tem uma rica história e oferece uma variedade de atrações culturais e atividades para famílias e amigos em busca de diversão à beira-mar.</p>
              <button id="BtnChamaSantos" name="BtnChamaSantos" value="" class="btn btn-primary"><a href="../pages/ChamaSantos.php" style="text-decoration: none;color: white;">Ver mais sobre este lugar</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-7 Card-Passagem hidden-card" id="DivEscondida3">
          <div class="card-viagem">
            <img src="img/TrilhaInicial.jpg">
            <div class="card__content">
              <p class="card__title">Aparecida do Norte</p>
              <p class="card__description">
                Aparecida do Norte, no estado de São Paulo, é famosa por abrigar o Santuário Nacional de Nossa Senhora Aparecida, a padroeira do Brasil. Milhões de peregrinos visitam a cidade anualmente em busca de fé e devoção. Além do Santuário, Aparecida do Norte oferece uma atmosfera espiritual única, com suas igrejas históricas e eventos religiosos significativos. É também um destino tranquilo e contemplativo à beira do rio Paraíba.</p>
              <button id="BtnChamaHopi" name="BtnChamaHopi" value="" class="btn btn-primary"><a href="../pages/ChamaAparecida.php" style="text-decoration: none;color: white;">Ver mais sobre este lugar</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section>
      <footer>
        <?php
            include_once 'footer.php';
        ?>
      </footer>
    </section>


  </body>
</html>


<script>
  $(document).ready(function () {
      var divEscondidaVisivel = false; // Variável para rastrear o estado da div escondida

      $("#DivChama1").click(function () {
          if (divEscondidaVisivel) {
              $(".hidden-card").css("right", "-100%"); // Esconde todas as divs escondidas
              divEscondidaVisivel = false; // Atualiza o estado para escondido
          } else {
              $("#DivEscondida1").css("right", "0"); // Mostra a div escondida 1
              divEscondidaVisivel = true; // Atualiza o estado para visível
          }
      });

      $("#DivChama2").click(function () {
          if (divEscondidaVisivel) {
            var meuElemento = $("#DivEscondida1");
            meuElemento.addClass("hidden-card");
              $(".hidden-card").css("right", "-100%"); // Esconde todas as divs escondidas
              divEscondidaVisivel = false; // Atualiza o estado para escondido
          } else {
              $("#DivEscondida2").css("right", "0"); // Mostra a div escondida 2
              divEscondidaVisivel = true; // Atualiza o estado para visível
          }
      });

      $("#DivChama3").click(function () {
          if (divEscondidaVisivel) {
              $(".hidden-card").css("right", "-100%"); // Esconde todas as divs escondidas
              divEscondidaVisivel = false; // Atualiza o estado para escondido
          } else {
              $("#DivEscondida3").css("right", "0"); // Mostra a div escondida 3
              divEscondidaVisivel = true; // Atualiza o estado para visível
          }
      });
  });
</script>




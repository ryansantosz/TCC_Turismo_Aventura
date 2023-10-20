<?php 
	session_start();
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">

        <title>Turismo Aventura</title>

        <style>
            *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-weight:bold
          }
          body{
            background-color: rgb(242 242 247);
          }
          #containerPrincipal {
            background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%);
          }
          #imgLogo{ 
            height: 100%;
          }
            .card {
              width: 90%;
              height: 100%;
              position: flex;
              top: 60%;
              left: 5%;
              transform: translateY(-50%);
              border: 1px solid #000000; 
            }
            .card img{
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            }
            img{
                height: 300px;
                width: auto;
                transition: all 0.7s;
              }
            .imagem-container {
              position: relative;
              }
            
            .imagem-container img {
              border: 2px solid #000000;
            }
            
            .imagem-container img:hover {
              height: 330px;
              width: auto;
            }
            @keyframes animacao-borda {
              0% {
                border-width: 2px;
              }
              50% {
                border-width: 10px;
              }
              100% {
                border-width: 2px;
              }
            }
            .row {
              --bs-gutter-x: 0;
            }
           .footerGiga{
            width: 100% !important;
           }
        </style>
  </head>

    <body>
    <?php 
      include_once('../topmenu2.php');
    ?>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                  <div class="imagem-container">
                    <img src="../img/hopihari.png" class="card-img-top" id="hopihari">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Hopi Hari</strong></h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>8 horas</p>
                        <p><i class="fa fa-commenting-o" aria-hidden="true"></i>Portugês e Inglês</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Cancelamento grátis</p>
                        <a href="ChamaHopiHari.html" >
                          <button type="button" class="btn btn-primary" style="background-color: #084d6e;">Comprar Agora</button>
                        </a>
                    </div>
                </div>
            </div>
          </div>
            <div class="col-md-4">
                <div class="card">
                  <div class="imagem-container">
                    <img src="../img/santos.png" class="card-img-top" id="santos">
                    <div class="card-body">
                        <h5 class="card-title" ><strong>Santos</strong></h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>10 horas</p>
                        <p><i class="fa fa-commenting-o" aria-hidden="true"></i>Português e Inglês</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Cancelamento grátis</p>
                         <a href="ChamaSantos.html" >
                          <button type="button" class="btn btn-primary" style="background-color: #084d6e;">Comprar agora</button>
                        </a>
                    </div>
                </div>
            </div>
          </div>
            <div class="col-md-4">
                <div class="card">
                  <div class="imagem-container">
                    <img src="../img/aparecidaNorte.png" class="card-img-top" id="aprcdNorte">
                    <div class="card-body">
                        <h5 class="card-title" ><strong>Aparecida do Norte</strong></h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>10 horas </p>
                        <p><i class="fa fa-commenting-o" aria-hidden="true"></i>Português e Inglês</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Cancelamento grátis</p>
                        <a href="ChamaAparecida.html" >
                          <button type="button" class="btn btn-primary" style="background-color: #084d6e;">Comprar agora</button>
                        </a>
                      </div>
                  </div>
               </div>
            </div>
            <!---<div class="col-md-3">
              <div class="card">
                <div class="imagem-container">
                  <img src="../img/parqueaquatico.png" class="card-img-top" id="ParqueAquatico">
                  <div class="card-body">
                      <h5 class="card-title" ><strong>Wet'n Wild</strong></h5>
                      <p><i class="fa fa-clock-o" aria-hidden="true"></i>8 horas</p>
                      <p><i class="fa fa-commenting-o" aria-hidden="true"></i>Portugês e Inglês</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Cancelamento grátis</p>
                      <a href="ChamaParqueAquatico.html" >
                          <button type="button" class="btn btn-primary" style="background-color: #084d6e;">Comprar agora</button>
                        </a>
                  </div>
              </div>
          </div>
        </div>--->
          </div>
          <br>
          <br>
          <br>
          <br>
          <section>
            <footer>
              <?php
                  include_once '../footer.php';
              ?>
            </footer>
          </section>
      </body>
  </html>
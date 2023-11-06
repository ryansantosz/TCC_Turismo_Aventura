<?php 
	session_start();
	include('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/css/ChamaHopiHari.css">
  <title>Turismo Aventura</title>
</head>

<body>
    <?php 
      include_once('../topmenu2.php');

      
      
    ?>
    <form id="frmViagem" name="frmViagem" method="POST">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1 style="font-size: 3rem">Hopi Hari</h1>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/hopihari2.png" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="../img/hopihari3.png" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="../img/hopihari.png" alt="..." />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-5">
            <div class="borda-campos">
              <div style="display: flex; justify-content: space-between">
                <h4>R$ 200,00</h4>
                <h4>12x sem Juros</h4>
              </div>
              <div class="row">
                <div class="col-md-6" style="display: end; justify-content: space-between">
                  <div class="input-with-icon">
                    <span style="font-size: 15px; color: #706c6c"><b id="EscolhaAgenda">Escolha aqui </b>a melhor data
                      para
                      você</span>
                    <i class="fa fa-calendar" aria-hidden="true"
                      id="iconagenda"></i>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-with-icon" style="padding-left: 29%">
                    <span style="font-size: 15px; color: #706c6c"><b id="EscolhaIngresso"
                        onclick="meuCliqueIngresso();">Escolha aqui</b>
                      o seu ingresso</span>
                    <i class="fa fa-ticket" aria-hidden="true" id="iconticket"
                      onclick="meuCliqueIngresso();"></i>
                  </div>
                </div>
              </div>
              <div class="row" align="center" style="padding-top:2%">
                <div class="col-md-12">
                  <span style="font-size: 15px;;color:#706c6c"><b>Reserve agora, pague depois</b> para garantir <br> seu lugar sem pagar nada hoje</span>
                </div>
              </div>
            </div>

            <div class="row" align="center">
              <div class="col-md-10">
                <div id="checkbox-container" class="checkbox-container"></div>
              </div>
            </div>
            <br>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <h4>Sinopse</h4>
            <span>É um parque temático brasileiro localizado no quilômetro 72 da
              Rodovia dos Bandeirantes, no município de Vinhedo, interior do
              estado de São Paulo. O parque está a 30 km de Campinas e 72 km de
              São Paulo. Com 760 mil metros quadrados, é considerado um dos
              maiores parques de diversão da América Latina.
            </span>
          </div>
          <div class="col-md-3" style="padding-left: 8%">
            <div>
              <input type="checkbox" class="checkbox-bolinha" id="disponivel" />
              <span for="disponivel">Disponível</span>
            </div>
            <div>
              <input type="checkbox" class="checkbox-bolinha" id="selecionado" />
              <span for="selecionado">Selecionado</span>
            </div>
            <div>
              <label class="custom-checkbox">
                <input type="checkbox" class="custom-checkbox-input" id="ocupado" />
                <span class="custom-checkbox-icon"></span>
                <span>Ocupado</span>
              </label>
            </div>
          </div>
          <div class="col-md-2" style="padding-right: 1%">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24"
              style="fill: #21366b; transform: ; msfilter: ">
              <circle cx="9" cy="4" r="2"></circle>
              <path
                d="M16.98 14.804A1 1 0 0 0 16 14h-4.133l-.429-3H16V9h-4.847l-.163-1.142A1 1 0 0 0 10 7H9a1.003 1.003 0 0 0-.99 1.142l.877 6.142A2.009 2.009 0 0 0 10.867 16h4.313l.839 4.196c.094.467.504.804.981.804h3v-2h-2.181l-.839-4.196z">
              </path>
              <path
                d="M12.51 17.5c-.739 1.476-2.25 2.5-4.01 2.5A4.505 4.505 0 0 1 4 15.5a4.503 4.503 0 0 1 2.817-4.167l-.289-2.025C3.905 10.145 2 12.604 2 15.5 2 19.084 4.916 22 8.5 22a6.497 6.497 0 0 0 5.545-3.126l-.274-1.374H12.51z">
              </path>
            </svg>
            <span>Cadeirante</span><br />
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
              style="fill: #21366b; transform: ; msfilter: ">
              <circle cx="12" cy="6" r="2"></circle>
              <path d="M14 9h-4a1 1 0 0 0-.8.4l-3 4 1.6 1.2L9 13v7h2v-4h2v4h2v-7l1.2 1.6 1.6-1.2-3-4A1 1 0 0 0 14 9z">
              </path>
            </svg>
            <span>Acompanhante</span> <br /><br /><br />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-1"></div>

          <div class="col-md-5 EspacamentoBotao">
            <button type="button" class="btn btn-primary CarrinhoSpan" id="AddCarinho"
              style="width: 100%; text-transform: uppercase" onclick="AdicionaCarrinho()">
              <svg xmlns="http://www.w3.org/2000/svg" id="CarrinhoCompra" width="32" height="32" fill="currentColor"
                class="bi bi-cart-plus" viewBox="0 0 16 16">
                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                <path
                  d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
              </svg>
              <span>Adicionar ao Carrinho</span>
            </button>
          </div>
        </div>
        <br />

        <hr />
        <h4>Sobre esta atividade</h4>
        <hr />
        <div class="row">
          <div class="col-md-12">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock-history"
              viewBox="0 0 16 16">
              <path
                d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
              <path
                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
            </svg>
            <span style="padding-left: 1%; font-size: 20px">Duração de 08:00 horas</span><br /><br />
            <span style="padding-left: 4%; color: #706c6c">Consulte nossas datas e veja o melhor pra
              você.</span><br /><br />
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
              style="fill: #1d1b1b; transform: ; msfilter: ">
              <circle cx="9" cy="4" r="2"></circle>
              <path
                d="M16.98 14.804A1 1 0 0 0 16 14h-4.133l-.429-3H16V9h-4.847l-.163-1.142A1 1 0 0 0 10 7H9a1.003 1.003 0 0 0-.99 1.142l.877 6.142A2.009 2.009 0 0 0 10.867 16h4.313l.839 4.196c.094.467.504.804.981.804h3v-2h-2.181l-.839-4.196z">
              </path>
              <path
                d="M12.51 17.5c-.739 1.476-2.25 2.5-4.01 2.5A4.505 4.505 0 0 1 4 15.5a4.503 4.503 0 0 1 2.817-4.167l-.289-2.025C3.905 10.145 2 12.604 2 15.5 2 19.084 4.916 22 8.5 22a6.497 6.497 0 0 0 5.545-3.126l-.274-1.374H12.51z">
              </path>
            </svg>
            <span style="padding-left: 1%; font-size: 20px">Acessibilidade</span>
            <hr />
            <h4>Ponto de Encontro</h4>
            <br />
            <span style="font-size: 18px; color: #706c6c">º Terminal Rodoviário</span><br />
            <span style="font-size: 18px; color: #706c6c">º 2h30 de viagem </span><br />
            <span style="font-size: 18px; color: #706c6c">º Saída: 07:00 AM</span><br />
            <span style="font-size: 18px; color: #706c6c">º Retorno: 17:30 PM</span>
            <hr />
            <h4>Informações importantes !</h4>
            <br />
            <span style="font-size: 18px; color: #706c6c">º Esteja com seus documentos e a passagem em suas mãos.</span>
            <br />
            <span style="font-size: 18px; color: #706c6c">º Oferecemos apenas o transporte.</span>
            <hr />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-clock-o" aria-hidden="true" id="iconclock"></i><span style="padding-left: 5px">30 dias para
              pedir reembolso</span><br />
          </div>
          <div class="col-md-6">
            <i class="fa fa-lock" aria-hidden="true" id="iconblock" style="padding-left: 39%"></i><span
              style="padding-left: 4px">Pagamentos Criptografados e Seguros</span>
          </div>
        </div>
        <br />
        <span>Ao finalizar a compra, você concorda com nossos
          <b>Termos de Serviço</b>. Processaremos seus dados pessoais para a
          conclusão de seu pedido e para outros fins de acordo com nossa
          <b>Política de Privacidade</b>. Você pode cancelar pagamentos
          recorrentes a qualquer momento.</span>
        <br>
        <br>
        <br>
        </div>
      </form>
    </body>
  </html>

  <script>
  var selectedDate = null; // Variável para armazenar a data selecionada
    var GuardaDate;

    function meuCliqueAgenda(myModal) {

      var myModal = `<div class="modal-body" style="overflow-x:hidden"">
                        <div class="row">
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas" class="btn btn-primary buttonData" value="03/11/2023">
                          </div>
                            <div class="col-md-2">
                              <i class="fa fa-arrows-h" aria-hidden="true"></i>
                            </div>
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas2" class="btn btn-primary buttonData" value="04/11/2023">
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas3" class="btn btn-primary buttonData" value="10/11/2023">
                          </div>
                          <div class="col-md-2">
                            <i class="fa fa-arrows-h" aria-hidden="true"></i>
                          </div>
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas4" class="btn btn-primary buttonData" value="11/11/2023">
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas5" class="btn btn-primary buttonData" value="17/11/2023">
                          </div>
                          <div class="col-md-2">
                            <i class="fa fa-arrows-h" aria-hidden="true"></i>
                          </div>
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas6" class="btn btn-primary buttonData" value="18/11/2023">
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas7" class="btn btn-primary buttonData" value="24/11/2023">
                          </div>
                          <div class="col-md-2">
                            <i class="fa fa-arrows-h" aria-hidden="true"></i>
                          </div>
                          <div class="col-md-5">
                            <input type="button" onclick="mostrarValor(this)" id="btnDatas8" class="btn btn-primary buttonData" value="25/11/2023">
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-12">
                            <h4><strong>Sua Data de Viagem</strong></h4>
                            <p id="dataAtual"></p>
                          </div>
                        </div>
                        <hr>
                      </div>`;
    let buttonClicked = false;

    document.body.addEventListener('click', (event) => {
      if (event.target.tagName === 'BUTTON') {
          buttonClicked = true;
          selectedDate = event.target.value; // Armazenar o valor do botão de data clicado
      }
    });

    document.body.addEventListener('click', (event) => {
      if (event.target.tagName === 'INPUT') {
          buttonClicked = true;
          selectedDate = event.target.value; // Armazenar o valor do botão de data clicado
      }
    });

    Swal.fire({
        title: "<strong>Data de Excursão</strong>",
        html: myModal,
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: "Salvar",
        cancelButtonText: "Fechar",
        focusConfirm: false,
        preConfirm: () => {
          if (!buttonClicked){
              Swal.showValidationMessage('Para prosseguir, clique em alguma data');
          }
        }
    }).then((result) => {
      if (result.isConfirmed && buttonClicked) {
              console.log(selectedDate);
              GuardaDate = selectedDate;
              Swal.fire({
                  icon: "success",
                  title: "Data salva com sucesso!",
                  showConfirmButton: false,
                  timer: 2000
              });
          }
      });
  }

    // Função para mostrar o valor do botão clicado
    function mostrarValor(button) {

      const allInputs = document.querySelectorAll('.buttonData');
      allInputs.forEach(input => {
          input.style.backgroundColor = '';
      });

      button.style.backgroundColor = '#feca30';
      button.style.border = '1px solid white';

      var valor = button.value;
      var dataAtualElement = document.getElementById("dataAtual");
      dataAtualElement.textContent = "Data selecionada: " + valor;
    }


    function chamarFuncaoPorIdAgenda(iconagenda, EscolhaAgenda) {
      var elemento = document.getElementById("iconagenda");
      var elemento2 = document.getElementById("EscolhaAgenda");
      if (elemento) {
        elemento.addEventListener("click", meuCliqueAgenda);
      }
      if (elemento2) {
        elemento2.addEventListener("click", meuCliqueAgenda);
      }
    }

    chamarFuncaoPorIdAgenda("iconagenda");
    chamarFuncaoPorIdAgenda("EscolhaAgenda");

  var GuardaTodosValor = 0;
  var GuardaValorKid = 0;
  var GuardaValorAdulto = 0;
  var GuardaValorIdoso = 0;

  function adicionarValorKid() {
      var input = document.getElementById("numIngressoKid");
      var valorAtual = parseInt(input.value);
      var retornaKid = document.getElementById("RetornaKid");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      valorAtual += 1;
      var valorTotal = valorAtual * valorInicial;

      retornaKid.textContent = `Ingresso Kid: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      GuardaValorKid = valorTotal;

      if (valorAtual > 0) {
          retornaKid.style.display = "block";
      }

      input.value = valorAtual;
      
  }

  function adicionarValorAdult() {
      var input = document.getElementById("numIngressoAdult");
      var valorAtual = parseInt(input.value);
      var retornaAdulto = document.getElementById("RetornaAdulto");
      var valorInicial = 60;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      valorAtual += 1;
      var valorTotal = valorAtual * valorInicial;

      retornaAdulto.textContent = `Ingresso Adulto: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      GuardaValorAdulto = valorTotal;

      if (valorAtual > 0) {
          retornaAdulto.style.display = "block";
      }

      input.value = valorAtual;
      
  }

  function adicionarValorSr() {
      var input = document.getElementById("numIngressoSr");
      var valorAtual = parseInt(input.value);
      var RetornaIdoso = document.getElementById("RetornaIdoso");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      valorAtual += 1;
      var valorTotal = valorAtual * valorInicial;

      RetornaIdoso.textContent = `Ingresso Idoso: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      GuardaValorIdoso = valorTotal;

      if (valorAtual > 0) {
          RetornaIdoso.style.display = "block";
      }

      input.value = valorAtual;
      
  }

  function subtrairValorKid() {
      var input = document.getElementById("numIngressoKid");
      var valorAtual = parseInt(input.value);
      var retornaKid = document.getElementById("RetornaKid");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          var valorTotal = valorAtual * valorInicial;

          retornaKid.textContent = `Ingresso Kid: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      }

      if (valorAtual === 0) {
          retornaKid.style.display = "none";
      }

      input.value = valorAtual;
  }

  function subtrairValorAdult() {
      var input = document.getElementById("numIngressoAdult");
      var valorAtual = parseInt(input.value);
      var retornaAdulto = document.getElementById("RetornaAdulto");
      var valorInicial = 60;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          var valorTotal = valorAtual * valorInicial;

          retornaAdulto.textContent = `Ingresso Adulto: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      }

      if (valorAtual === 0) {
          retornaAdulto.style.display = "none";
      }

      input.value = valorAtual;
  }

  function subtrairValorSr() {
      var input = document.getElementById("numIngressoSr");
      var valorAtual = parseInt(input.value);
      var RetornaIdoso = document.getElementById("RetornaIdoso");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          var valorTotal = valorAtual * valorInicial;

          RetornaIdoso.textContent = `Ingresso Idoso: ${valorAtual} - Valor Total: R$ ${valorTotal.toFixed(2)}`;
      }

      if (valorAtual === 0) {
          RetornaIdoso.style.display = "none";
      }

      input.value = valorAtual;
  }


  function SubtrairValorKid() {
      var input = document.getElementById("numIngressoKid");
      var valorAtual = parseInt(input.value);
      var retornaKid = document.getElementById("RetornaKid");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          retornaKid.textContent = `Ingresso Kid: ${valorAtual} - Valor Total: R$ ${(valorAtual * valorInicial).toFixed(2)}`;
      }

      if (valorAtual === 0) {
          retornaKid.style.display = "none";
      }

      input.value = valorAtual;
  }

  function SubtrairValorAdult() {
      var input = document.getElementById("numIngressoAdult");
      var valorAtual = parseInt(input.value);
      var retornaAdulto = document.getElementById("RetornaAdulto");
      var valorInicial = 60;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          retornaAdulto.textContent = `Ingresso Adulto: ${valorAtual} - Valor Total: R$ ${(valorAtual * valorInicial).toFixed(2)}`;
      }

      if (valorAtual === 0) {
          retornaAdulto.style.display = "none";
      }

      input.value = valorAtual;
  }

  function SubtrairValorSr() {
      var input = document.getElementById("numIngressoSr");
      var valorAtual = parseInt(input.value);
      var RetornaIdoso = document.getElementById("RetornaIdoso");
      var valorInicial = 30;

      if (isNaN(valorAtual)) {
          valorAtual = 0;
      }

      if (valorAtual > 0) {
          valorAtual -= 1;
          RetornaIdoso.textContent = `Ingresso Idoso: ${valorAtual} - Valor Total: R$ ${(valorAtual * valorInicial).toFixed(2)}`;
      }

      if (valorAtual === 0) {
          RetornaIdoso.style.display = "none";
      }

      input.value = valorAtual;
  }

    var buttonModalAges = false;
    var quantidadeKid = 0;
    var quantidadeAdult = 0;
    var quantidadeSr = 0;
    var qndtTotalIngresso;
    // Função a ser executada quando o ícone for clicado
    function meuCliqueIngresso(myModal, EscolhaIngresso, iconticket) {
              var myModal = `<div class="modal-body" style="overflow-x:hidden">
              <div class="row">
                  <div class="col-md-6">
                      <span style="padding:0;">Menor de Idade</span><br>
                      <span>(Idade 6-18)</span>
                      <br>
                      <span id="RetornaValorKID">Valor: </span>
                      <span id="ValorIngressoKID">R$ 30,00</span>
                  </div>
                  <div class="col-md-6" style="padding-left: 12%; padding-top: 5%; display:flex; justify-content: space-between;">
                      <i class="fa fa-minus" aria-hidden="true" id="ExcluiIngressoKid" onclick="SubtrairValorKid()"></i>
                      <div style="width:39%; padding-left: 3%;">
                          <input class="form-control" type="number" name="numIngressoKid" id="numIngressoKid" value="0" style="font-size: 16px; text-align: end;">
                      </div>
                      <i class="fa fa-plus" aria-hidden="true" id="addIngressoKid" onclick="adicionarValorKid();"></i>
                  </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-md-6">
                      <span style="padding:0;">Adulto</span><br>
                      <span>(Idade 18-55)</span>
                      <br>
                      <span id="RetornaValorADULTO">Valor: </span>
                      <span id="ValorIngressoADULTO">R$ 60,00</span>
                  </div>
                  <div class="col-md-6" style="padding-left: 12%; padding-top: 5%; display:flex; justify-content: space-between;">
                      <i class="fa fa-minus" aria-hidden="true" id="ExcluiIngressoAdult" onclick="SubtrairValorAdult()"></i>
                      <div style="width:39%; padding-left: 3%;">
                          <input class="form-control" type="number" name="numIngressoAdult" id="numIngressoAdult" value="0" style="font-size: 16px; text-align: end;">
                      </div>
                      <i class="fa fa-plus" aria-hidden="true" id="addIngressoAdult" onclick="adicionarValorAdult()"></i>
                  </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-md-6">
                      <span style="padding:0;">Idoso</span><br>
                      <span>(Idade 55-90)</span>
                      <br>
                      <span id="RetornaValorIDOSO">Valor: </span>
                      <span id="ValorIngressoIDOSO">R$ 30,00</span>
                  </div>
                  <div class="col-md-6" style="padding-left: 12%; padding-top: 4%; display:flex; justify-content: space-between;">
                      <i class="fa fa-minus" aria-hidden="true" id="ExcluiIngressoSr" onclick="SubtrairValorSr()"></i>
                      <div style="width:39%; padding-left: 3%;">
                          <input class="form-control" type="number" name="numIngressoSr" id="numIngressoSr" value="0" style="font-size: 16px; text-align: end;">
                      </div>
                      <i class="fa fa-plus" aria-hidden="true" id="addIngressoSr" onclick="adicionarValorSr()"></i>
                  </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-md-12">
                      <h3>Seus ingressos:</h3>
                      <br>
                      <p id="RetornaKid"></p>
                      <p id="RetornaAdulto"></p>
                      <p id="RetornaIdoso"></p>
                  </div>
              </div>
              <hr>
          </div>`;
        Swal.fire({
          title: "<strong>Tipo de Ingresso</strong>",
          html: myModal,
          showCloseButton: true,
          showCancelButton: true,
          confirmButtonText: "Salvar",
          cancelButtonText: "Fechar",
          focusConfirm: false,
          preConfirm: () => {
            const kid = Swal.getPopup().querySelector("#numIngressoKid").value;
            const adult = Swal.getPopup().querySelector("#numIngressoAdult").value;
            const Sr = Swal.getPopup().querySelector("#numIngressoSr").value;

            if (kid === "0" && adult === "0" && Sr === "0") {
              Swal.showValidationMessage(
                `Para prosseguir, escolha algum tipo de ingresso`
              );
            } else {
              buttonModalAges = true;

              quantidadeKid = parseInt(kid);
              quantidadeAdult = parseInt(adult);
              quantidadeSr = parseInt(Sr);

              console.log(kid);
              console.log(adult);
              console.log(Sr);
              qndtTotalIngresso = quantidadeKid + quantidadeAdult + quantidadeSr;

              console.log(qndtTotalIngresso);
              
              Swal.fire({
                icon: "success",
                title: "Ingressos salvos com sucesso!",
                showConfirmButton: false,
                timer: 2000 
              }).then(() => {
                
              });
            }
          },
      });
    }


  var selectedSeats = []; // Array para armazenar os números dos assentos selecionados
  var CheckboxChecked;
  var selectedCheckboxes = []; // Array para armazenar os checkboxes selecionados

  document.addEventListener("DOMContentLoaded", function () {
    var checkboxContainer = document.getElementById("checkbox-container");
    var nmrAssentoParagraph = document.getElementById("nmrAssento"); // O <p> onde os assentos selecionados serão exibidos

    for (var i = 1; i <= 40; i++) {
      var checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.id = "checkbox" + i;
      checkbox.name = "checkbox" + i;
      checkbox.className = "checkbox";
      checkbox.style.margin = "2px";
      checkbox.value = i; // Apenas o número do assento

      var label = document.createElement("label");
      label.htmlFor = "checkbox" + i;
      label.className = "checkbox-label";
      label.style.color = "white";
      label.style.textAlign = "center";
      label.value = checkbox.value;

      checkbox.addEventListener("click", function (event) {
        var clickedCheckbox = event.target;
        var checkboxValue = clickedCheckbox.value;

        if (clickedCheckbox.checked) {
          selectedSeats.push(checkboxValue);
          selectedCheckboxes.push(clickedCheckbox);
        } else {
          var index = selectedSeats.indexOf(checkboxValue);
          if (index !== -1) {
            selectedSeats.splice(index, 1);
            selectedCheckboxes.splice(index, 1);
          }
        }

        nmrAssentoParagraph.textContent = selectedSeats.join(" , ");
        console.log(selectedSeats.join(" , "))
      });
      
      var row = Math.ceil(i / 10);
      var cell = ((i - 1) % 10) + 1;

      if (i <= 9) {
        label.innerText = "0" + i;
      } else {
        label.innerText = i;
      }

      var tableRow = checkboxContainer.querySelector(
        "tr:nth-child(" + row + ")"
      );
      if (!tableRow) {
        tableRow = document.createElement("tr");
        checkboxContainer.appendChild(tableRow);
      }

      var tableCell = document.createElement("td");
      tableRow.appendChild(tableCell);

      tableCell.appendChild(checkbox);
      tableCell.appendChild(label);
    }
  })

    CheckboxChecked = selectedCheckboxes;
    let buttonModal = false;

    document.body.addEventListener('click', (event) => {
      if (event.target.tagName === 'BUTTON' || event.target.tagName === 'INPUT') {
        buttonModal = true;
      }
    });

    

    function AdicionaCarrinho(){
      GuardaTodosValor = GuardaValorKid + GuardaValorAdulto + GuardaValorIdoso;
      console.log(GuardaValorIdoso);
      console.log(GuardaValorKid);
      console.log(GuardaValorAdulto);
      console.log(GuardaTodosValor);   

      <?php
      // Obtenha o ID do usuário da sessão PHP
      $id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;
      ?>

      // Atribua o valor do PHP a uma variável JavaScript.
      var session = "<?php echo $id_user; ?>";

      if (session === '') {
        Swal.fire({
          icon: 'error',
          title: 'Para prosseguir, deve fazer um login na Turismo Aventura',
          showConfirmButton: true,
          allowOutsideClick: false,
          willClose: () => {
              // Redirecione para a página de login apenas se o botão "OK" foi clicado.
              if (!Swal.isLoading()) {
                  window.location.href = '../login.php';
              }
          }
        });
        return; // Pare a execução da função se o usuário não estiver logado
      }

      if (buttonModal === false) {
          Swal.fire({
              icon: "error",
              title: "Para prosseguir, escolha uma data",
              showConfirmButton: false,
              timer: 2000
          });
      } else if (buttonModal === true && selectedSeats.length === 0) {
          Swal.fire({
            icon: "error",
            title: "Para prosseguir, escolha um assento",
            showConfirmButton: false,
            timer: 2000
        });
    } else if (buttonModal === true && selectedSeats.length !== 0 && buttonModalAges === false) {
        Swal.fire({
            icon: "error",
            title: "Para prosseguir, escolha a quantidade e o tipo de ingresso",
            showConfirmButton: false,
            timer: 2000
        });
    } else {
        const checkboxValues = Array.from(CheckboxChecked)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

        AjaxInsereCarrinho(GuardaTodosValor,GuardaValorKid,GuardaValorAdulto,GuardaValorIdoso,qndtTotalIngresso, checkboxValues, GuardaDate, quantidadeKid, quantidadeAdult, quantidadeSr);
    }
}

function AjaxInsereCarrinho(GuardaTodosValor,GuardaValorKid,GuardaValorAdulto,GuardaValorIdoso,qndtTotalIngresso, checkboxValues, GuardaDate, quantidadeKid, quantidadeAdult, quantidadeSr) {
  var formdata = new FormData($("form[name='frmViagem']")[0]);

  checkboxValues.forEach(value => {
      formdata.append('CheckboxChecked[]', value);
  });
  formdata.append('GuardaDate', GuardaDate);
  formdata.append('quantidadeKid', quantidadeKid);
  formdata.append('quantidadeAdult', quantidadeAdult);
  formdata.append('quantidadeSr', quantidadeSr);
  formdata.append('qndtTotalIngresso', qndtTotalIngresso);
  formdata.append('GuardaValorKid', GuardaValorKid);
  formdata.append('GuardaValorAdulto', GuardaValorAdulto);
  formdata.append('GuardaValorIdoso', GuardaValorIdoso);
  formdata.append('GuardaTodosValor', GuardaTodosValor);

  $.ajax({
    type: 'POST',
    url: "../Ajax/AjaxInsereCarrinhoHopi.php",
    data: formdata,
    processData: false,
    contentType: false,
    success: function (response) {
        if (response === 'Já existe um registro para esta data e nome de viagem!'){
          Swal.fire('Ops...', 'Já existe um registro para esta data!', 'warning');
        } else {
          Swal.fire(
              'Bom Trabalho!',
              'Dados adicionados no carrinho com sucesso',
              'success'
          ).then((result) => {
              if (result.value) {
                  document.location.href = '../index.php';
              }
          });
        }
      console.log(response);
    },
    error: function (xhr, status, error) {
      Swal.fire('Ops...', 'Ocorreu um erro ao processar dados', 'warning');
      console.log(xhr.responseText);
    }
  });
}
</script>






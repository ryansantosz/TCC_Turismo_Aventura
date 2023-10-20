
<?php 
  
  
	date_default_timezone_set('America/Sao_Paulo');
  $hour = date("H");
  if ($hour >= 6 && $hour < 12) {
      // 6h às 11h
      $saudacao = "Bom Dia! Seja Bem Vindo A Turismo Aventura.";
  } else if ($hour >= 12 && $hour < 18) {
      // 12h às 17h
      $saudacao = "Boa Tarde! Seja Bem Vindo A Turismo Aventura.";
  } else {
      // 18h às 23h e 00h às 5h
      $saudacao = "Boa Noite! Seja Bem Vindo A Turismo Aventura.";
  }


	$id_user = $_SESSION['id_user'];
	$first_name = $_SESSION['first_name'];
	$tipo_perfil = $_SESSION['tipo_perfil'];

	$queryUser = "select * from usuarios where id_user = '$id_user'";
	$result_queryUser = mysqli_query($conexao, $queryUser);

  $queryCarrinho = "SELECT COUNT(*) as count FROM tb_carrinho WHERE id_usuario = '$id_user'";
  $resultCarrinho = mysqli_query($conexao, $queryCarrinho);

  if ($resultCarrinho) {
      // Obtém a contagem de registros
      $rowCarrinho = mysqli_fetch_assoc($resultCarrinho);
      $quantidadeRegistros = $rowCarrinho['count'];
  }
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />


<style>
  .dropdown-submenu {
    position: relative;
  }
  .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
  }
  .dropdown-submenu:hover>.dropdown-menu {
    display: block;
  }
  .dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    padding-right: 18px;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #fff;
    margin-top: 5px;
    margin-right: -10px;
  }
  .dropdown-submenu:hover>a:after {
    border-left-color: #fff;
  }
  .dropdown-submenu.pull-left {
    float: none;
  }
  .dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
  }
  
  .nav-link{
    color: white !important;
  }
  #navPrincipal {
    background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%);
    position: relative;
    width: 100%;
  }
  #containerPrincipal {
    background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%);
  }
  #imgLogo {
      width: 100%;
      height: 100%;
  }
 
  #CarrinhoCompra{
    color: white;
    cursor:pointer;
  }
  .Espacamento{
    gap: 18px;
  }
  .checkbox-wrapper:hover .check {
      stroke-dashoffset: 0;
    }
    .checkbox-wrapper {
      position: relative;
      display: inline-block;
      width: 30px;
      height: 30px;
    }
    .checkbox-wrapper .background {
      fill: #feca30;
      transition: ease all 0.6s;
      -webkit-transition: ease all 0.6s;
    }
    .checkbox-wrapper .stroke {
      fill: none;
      stroke: green;
      stroke-miterlimit: 10;
      stroke-width: 2px;
      stroke-dashoffset: 100;
      stroke-dasharray: 100;
      transition: ease all 0.6s;
      -webkit-transition: ease all 0.6s;
    }
    .checkbox-wrapper .check {
      fill: none;
      stroke: #fff;
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-width: 2px;
      stroke-dashoffset: 22;
      stroke-dasharray: 22;
      transition: ease all 0.6s;
      -webkit-transition: ease all 0.6s;
    }
    .checkbox-wrapper input[type=checkbox] {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      margin: 0;
      opacity: 0;
      -appearance: none;
      -webkit-appearance: none;
    }
    .checkbox-wrapper input[type=checkbox]:hover {
      cursor: pointer;
    }
    .checkbox-wrapper input[type=checkbox]:checked + svg .background {
      fill: green;
    }
    .checkbox-wrapper input[type=checkbox]:checked + svg .stroke {
      stroke-dashoffset: 0;
    }
    .checkbox-wrapper input[type=checkbox]:checked + svg .check {
      stroke-dashoffset: 0;
    }

    .Passagem {
    padding: 20px;
    padding-top: 15px;
    padding-left: 20px;
    width: 100%;
    height: 100%;
    background-color: #1b71ea;
    color: #FFFFFF;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.32);
  }
  .header-Passagem label {
    padding: 10px;
    padding-bottom: 0px;
    background-color: #f6f6f6;
    font-weight: 600px;
    margin-bottom: 0px;
    padding-bottom: 0px;
  }
    #modalPrimeiroAcesso {
        width: 100%;
        height: 100%;
    }
    #CheckedCarrinho{
        cursor: pointer;
        color: white;
    }
    .IconDelete{
        cursor: pointer;
        color: red
    }
   
</style>

<title>Turismo Aventura</title>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navPrincipal">
    <div class="container-fluid"  id="containerPrincipal">
      <a class="navbar-nav" href="https://turismoaventura.com.br/index.php"><img src="https://turismoaventura.com.br/img/LogoTurismo.png" id="imgLogo"   alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://turismoaventura.com.br/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://turismoaventura.com.br/pages/QuemSomos.php">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://turismoaventura.com.br/index.php#SectionViagem">Pacotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://turismoaventura.com.br/pages/Contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <?php
              if ($_SESSION['loggedin'] && $_SESSION['tipo_perfil'] === 'Administrador') {
                echo '<li class="nav-item dropdown" role="button" aria-expanded="false">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Segurança</a>
                      <ul class="dropdown-menu" style="background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%);">
                        <li class="dropdown-submenu">
                          <a class="nav-link dropdown">Editar</a>
                          <ul class="dropdown-menu" style="background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%); padding: 6px; border: solid 1px #ddd">
                            <li class="nav-item"><a class="nav-link" href="https://turismoaventura.com.br/administrador/EditaUser.PHP">Usuário</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://turismoaventura.com.br/seguranca/EditaSenha.php">Senha</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://turismoaventura.com.br/administrador/EditaViagem.php">Viagem</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a class="nav-link dropdown">Inserir</a>
                          <ul class="dropdown-menu" style="background: linear-gradient(90deg, #2d89bb 0%, #148fd1 35%, #004C99 100%); padding: 6px; border: solid 1px #ddd">
                            <li class="nav-item"><a class="nav-link" href="https://turismoaventura.com.br/administrador/InsereUser.php">Usuário</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://turismoaventura.com.br/administrador/InsereViagem.php">Viagem</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>';
                } 
            ?>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>        
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>
            
          </ul>
          <form class="d-flex Espacamento" role="search">
            <?php
                if ($quantidadeRegistros > 0) {
                  echo '<svg xmlns="http://www.w3.org/2000/svg" id="CarrinhoCompra" width="30" height="30" fill="currentColor" class="bi bi-cart-plus" onclick="AbreModalCarrinho()" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>';
                }
              ?>
                <?php
                  if($_SESSION['loggedin']){
                    echo '<a class="nav-link" href="https://turismoaventura.com.br/logoff.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                          </a>';
                  }else{
                    echo '<a class="nav-link" href="https://turismoaventura.com.br/login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                          </a>';
                  }
            ?>
          </form>
        </div>
      </div>
    </nav>
     
    <form action="pages/Pagamento.php" name="frmCarrinhoCompra" id="frmCarrinhoCompra" method="POST" class="form-horizontal">
      <div class="modal fade" id="modalPrimeiroAcesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content" style="height: 100%">
            <div class="modal-header">
                <h4 class="" id="myModalLabel"><b>Meu Carrinho</b></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #ffffff;overflow-y: scroll;">
              <?php
                // Consulta ao banco de dados para obter informações sobre a viagem do usuário
                $queryCarrinho = "SELECT * FROM tb_carrinho WHERE id_usuario = '$id_user' ORDER BY DATA_CRIACAO DESC";
                $resultCarrinho = mysqli_query($conexao, $queryCarrinho);

                if ($resultCarrinho) {
                  $index = 1; // Inicializa o índice
                  while ($row = mysqli_fetch_assoc($resultCarrinho)) {
              ?>
                <div class="Passagem">
                    <div class="header-Passagem">
                        <!-- Exibe o nome da viagem em um cabeçalho h5 centralizado -->
                        <h5 style="text-align: center; font-size: 25px">Viagem para <?php echo $row['nome_viagem']; ?></h5>
                    </div>
                      <div class="row">
                        <div class="col-md-2" align="center">
                          <div class="checkbox-wrapper">
                            <!-- Usa o índice para criar um valor único para o checkbox -->
                            <input type="checkbox" name="checkViagem" data-index="<?php echo $index; ?>" data-identificador="<?php echo $row['id_carrinho']; ?>" id="Checkbox-Viagem<?php echo $index; ?>" value="viagem<?php echo $index; ?>">
                            <svg viewBox="0 0 35.6 35.6">
                                <circle r="17.8" cy="17.8" cx="17.8" class="background"></circle>
                                <circle r="14.37" cy="17.8" cx="17.8" class="stroke"></circle>
                                <polyline points="11.78 18.12 15.55 22.23 25.17 12.87" class="check"></polyline>
                            </svg>
                          </div>
                        </div>
                        <div class="col-md-8" style="text-align: center">
                          <div>
                            <label for="dtViagem2" class="form-label">Data de Viagem: <?php echo date('d/m/Y', strtotime($row['data_ida'])); ?></label>
                          </div>
                          <div>
                            <?php
                              $ingressos = array();

                              if ($row['ingresso_kid'] > 0) {
                                  $ingressos[] = $row['ingresso_kid'] . ' (kid)';
                              }
                              if ($row['ingresso_adulto'] > 0) {
                                  $ingressos[] = $row['ingresso_adulto'] . ' (Adulto)';
                              }
                              if ($row['ingresso_idoso'] > 0) {
                                  $ingressos[] = $row['ingresso_idoso'] . ' (Idoso)';
                              }
                              echo '<label for="txtIngresso" class="form-label">Ingressos: ' . implode(', ', $ingressos) . '</label>';
                            ?>
                          </div>
                          <div>
                            <label for="nmrAssento" class="form-label">Assentos Selecionados: <?php echo $row['numero_assento']; ?></label>
                        </div>
                      </div>
                      <div class="col-md-2" align="center" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="IconDelete" id="IconDelete<?php echo $index; ?>" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                      </div>                 
                    </div>
                    <div class="main-Passagem"></div>
                    <br>
                       
                    </div>
                    <br>
                <?php
                    $index++; // Incrementa o índice para a próxima iteração
                  }
                  mysqli_free_result($resultCarrinho);
                }
                ?>          
              </div>
                <div class="modal-footer" style="padding-right: 3%">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #ccc; color: white">
                        <span class="glyphicon glyphicon-remove">Fechar</span>
                    </button>
                    <button type="button" class="btn" style="background-color: #1b71ea; color: white" onclick="validarFormulario()">
                        <span class="glyphicon glyphicon-ok">Finalizar Compra</span>
                    </button>
                </div>
            </div>
          </div>
        </div>
    </form>

      <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
            echo '
            <div style="background: linear-gradient(90deg, #2e85b5 0%, #1f709b 35%, #163c62 100%); padding: 3px;">
                <font color="white">
                    Olá ' . $_SESSION['first_name'] . ', ' . $saudacao . '
                </font>
            </div>';
        }
      ?>

<script>
  
  function AbreModalCarrinho(){
    $("#modalPrimeiroAcesso").modal("show");
  }


  function validarFormulario() {
    var checkboxes = document.getElementsByName('checkViagem');
    var peloMenosUmChecado = false;
    var identificadorChecado = null;

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            peloMenosUmChecado = true;
            identificadorChecado = checkboxes[i].getAttribute('data-identificador');
            console.log('A caixa de seleção com identificador ' + identificadorChecado + ' foi marcada.');
            break;
        }
    }

    if (peloMenosUmChecado === false) {
        Swal.fire({
            icon: 'error',
            title: 'Para prosseguir, escolha uma viagem',
            showConfirmButton: true,
            allowOutsideClick: false,
        });
        return false;
    } else {
        // Adicionar data-identificador como um parâmetro à URL
        var urlRedirecionamento = 'pages/Pagamento.php?identificador=' + identificadorChecado + '&data-identificador=' + identificadorChecado;
        console.log(urlRedirecionamento);

        Swal.fire({
            icon: 'success',
            title: 'Você está pertinho de garantir sua viagem',
            showConfirmButton: true,
            allowOutsideClick: false,
            willClose: () => {
                if (!Swal.isLoading()) {
                    window.location.href = urlRedirecionamento
                }
            }
        });
    }
}

$(document).ready(function () {
    // Adicione um manipulador de eventos de clique ao SVG
    $('.IconDelete').on('click', function () {
        // Obtenha o ID do SVG clicado (o índice)
        var index = $(this).attr('id').replace('IconDelete', '');
        console.log(index);
        var checkboxes = document.getElementsByName('checkViagem');
        var peloMenosUmChecado = false;
        var identificadorChecado = null;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                peloMenosUmChecado = true;
                identificadorChecado = checkboxes[i].getAttribute('data-identificador');
                break;
            }
        }

        if (peloMenosUmChecado === false) {
            Swal.fire({
                icon: 'error',
                title: 'Para prosseguir, escolha a viagem que deseja excluir',
                showConfirmButton: true,
                allowOutsideClick: false,
            });
            return false;
        } else {
            Swal.fire({
                title: 'Tem certeza?',
                text: 'Esta viagem será removida do carrinho!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: 'Ajax/AjaxDeletaCarrinho.php?identificador=' + identificadorChecado + '&data-identificador=' + identificadorChecado,
                        processData: false,
                        contentType: false,
                        data: { index: index },
                        success: function (response) {
                            Swal.fire(
                                'Excluído!',
                                'Viagem removida do carrinho.',
                                'success'
                            ).then((result) => {
                                if (result.value) {
                                    document.location.href = 'index.php';
                                }
                            });
                            console.log(response);
                        },
                        error: function (error) {
                            // Lide com erros (opcional)
                            console.error(error);
                        }
                    });
                }
            });
        }
    });
});

</script>











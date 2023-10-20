<!doctype html>
<html lang="pt-br">   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!---Link para Bootstrap--->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      
        <title>Turismo Aventura</title>
        <style>
          *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-weight:bold
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
          #imgLogo{ 
            width: 100%;
            height: 100%;
          }
          #ModalUser{
            display: none;
          }
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
        </style>  
    </head>
    <body>
        <?php 
          include_once('../topmenu3.php');
        ?>
          <br>
          <br>
          <h4 style="text-align: center;padding-top:5%"><translateMult>Cadastrar Usuário</translateMult></h4>
	      <hr style=" border: none;border-top: 3px solid gray;">
          <form id="frmCadastraUser" name="frmCadastraUser" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <label for="txtUser">Usuário</label>
                    <input type="text" name="txtUser" id="txtUser" class="form-control input-sm" maxlength="20" style="height: 35px;" oninput="permitirSomenteLetras(event)">
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <label for="txtNome">Nome</label>
                    <input type="text" name="txtNome" id="txtNome" class="form-control input-sm" maxlength="20" style="height: 35px;" oninput="permitirSomenteLetras(event)" >
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <label for="txtEmail">Email</label>
                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-sm" style="height: 35px;" onBlur="verificarEmail()">
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <label for="txtPerfil">Tipo de Perfil</label>
                    <select name="nu_perfil_usuario" class="form-select" id="slcTipoPerfil" name="slcTipoPerfil">
                      <option value="">Selecione</option>
                      <option value="23">Administrador</option>
                      <option value="100">Cliente</option>
                    </select>
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <button type="button" id="btnCadastra" name="btnCadastra" class="btn btn-secondary" style="width: 100%;background-color: #000000;" onclick="cadastraUser()">Cadastrar</button>            
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <br>
                <br>
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

                $host = "br886.hostgator.com.br";
                $username = "turis832_matheus";
                $password = "matheus0307";
                $dbname = "turis832_bd_turismo_aventura";

                $conn = new mysqli($host, $username, $password, $dbname);

                  // Verifica a conexão
                  if ($conn->connect_error) {
                      die("Falha na conexão: " . $conn->connect_error);
                  }

                  // Consulta os usuários na tabela
                  $sql = "SELECT * FROM usuarios";
                  $result = $conn->query($sql);
              ?>
                <table id="TableUser" style="text-align: center;" class="table table-responsive table-hover">
                  <thead style="background-color:#000000;color:white; text-align: center;">
                    <tr style="vertical-align: middle; text-align:center;"> 
                      <th style="text-align: center; color:#FFFFFF">Usuário</th>
                      <th style="text-align: center; color:#FFFFFF">Nome</th>
                      <th style="text-align: center; color:#FFFFFF">CPF</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Verifica se há registros retornados pela consulta
                    if ($result->num_rows > 0) {
                        // Itera sobre os registros com o loop foreach
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["nome"] . "</td>";
                            echo "<td>" . $row["CPF"] . "</td>";
                        
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
                    }
                    ?>
                  </tbody>

              </table>
            </div>
          </form>

    </body>
</html>

<script>
    function permitirSomenteLetras(event) {
        var input = event.target;
        var valorAnterior = input.value;
        var novoValor = valorAnterior.replace(/[^a-zA-Z]/g, '');

        if (valorAnterior !== novoValor) {
            input.value = novoValor;
        }
    }

</script>

<script>
    function verificarEmail() {
      var email = document.getElementById("txtEmail").value;
      var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (email.trim() === "") {
        return; // Sai da função se o campo estiver vazio
      }

      if (!regexEmail.test(email)) {
        Swal.fire('Erro!', 'Por favor, insira um e-mail válido', 'error');
      } 
    }

    

</script>

<script>
    function validarCampos() {
    var Usuario = document.getElementById('txtUser').value;
    var Nome = document.getElementById('txtNome').value;
    var Email = document.getElementById('txtEmail').value;
    var Perfil = document.getElementById('slcTipoPerfil').value;
  
    // Verifica se os campos estão vazios
    if (Usuario.trim() === '' || Nome.trim() === '' || Email.trim() === '' || Perfil.trim() === '') {
      // Exibe uma mensagem informando que os campos não foram preenchidos
      Swal.fire('Erro!', 'Por favor, preencha todos os campos.', 'error');
    } else {
      // Exibe uma mensagem informando que os campos foram atualizados com sucesso
      Swal.fire('Sucesso!', 'Campos atualizados com sucesso.', 'success');
  
      // Envia o formulário
      document.getElementById('frmCadastraUser').submit();
    }
  }
  
</script>

<script>
    $(document).ready(function () {
    $('#TableUser').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/pt_br.json"
        },
        "order": [[1, "desc"]] // Altera o número da coluna (0 no exemplo) para a coluna desejada
    });
    });
  </script>

<script>
  function cadastraUser(){
      event.preventDefault(); // Evita o comportamento padrão do formulário

      // Obtém os dados do formulário
      var perfil = $('#slcTipoPerfil').val();
      var email = $('#txtEmail').val();
      var nome = $('#txtNome').val();
      // Cria um objeto de dados a serem enviados
      var data = {
          perfil: perfil,
          email: email,
          nome: nome
      };

      // Realiza a chamada AJAX
      $.ajax({
          type: 'POST',
          url: '../administrador/ajax/ajaxCadastraUser.php', // Substitua pelo nome do seu arquivo PHP
          data: data,
          success: function(response) {
              // Manipule a resposta do servidor aqui, se necessário
              console.log(response);
              document.getElementById('frmCadastraUser').submit();
          },
          error: function(xhr, status, error) {
              // Manipule os erros da chamada AJAX aqui
              console.log(xhr.responseText);
          }
      });
  }
 </script>
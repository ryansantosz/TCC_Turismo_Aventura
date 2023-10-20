<?php 
	session_start();
	include('../conexao.php');
?>

<!DOCTYPE html>
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

    <title>Turismo Aventura</title>

    <style>
         *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
          font-weight:bold
        }
         
          h1{
            font-family: system-ui;
            color: #5A9BE6;
            font-size:60px;
          }
          h5{
            font-family: system-ui;
            color: rgb(61 57 57);
          }
          #txtMensagem{
            background-color: #f6f6f6;
          }
          #txtEmail{
            background-color: #f6f6f6          
          }
          #txtNome{
            background-color: #f6f6f6          
          }
          #EnviaMsg{
            background-color:#5A9BE6;
            border-radius: 1%;
            padding-left: 1%;
            width: 50%;
            border: 1px solid white;
          }
            .formInpt {
                display: block;
                width: 100%;
                height: 34px;
                outline: none;
                padding: 6px 10px;
                font-size: 14px;
                background-color: #fff;
                background-image: none;
                border: none;
                border-bottom: 1px solid #5A9BE6;
            }
            
    </style>
    </head>
<body>
<?php 
  include_once('../topmenu2.php');
?>
<br>
<form id="frmContato" name="frmContato" method="POST"> 
    <div class="container"> 
        <div class="row">
            <div class="col-md-12" align="left">
              <h1>Entre em Contato</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" align="left">
            <h5>Estaremos sempre dispostos para ajudar você!</h5>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="formInpt" name="txtNome" id="txtNome" placeholder="Seu nome">
          </div>
          <div class="col-md-6">
              <input type="text" class="formInpt" name="txtEmail" id="txtEmail" placeholder="Seu e-mail" onblur="verificarEmail()">
          </div>
        </div>
    <br>
    <br>
    <br>
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="formInpt" name="txtMensagem" id="txtMensagem" placeholder="Insira sua mensagem aqui" max-lenght="200">
            </div>
        </div>
    <br>
    <br>
    <br>
        <div class="row">
            <div class="col-md-12" align="left">
                <button type="button" class="btn btn-secondary" name="EnviaMsg" id="EnviaMsg" onclick="verificarCampos()">Enviar</button>
            </div>
        </div>
        <br>
        <br>
        <br>
    
    </div>
</form>
</body>
</html>

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
    function verificarCampos() {
      var campo1 = document.getElementById("txtEmail").value;
      var campo2 = document.getElementById("txtNome").value;
      var campo3 = document.getElementById("txtMensagem").value;

      if (campo1.trim() === "" || campo2.trim() === "" || campo3.trim() === "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Para Prosseguir, preencha os campos acima!',
          
        })
        return false;
      }

      // Submit do formulário
      document.getElementById("frmContato").submit();
    }


</script>
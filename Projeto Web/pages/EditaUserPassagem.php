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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
        
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
            background: #000000;
            background: linear-gradient(90deg, #000000 0%, #000000 35%, #000000 100%);
            position: fixed;
            width: 100%;
            z-index: 99;
          }
          #containerPrincipal {
              background: #000000;
              background: linear-gradient(90deg, #000000  0%, #000000 35%, #000000  100%);
            }
          #imgLogo{
            width: 80%;
            height: 60%;
          }
        </style>  
    </head>
    <body>
      <div class="container">
        <h4><translateMult>Buscar Usuário</translateMult></h4>

	<hr>

	<form action="" method="post" name="form1" id="form1" class="form-horizontal" target="_self">
		<input type="hidden" name="hdnBlock" id="hdnBlock" value="0">
		<input type="hidden" name="hdnID_USER" id="hdnID_USER" value="0">
		<input type="hidden" name="hdnDesblock" id="hdnDesblock" value="0">
		<div class="form-group">
			<label class="col-sm-1 col-md-offset-3 control-label"><translateMult>Usuário:</translateMult></label>
			<div class="col-md-3">
				<input onblur="filtraruser()" name="matricula" type="text" class="form-control input-sm" id="matricula" onFocus="this.value='';" onKeyPress="formataM(matricula)" maxlength="20">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1 col-md-offset-3 control-label"><translateMult>Nome:</translateMult></label>
			<div class="col-md-3">
				<input name="txtNome" type="text" class="form-control input-sm" id="txtNome" onblur="filtraruser()" onFocus="this.value='';">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1 col-md-offset-3 control-label"><translateMult>Email:</translateMult></label>
			<div class="col-md-3">
				<input name="txtEmail" type="text" class="form-control input-sm" id="txtEmail" onblur="filtraruser()" onFocus="this.value='';">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1 col-md-offset-3 control-label"><translateMult>Perfil:</translateMult></label>
			<div class="col-md-3">
				<select name="nu_perfil_usuario" class="form-control input-sm" id="optnu_perfil_usuario" onchange="filtraruser()" onFocus="this.value='';">
					<option value="" class="translateMultClass">Selecione</option>
					<option value="50" class="translateMultClass">Gestor</option>
					<option value="75" class="translateMultClass">Consultor</option>
					<option value="23" class="translateMultClass">Cliente</option>
					<option value="100" class="translateMultClass">Adm do Cliente</option>
					
				</select>
			</div>

		</div>
		<div class="form-group">

		<div class="col-sm-6" style="margin-left:24.2% !important;">
			<div class="col-sm-2">
				<label for="InputLotacao"><translateMult>Lotação:</translateMult></label>
			</div>
			<div class="col-sm-3" style="width:52.5% !important;">
				<select name="nu_lotacao" class="form-control input-sm" id="nu_lotacao" onchange="filtraruser()" onFocus="this.value='';">
					<option value="" translate="no">Selecione</option>
					<cfoutput query="queryLotacao">
						<option value="#id#">#nome#</option>
					</cfoutput>
				</select>
			</div>
		</div>
	</div>

	<hr>
      </div>
    </body>
    </html>
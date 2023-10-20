<?php


 if (isset($_SESSION['username'])) {
   unset($_COOKIE['PHPSESSID']);
   setcookie('PHPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
 }

 ?>
 <?php 
	session_start();
	include('conexao.php');
?>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="icon" href="Foto/paw-solid.svg">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="jquery.mask.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/style-login.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metro/4.4.3/js/metro.min.js" integrity="sha512-/Ix/SVCN0erpULzS6CwAa0lliU1jZpw2eyJbn5+3U3NQczMSc39SHbLap2/gcO5rT8z6mHnDF4Nnsxt2U9RjfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metro/4.4.3/css/metro-all.min.css" integrity="sha512-Cgzrg+DM0kLkI2T0rsoTfN5H24ehMxyT33djRfD4v2bMf6zc4gFM2Ci5dUr4Gn2pj3lL26ekRRq4UgsqlO4Gjw==" crossorigin="anonymous" referrerpolicy="no-referrer"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-KnXV1sCbmzE6t2OYylr4kW3v+jwwzqG5u2By1Tw+5uLo16h25oEeX0N9zHXWqI+7Wbl0dhUiq7U/kblf0prVfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<title>Turismo Aventura</title>
</head>
<body>
<form name="loginform" id="loginform" method="post" autocomplete="off">
<div class="translateMultClass" style="display: none;visibility:hidden" id="div09">Ocorreu um erro, Tente Novamente ...</div>
<div class="translateMultClass" style="display: none;visibility:hidden" id="div10">Logando ...</div>
<input type="text" id="hdnIp" name="hdnIp" value="" hidden>

	<div class="main-login">
		<div class="left-login">
		<h2 style="text-align: center">Faça Login ou Cadastre-se <br>
			na turismo aventura</h2>
		<img src="img/login.jpg" class="left-login-image" alt="Veterinario Animação">
	</div>
	<div class="right-login">
		<div class="card-login">
			<div class="title">
			    <h1>Log In</h1>
			</div>
			<div class="textfield">
				<label for="txtEmail">Email</label>
				<input type="text" class="fontAwesome" name="txtEmail" id="txtEmail" placeholder="&#xf007   Usuário">
			</div>
			<div class="textfield">
				<label for="txtPassword">Senha</label>
				<input type="password" class="fontAwesome" name="txtPassword" id="txtPassword" placeholder="&#xf023    Senha">
			</div>

            <div class="form-group">
				<!-- <div class="notification is-danger" id="notAuth" style="font-size: 18px;margin-top: 20px;color: red; display: none">
					<p>ERRO: Usúario ou senha inválidos.</p>
				</div> -->    
	        </div>

			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="text-align: left">
						<a href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#myModal" style="color:#000">Esqueceu a Senha?</a>
					</div>
					
					<div class="col-sm-6" style="text-align: right">
						<a href="" id="forPass" href="#" data-bs-toggle="modal" data-bs-target="#modalPrimeiroAcesso" style="color:#000">Primeiro Acesso?</a>
					</div>
				</div>
			</div>
    
			<button type="button" class="btn-login" id="btn-login" onclick="enviarDados()">
				<span class="spinner-border spinner-border-sm" id="loaderLogin" style="display:none" role="status" aria-hidden="true"></span>
				Entrar <i class="m-icon-swapright m-icon-white"></i>
			</button>
				
		</div>

	</div>
</div>
</form>



    <!--- Modal (inicio) --->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
						<h4 class="modal-title" id="myModalLabel" style="font-family: 'Poppins'"><b>Esqueci a Senha</b></h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <div class="modal-body">
	                    <form name="frmMudaSenha" id="frmMudaSenha" method="post" class="form-horizontal">
	                        <div class="form-group">
	                            <div class="col-sm-8">
	                                <label for="txtEmailT" class="form-label">Email:</label>
	                                <input type="text" name="txtEmailT" id="txtEmailT" value="" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-sm-12">
	                                <div id="divMostraR"></div>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn" data-bs-dismiss="modal" onclick="Limpa();">
	                        Fechar <span class="glyphicon glyphicon-remove"></span>
	                    </button>
	                    <button type="button" class="btn" onclick="Alterar();">
	                        Alterar Senha <span class="glyphicon glyphicon-send"></span>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div><!--- Modal (Fim) --->

        <!------- MODAL PRIMEIRO ACESSO ------->
	<div class="modal fade" id="modalPrimeiroAcesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel" style="font-family: 'Poppins'"><b>Primeiro Acesso</b></h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form name="frmCadPA" id="frmCadPA" method="post" class="form-horizontal">
						<input type="hidden" id="hdnInsere" name="hdnInsere" value="1">
                        <div class="row">
							<div class="col-sm-3">
								<label for="txtFirstNamePA" class="form-label">Nome:</label> 
								<input type="text" id="txtFirstNamePA" name="txtFirstNamePA" onkeypress="return permitirSomenteLetras(event)" value="" class="form-control">
							</div>
                            <div class="col-sm-3">
								<label for="txtLastNamePA" class="form-label">Sobrenome:</label> 
								<input type="text" id="txtLastNamePA" name="txtLastNamePA" onkeypress="return permitirSomenteLetras(event)" value="" class="form-control">
							</div>
							<div class="col-sm-6">
								<label for="txtEmailPA" class="form-label">Email:&nbsp; <i style="cursor:hand; color:red !important" class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" data-html="true" title="O nome de usuário deve único"></i></label>
								<input type="text" id="txtEmailPA" name="txtEmailPA" onchange="ValidaEmail(this);" value="" class="form-control">
							</div>
                        </div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label>Telefone:</label>
								<input type="text" id="txtTelPA" name="txtTelPA" value="" placeholder="(99) 99999-9999" class="form-control">
							</div>
                            <div class="col-sm-4">
								<label>CPF:</label>
								<input type="text" id="txtCpfPA" name="txtCpfPA" placeholder="999.999.999-99" class="form-control">
							</div>
							<div class="col-sm-4">
								<label>Data Nasc:</label>
								<input type="date" id="txtDataNascPA" name="txtDataNascPA" value="" class="form-control">
							</div>
						</div>
						<div class="row">							
							<div class="col-sm-12">
								<div id="divMostraPA"></div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-bs-dismiss="modal" onclick="Limpa();">
						Fechar <span class="glyphicon glyphicon-remove"></span>
					</button>
					<button type="button" class="btn" onclick="cadastraPA();">
						Cadastrar <span class="glyphicon glyphicon-ok"></span>
					</button>
				</div>
			</div>
		</div>
	</div>

</body>

<script>
	<?php if(isset($_GET['PA']) == true){ ?>
			setTimeout(function(){
				var modalPa = new bootstrap.Modal(document.getElementById('modalPrimeiroAcesso'));
				modalPa.show()
			}, 500);
		<?php }?>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script>
	var $j = jQuery.noConflict();
	$j(document).ready(function() {
		$j('#txtTelPA').mask('(00) 00000-0000');
		$j('#txtCpfPA').mask('000.000.000-00', {reverse: true});
		$('#txtDataNascPA').mask('9999-99-99');
	});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const cpfInput = document.getElementById("txtCpfPA");

    cpfInput.addEventListener("change", function () {
        const cpf = cpfInput.value;


        if (validarCPF(cpf)) {
            console.log('CPF válido'); 
        } else {
            alert('CPF inválido');  
			cpfInput.value = ''           
        }
    });
	function validarCPF(cpf) {
	// Remove caracteres não numéricos
	cpf = cpf.replace(/[^\d]/g, '');

	// Verifica se o CPF tem 11 dígitos
	if (cpf.length !== 11) {
		return false;
	}

	// Verifica se todos os dígitos são iguais
	if (/^(\d)\1+$/.test(cpf)) {
		return false;
	}

	// Calcula o primeiro dígito verificador
	let soma = 0;
	for (let i = 0; i < 9; i++) {
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	let digito1 = 11 - (soma % 11);
	if (digito1 > 9) {
		digito1 = 0;
	}

	// Calcula o segundo dígito verificador
	soma = 0;
	for (let i = 0; i < 10; i++) {
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	let digito2 = 11 - (soma % 11);
	if (digito2 > 9) {
		digito2 = 0;
	}

	// Verifica se os dígitos verificadores estão corretos
	if (parseInt(cpf.charAt(9)) !== digito1 || parseInt(cpf.charAt(10)) !== digito2) {
		return false;
	}

	return true;
	}
});

</script>
<script>
        $(document).ready(function () {
            $("#txtDataNascPA").on("blur", function () {
                var dataNascimento = $("#txtDataNascPA").val();
                var dataNascimentoMoment = moment(dataNascimento, "YYYY-MM-DD");

                if (!dataNascimentoMoment.isValid()) {
                    alert('Data de nascimento inválida');
                    $("#txtDataNascPA").val(""); // Limpa o campo
                    return;
                }

                var hoje = moment();
                var idade = hoje.diff(dataNascimentoMoment, 'years');

                if (idade < 18) {
                    alert('Você é menor de idade');
                    $("#txtDataNascPA").val(""); // Limpa o campo
                }
            });
        });
</script>
<script>
	// Função para permitir apenas letras (baseada no evento onkeypress)
	function permitirSomenteLetras(event) {
		var tecla = event.key;
		
		// Verifica se a tecla pressionada é uma letra (a-zA-Z) ou tecla de controle (por exemplo, Backspace)
		if (/^[a-zA-Z]$/.test(tecla) || event.ctrlKey || event.metaKey) {
			return true; // Permite a entrada
		} else {
			return false; // Impede a entrada
		}
	}
</script>
</body>
</html>

<script>


    function cadastraPA(){
		var formdata = new FormData($("form[name='frmCadPA']")[0]);
		var d2 = document.frmCadPA;
		var s = '';
		var erro = false;

		s = "<b>Preencha os campos:</b>";
		if(d2.txtEmailPA.value == ''){erro = true; s=s+"<br> - E-mail";}
        if(d2.txtFirstNamePA.value == ''){erro = true; s=s+"<br> - Nome";}
		if(d2.txtCpfPA.value == ''){erro = true; s=s+"<br> - CPF";}
        if(d2.txtTelPA.value == ''){erro = true; s=s+"<br> - Telefone";}
		if(d2.txtDataNascPA.value == ''){erro = true; s=s+"<br> - Data Nascimento";}
        //if(d2.txtDataNascPA.value == ''){erro = true; s=s+"<br> - Telefone";}

		if(erro){
			$('#divMostraPA').html("<div class='alert alert-danger'>"+s+"</div>");
		}else{
				$.ajax({
					url:"seguranca/cadastraPA.php",
					data:formdata,
					type:"post",
					dataType: "json",
					contentType: false,
					processData: false,
					beforeSend:function(){
						$('#divMostraPA').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
					},
					success:function(retorno) {
						$('#divMostraPA').html("<div "+retorno.cor+">"+retorno.msg+"</div>");
						window.location.assign("https://turismoaventura.com.br/login.php");
					},
					error: function(retorno){
						$('#divMostraPA').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Não foram encontrados registros.<br>Por favor, Tente novamento com outro dados.</div>`);
					}
				});
		}
	}

    var $j = jQuery.noConflict();


		// $("#txtDataNascPA").datepicker({
		// dateFormat: 'dd/mm/yy',
		// changeMonth: true,
		// changeYear: true,
		// yearRange: "1970:+nn",
		// dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
		// dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		// dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		// monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		// monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

		// });

</script>

<script>

function ValidaEmail(campo){
	var f = campo.value;
		if(f != '' && (f.indexOf("@") == -1 || f.indexOf(".") == -1)){
			window.alert('Email Inserido Invalido!');
			$(campo).val('');
			$(campo).focus();
		}

}
</script>

<script>

/*const ipAPI = '//api.ipify.org?format=json'

const inputValue = fetch(ipAPI)
.then(response => response.json())
.then((data) => {return data.ip});

const printIp = () => {
	inputValue.then((ip) => {
		$.ajax({
				url:"teste2.php?ip="+ip,
				type:"GET",
				contentType: false,
				processData: false,
				beforeSend:function(){
					
				},
				success:function(retorno) {
					console.log('foi');
				},
				error: function(retorno){
					
				}
			});
});
};

printIp();
*/
	
function enviarDados(){
    var formdata = new FormData($("form[name='loginform']")[0]);
	
	$('#loaderLogin').delay(20).fadeIn();
    document.getElementById('btn-login').disabled = true;

	var msg = '';


	if(document.getElementById('txtEmail').value == ""){
		// alert("É necessário preencher o campo Usuário." );
		var msg = msg + ' - Email\n';
		document.loginform.txtEmail.focus();
		$('#loaderLogin').delay(1000).fadeOut();
        document.getElementById('btn-login').disabled = false;
	}
	if(document.getElementById('txtPassword').value == ""){
		var msg = msg + '- Senha\n';
		
		// alert("É necessário preencher o campo Senha." );
		document.loginform.txtPassword.focus();
		$('#loaderLogin').delay(1000).fadeOut();
        document.getElementById('btn-login').disabled = false;
	}
	if(msg != ''){
		alert('== PARA PROSSEGUIR PREENCHA OS SEGUINTES CAMPOS ==\n'+msg);
	}
	else{
        $.ajax({
            url:"enter.php",
            data:formdata,
			type: "post",
            dataType: "json",
            contentType: false,
            processData: false,
            success:function(retorno){
				console.log('Aqui 1');
				console.log('Resposta do servidor:', retorno);

                if(retorno.id_user == null && retorno.cor == null && retorno.msg == null){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
                $('#notAuth').show();
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				heightAuto: true,
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
			})
				Toast.fire({
				icon: 'error',
				title: 'ERRO: Usúario ou senha inválidos!'
				})
            }
			else if(retorno.id_user != null && retorno.location == "inativo"){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
                $('#notAuth').show();
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				heightAuto: true,
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
			})
				Toast.fire({
				icon: 'error',
				title: 'ERRO: SEU PEFIL ESTA INATIVO, CONTATE UM ADM!'
				})
            }
            else if(retorno.id_user != null && retorno.location == "edita"){
				console.log('Aqui 2');
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},

					willClose: (toast) => {
						setTimeout(function(){
							window.location.assign('https://turismoaventura.com.br/seguranca/EditaSenha.php?id_user=' + retorno.id_user);
						},200); 	
					}
				})
				Toast.fire({
				icon: 'success',
				title: 'Login Realizado com Sucesso!'
				}) 
            }
            else if(retorno.id_user != null){
				console.log('Aqui 3');
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
					willClose: (toast) => {
						setTimeout(function(){
							window.location.assign("https://turismoaventura.com.br/MasterFrameSet.php");
						},200); 
						
					}
			})
				Toast.fire({
				icon: 'success',
				title: 'Login Realizado com Sucesso!'
				})
            }
            },
            error: function(retorno){
				console.log('Resposta do servidor:', retorno);

				console.log('Aqui 4');
                if(retorno.id_user == null && retorno.cor == null && retorno.msg == null){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
                //$('#notAuth').show();
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
					// willClose: (toast) => {
					// 	setTimeout(function(){
					// 		window.location.assign("https://turismoaventura.com.br/MasterFrameSet.php");
					// 	},200); 
						
					// }
			})
				Toast.fire({
				icon: 'error',
				title: 'ERRO: Usúario ou senha inválidos!'
				})
                
            }
        }
        });
    }
}

</script>



<script>
function Alterar(){
	var formdata = new FormData($("form[name='frmMudaSenha']")[0]);	
	var d2 = document.frmMudaSenha;
	var s = '';
	var erro = false;

	s = "<b>Preencha os campos:</b>";
	if(d2.txtEmailT.value == ''){erro = true; s=s+"<br> - E-mail";}

	if(erro){
		$('#divMostraR').html("<div class='alert alert-danger'>"+s+"</div>");
	}else{
		r = confirm("Você quer realmente alterar sua senha?");

		if(r){
			$.ajax({
				url:"seguranca/esqueceuSen.php",
				data:formdata,
				type:"post",
				dataType: "json",
				contentType: false,
				processData: false,
				beforeSend:function(){
					$('#divMostraR').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
				},
				success:function(retorno) {
					$('#divMostraR').html("<div "+retorno.cor+">"+retorno.msg+"</div>");
				},
				error: function(retorno){
					$('#divMostraR').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Não foram encontrados registros.<br>Por favor, Tente novamento com outro dados.</div>`);
				}
			});
		}
	}
	}

	function Limpa(){
		var d2 = document.frmMudaSenha;
		d2.txtUsuarioT.value = '';
		d2.txtEmailT.value = '';
		$('#divMostraR').html("");
	}
</script>

<script>
var pass = document.getElementById("txtPassword");
var btn = document.getElementById("btn-login");
pass.addEventListener("focus", function() {
 pass.addEventListener('keypress', function (event) {
	console.log(event);
        if (event.keyCode === 13){
			event.preventDefault();
			$("#btn-login").click();
			
        }
    });
});

</script>


</html>
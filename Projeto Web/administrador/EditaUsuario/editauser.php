<?php 
	session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>


<?php
    include_once('../../conexao.php');

    $buscaUsersCad = "select * from usuarios where id_user = " . $_GET['id_user'];
    $result_buscaUsersCad = mysqli_query($conexao, $buscaUsersCad);
    $row2 = mysqli_fetch_array($result_buscaUsersCad);
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    </head>

    <header>
    <?php
        include_once '../../topmenu2.php';
    ?>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap');

            body
            {
                font-family: 'Montserrat', sans-serif;
            }
            #imgLogo {
                width: 100%;
                height: 100%;
            }
            h2
            {
                font-family: 'Montserrat', sans-serif;
                padding-bottom: 20px;
            }

            h4
            {
                font-family: 'Montserrat', sans-serif;
                padding-top: 20px;
                padding-bottom: 10px;
            }
            .hoverAzul:hover{
                color: blue!important;
                transition: all .3s ease;
                transform: scale(1.23);
            }
            .hoverVermelho:hover{
                color: red!important;
                transition: all .3s ease;
                transform: scale(1.3);
            }
            .panel-heading1{
                background: #5A9BE6;
                color: #fff;
                padding:20px;
                margin-bottom: 30px;
                width: 100%;
            }
            .panel-heading{
                background: #5A9BE6;
                padding:20px;
                border-radius: 8px 8px 0px 0px;
            }
            .disable{
                display:none;
            }
            .enable{
                display:block;
            }
            .olhoaberto{
                <i class="bi bi-eye-fill"></i>
            }
            .olhofechado{
                <i class="bi bi-eye-slash-fill"></i>
            }
            .labelFiltros{
                font-size: 20px;
                margin-top: 2%;
            }
            #olho{
                font-size: 27px;
                cursor: pointer;
                color: #fff;
            }
            #olho:hover{
                color: #cfcfcf!important;
                transition: all .4s ease;
            }
            #olho2{
                font-size: 27px;
                cursor: pointer;
                color: #fff;
            }
            #olho2:hover{
                color: #cfcfcf!important;
                transition: all .4s ease;
            }
            .alinha-botao-direita {
                text-align-last: right;
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
            .btnAtualiza {
                background-color: #5A9BE6;
                color: #FFF;
                border: none;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
            .btnAtualiza:hover {
                background-color: #fff;
                color: #5A9BE6;
                border: 1px solid #5A9BE6;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
        </style>
    </header>
    
    <body>
        <div class="panel-heading1">
            <h3>
                <center><label>Editar Usuário</label></center>
            </h3> 
        </div>
        <form id="formAtualiza" name="formAtualiza" class="form" method="POST" action="" enctype="multipart/form-data">
            <main class="container">
                <div class="content">
                    <div class="panel-body" style="padding: 3rem; background-color: #fff; border: 1px solid #cfcfcf; border-radius: 8px 8px; width: 100%!important; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                        <div class="row">
                            <div class="col-md-4">
                                <label>E-mail</label>
                                <input type="text" class="formInpt" name="txtEmail" id="txtEmail" value="<?php echo $row2['email'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Nome</label>
                                <input type="text" class="formInpt" name="txtNome" id="txtNome" onkeypress="return permitirSomenteLetras(event)" value="<?php echo $row2['FIRST_NAME'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Sobrenome</label>
                                <input type="text" class="formInpt" name="txtSobrenome" id="txtSobrenome" onkeypress="return permitirSomenteLetras(event)" value="<?php echo $row2['LAST_NAME'] ?>">
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Telefone</label>
                                <input type="text" class="formInpt" name="txtTelefone" id="txtTelefone" onkeypress="mascara(this, telefone)" maxlength="15" value="<?php echo $row2['telefone'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                <select class="formInpt" name="slcStatus" id="slcStatus" style='border-top: 1px solid #fff; border-right: 2px solid #fff; border-left: 1px solid #fff;'>
                                    <option value="0" <?php if($row2['STATUS'] == '0'){ ?> selected <?php } ?>>Ativo</option>
                                    <option value="1" <?php if($row2['STATUS'] == '1'){ ?> selected <?php } ?>>Inativo</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipo de Perfil</label>
                                <select class="formInpt" name="slcTipoPerfil" id="slcTipoPerfil" style='border-top: 1px solid #fff; border-right: 2px solid #fff; border-left: 1px solid #fff;'>
                                    <option value="Administrador" <?php if($row2['nu_perfil_usuario'] == 'Administrador'){ ?> selected <?php } ?>>Administrador</option>
                                    <option value="Cliente" <?php if($row2['nu_perfil_usuario'] == 'Cliente'){ ?> selected <?php } ?>>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12" style="text-align-last: center;">
                                <input type="button" id="btnAtualizarDados" class="btnAtualiza" value="Atualizar Dados" onclick="AtualizaUser()">
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </main>
        </form>
    </body>

    <footer>
        <?php
            include_once '../../footerADM.php';
        ?>
    </footer>
</html>


<script>
    function escondertable() {
        var element = document.getElementById("aparecefiltro");
        element.classList.toggle("enable");
        var element = document.getElementById("olho");
        element.classList.toggle("bi-eye-slash-fill");
    }
</script>

<script>
    function AtualizaUser(){
        var mensagem = '';
        if(document.getElementById('txtEmail').value == ''){
            mensagem = mensagem + '- E-mail' + '<br>';
        }
        if(document.getElementById('txtNome').value == ''){
            mensagem = mensagem + '- Nome' + '<br>';
        }
        if(document.getElementById('txtSobrenome').value == ''){
            mensagem = mensagem + '- Sobrenome' + '<br>';
        }
        if(document.getElementById('txtTelefone').value == ''){
            mensagem = mensagem + '- Telefone' + '<br>';
        }
        if(document.getElementById('slcStatus').value == ''){
            mensagem = mensagem + '- Status' + '<br>';
        }
        if(document.getElementById('slcTipoPerfil').value == ''){
            mensagem = mensagem + '- Tipo de Perfil';
        }
        if(mensagem != ''){
            Swal.fire({
                icon: 'error',
                title: 'Para prosseguir, preencha os campos:',
                html: mensagem
            })
        }
        else{
            let formdata = new FormData($("form[name='formAtualiza']")[0])
            $.ajax({
                url:"../ajax/ajaxAtualizaPerfil.php?id_user=" + <?php echo $_GET['id_user'] ?>,
                data: formdata,
                type: "POST",
                dataType: "json",
                contentType: false,
                processData: false,
                success:function(retorno){
                    if(retorno.status == '0'){
                        let timerInterval
                        Swal.fire({
                            icon: 'success',
                            title: 'Perfil atualizado com sucesso!',
                            showConfirmButton: false,
                            timer: 3500,
                            timerProgressBar: true,
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            window.location.href='https://turismoaventura.com.br/administrador/EditaUser.PHP';

                        });
                    }
                    else if(retorno.status == '1'){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            customClass: {container: 'swal2-containerE', popup:'swal2-popupE'},
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: 'Erro ao atualizar perfil!'
                        })
                    }
                    else if(retorno.status == '2'){
                        Swal.fire({
                            title: 'Ops...',
                            text: 'Este E-mail já está cadastrado.',
                            icon: 'error',
                            showConfirmButton: true
                        }).then((result) => {
                        });
                    }
                },
                error: function(retorno){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        customClass: {container: 'swal2-containerE', popup:'swal2-popupE'},
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'error',
                        title: 'ERRO ao atualizar perfil!'
                    })
                }
            });
        }
    }
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

<script>
    function numberToReal(numero) {
        var numero = numero.toFixed(2).split('.');
        numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
        return numero.join(',');
    }

    function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function leech(v){
        v=v.replace(/o/gi,"0")
        v=v.replace(/i/gi,"1")
        v=v.replace(/z/gi,"2")
        v=v.replace(/e/gi,"3")
        v=v.replace(/a/gi,"4")
        v=v.replace(/s/gi,"5")
        v=v.replace(/t/gi,"7")
        return v
    }
    function soNumeros(v){
        return v.replace(/\D/g,"")
    }
    function telefone(v){
        v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
        v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
        return v
    }
    function cpf(v){
        v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                                //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
        return v
    }
    function cep(v){
        v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
        v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
        return v
    }function soNumeros(v){
        return v.replace(/\D/g,"")
    }
    function telefone(v){
        v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
        v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d{5})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
        return v
    }
    function cpf(v){
        v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                                //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
        return v
    }
    function mdata(v){
        v=v.replace(/\D/g,"");
        v=v.replace(/(\d{2})(\d)/,"$1/$2");
        v=v.replace(/(\d{2})(\d)/,"$1/$2");

        v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
        return v;
    }
    function mcc(v){
        v=v.replace(/\D/g,"");
        v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
        v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
        v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
        return v;
    }
</script>
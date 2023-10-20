<?php 
	session_start();
	include('conexao.php');
?>

<?php
    # Executa a query de busca dos usuários
    $buscaUsersCad = "SELECT * FROM usuarios";
    $result_buscaUsersCad = mysqli_query($conexao, $buscaUsersCad);
    $countUsers = mysqli_num_rows($result_buscaUsersCad);
?>

<?php
    # Verifica o tipo de perfil do usuário logado
    $buscaUser = "SELECT * FROM usuarios where id_user = 1";
    $result_queryUser = mysqli_query($conexao, $buscaUser);
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
        <title>Turismo Aventura</title>

    </head>

    <header>
        <?php
            include_once '../topmenu2.php';
        ?>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap');

            body
            {
                font-family: 'Montserrat', sans-serif;
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
            img {
              max-height: 95%;
              max-width: 100%;
            }
        </style>
    </header>
    
    <body>
        <div class="panel-heading1">
            <h3>
                <center><label>Cockpit de Usuários</label></center>
            </h3> 
        </div>
        <main class="container">
            <div class="content">
                <div class="panel-heading" style="border-radius: 8px 8px 0px 0px; border: 1px solid #cfcfcf; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>
                                <i class="bi bi-person-check-fill" style="color:#fff;"></i>
                                <label style="color:#fff;">Usuários Cadastrados:</label>
                                <span class="badge badge-secondary" style="background-color:#fff; color:#5A9BE6; font-size:20px;"><?php echo $countUsers; ?></span>
                            </h3>
                        </div>
                        <div class="col-md-6 alinha-botao-direita">
                            <i id="olho2" class="bi bi-eye-fill" ></i></button>
                        </div>
                    </div>
                </div>
                <div class="panel-body" style="background-color: #fff; border: 1px solid #cfcfcf; border-radius: 0px 0px 8px 8px; width: 100%!important; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover table-bordered" style="align:center, font-size: 25px!important; width:100%!important;" id="tbCadastrados">
                                <thead>
                                    <tr align="center" style="font-size: 12px; background-color:#5A9BE6; color: white;">
                                        <td><center><b><div class="translateMult en">Login</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Nome de Usuário</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Status do Perfil</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Tipo de Perfil</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Editar</div></b></center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($rowUser = mysqli_fetch_array( $result_buscaUsersCad )) { ?>
                                        <tr align="center" style="font-size: 12px; background-color:white">
                                            <td><center><?php echo $rowUser['email']; ?></center></td>
                                            <td><center><?php echo $rowUser['FIRST_NAME'];  echo $rowUser['LAST_NAME']; ?></center></td>
                                            <td>
                                                <center>
                                                    <?php
                                                        if ($rowUser['status'] == 0) {
                                                            echo 'Ativo';
                                                        }
                                                        else {
                                                            echo 'Bloqueado';
                                                        }
                                                    ?>
                                                </center>
                                            </td>
                                            <td><center><?php echo $rowUser['nu_perfil_usuario']; ?></center></td>
                                            <td style="font-size: 16px;">
                                                <center>
                                                    <a href="administrador/EditaUsuarioeditauser.php/?id_user=<?php echo $rowUser['id_user'];?>">
                                                        <div class="bi bi-pencil-fill hoverAzul" style="color: black; cursor: hand;"></div>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </main>
    </body>

    <footer>
        <?php
            include_once '../footer.php';
        ?>
    </footer>
</html>


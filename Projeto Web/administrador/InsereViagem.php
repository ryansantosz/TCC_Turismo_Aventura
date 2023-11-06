<?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include('../conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Inserção de Viagem</title>
    <!-- Inclua os arquivos de estilo e scripts do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .panel-heading1{
            background: #5A9BE6;
            color: #fff;
            padding:20px;
            margin-bottom: 30px;
            width: 100%;
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
        include_once '../topmenu2.php';
    ?>
    <div class="panel-heading1">
            <h3>
                <center><label>INSERIR VIAGEM</label></center>
            </h3> 
        </div>
    <div class="container">
        <form action="processar_viagem.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" class="form-control formInpt" name="destino" id="destino">
            </div>

            <div class="form-group">
                <label for="data_partida">Data de Partida:</label>
                <input type="date" class="form-control formInpt" name="data_partida" id="data_partida">
            </div>

            <div class="form-group">
                <label for="data_retorno">Data de Retorno:</label>
                <input type="date" class="form-control formInpt" name="data_retorno" id="data_retorno">
            </div>

            <div class="form-group">
                <label for="num_passageiros">Número de Passageiros:</label>
                <input type="number" class="form-control formInpt" name="num_passageiros" id="num_passageiros">
            </div>

            <div class="form-group">
                <label for="meio_transporte">Meio de Transporte:</label>
                <select class="form-control formInpt selectpicker" data-live-search="true" name="meio_transporte" id="meio_transporte">
                    <option value="Avião">Avião</option>
                    <option value="Carro">Carro</option>
                    <option value="Trem">Trem</option>
                    <option value="Ônibus">Ônibus</option>
                </select>
            </div>

            <div class="form-group">
                <label for="detalhes_viagem">Detalhes da Viagem:</label>
                <textarea class="form-control formInpt" name="detalhes_viagem" id="detalhes_viagem" rows="4"></textarea>
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagem_viagem" id="imagem_viagem" accept="image/*" onchange="previewImage(this);">
                    <label class="custom-file-label" for="imagem_viagem">Escolher arquivo</label>
                </div>
            </div>


            <div class="form-group">
                <div id="imagePreview"></div>
            </div>
            
            <button type="submit" class="btn btn-primary">Inserir Viagem</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
    </script>


    <!-- Inclua os arquivos de script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Inclua o arquivo JavaScript da SelectPicker a partir do CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0/js/bootstrap-select.min.js"></script>

    <script>
        function previewImage(input) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = '';
            
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-thumbnail';
                    imagePreview.appendChild(img);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>

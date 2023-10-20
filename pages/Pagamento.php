<?php 
	session_start();
	include('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
        <link href="../css/Pagamento.css" rel="stylesheet">
        <title>Turismo Aventura</title>
    </head>
<body>
    <?php 
        include_once('../topmenu2.php');
    ?>
    <div class="container">
        <section>
            <div class="row" id="RowPagamento">
                <div class="col-md-7" id="TipoPagamento">
                    <h2>Como você prefere pagar?</h2>
                    <br>
                    <div class="col-md-12 Col-pagamento">
                        <input type="radio" class="form-check-input checkbox-pagamento " name="rdoPagamento" id="rdoPix" value="pix">
                        <img src="../img/img-pix.png" alt="" id="img-pix">
                        <div class="text-pagamento">
                            <span>Pix</span>
                            <p>Aprovação imediata</p>
                        </div>
                    </div>
                    <div class="col-md-12 Col-pagamento">
                        <input type="radio" class="form-check-input checkbox-pagamento " name="rdoPagamento" id="rdoCartao" value="Cartao">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="CardSvg" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                        </svg>                        
                        <div class="text-pagamento">
                            <span class="text-campo">Cartão de Crédito</span>
                            <p class="text-campo">Até 5x sem juros</p>
                        </div>
                    </div>
                    <div class="col-md-12 Col-pagamento" style="border-bottom: 1px solid #bebaba;">
                        <input type="radio" class="form-check-input checkbox-pagamento " name="rdoPagamento" id="rdoBoleto" value="Boleto">
                        <img src="../img/svg-boleto.svg" id="img-boleto">                      
                        <div class="text-pagamento">
                            <span class="text-campo">Boleto</span>
                            <p class="text-campo">Será aprovado em um ou dois dias.</p>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12" align="end">
                        <input type="button" class="btn btn-primary" style="width:50%" name="btnComprar" id="btnComprar" value="Finalizar" onclick="validarPagamento()">
                    </div>
                    <br>
                    <br>

                </div>
                <div class="col-md-5 ResumoPagamento">
                    <h2>Resumo de Compra</h2>
                    <hr style="border-top: 2px solid #5A9BE6;">
                    <?php
                        if (isset($_GET['identificador'])) {
                            $id_carrinho = $_GET['identificador'];

                            $queryCarrinho = " SELECT tc.*, u.first_name, u.email, tc.preco_total FROM tb_carrinho tc
                                INNER JOIN usuarios u ON tc.id_usuario = u.id_user
                                WHERE tc.id_usuario = '$id_user' AND tc.id_carrinho = '$id_carrinho' ";
                            

                            $resultCarrinho = mysqli_query($conexao, $queryCarrinho);

                            if ($resultCarrinho) {
                                while ($row = mysqli_fetch_assoc($resultCarrinho)) {
                                    echo '<div class="col-md-12 Sessao-Resumo">';
                                    echo '    <h4>Sessão Usuário</h4>';
                                    echo '    <span>Nome: ' . $row['first_name'] . '</span>';
                                    echo '    <span>Email: ' . $row['email'] . '</span>';
                                    echo '</div>';
                                    echo '<hr style="border-top: 2px solid #5A9BE6;">';
                                    echo '<div class="col-md-12 Sessao-Resumo">';
                                    echo '    <h4>Sessão Viagem</h4>';
                                    echo '    <span>Nome: ' . $row['nome_viagem'] . '</span>';
                                    echo '    <span>Número Assento: ' . $row['numero_assento'] . '</span>';
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
                                    echo '<span>Ingressos: ' . implode(', ', $ingressos) . '</span>';
                                    echo '<span>Data de Viagem: ' . date('d/m/Y', strtotime($row['data_ida'])) . '</span>';
                                    echo '</div>';
                                    echo '<hr style="border-top: 2px solid #5A9BE6;">';
                                    echo '<div class="col-md-12 Sessao-Resumo">';                                     
                                    echo '    <h4>Valor Total da Viagem</h4>';
                                    echo '    <span>Valor Total: ' . $row['preco_total'] . '</span>';
                                    echo '</div>';
                                }
                                mysqli_free_result($resultCarrinho);
                            } else {
                                // Tratar erro na execução da consulta
                                echo 'Erro na consulta: ' . mysqli_error($conexao);
                            }
                        }
                    ?>
                    <br>
                    <hr style="border-top: 2px solid #5A9BE6;">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <br>
            <br>
        </section>
    </div>
</body>
</html>
                                                     
<script>
function validarPagamento() {
    var radios = document.querySelectorAll('.checkbox-pagamento');
    var algumChecado = Array.from(radios).some(radio => radio.checked);

    if (!algumChecado) {
        Swal.fire({
            icon: 'warning',
            title: 'Atenção',
            text: 'Por favor, selecione um método de pagamento.',
            confirmButtonText: 'OK'
        });
        event.preventDefault();
    } else {
        var valorPagamento = document.querySelector('input[name="rdoPagamento"]:checked').value;

        console.log('Valor do pagamento selecionado:', valorPagamento);

        // Adicione o id_carrinho aos dados a serem enviados
        var idCarrinho = <?php echo json_encode($_GET['identificador']); ?>;

        console.log(idCarrinho);


        $.ajax({
            url: '../Ajax/AjaxPagamento.php',
            type: 'POST',
            data: {
                valorPagamento: valorPagamento,
                idCarrinho: idCarrinho,
            },
            
            success: function (data) {
                $('#TipoPagamento').html(data);
            },
            error: function (error) {
                console.error('Erro na solicitação Ajax:', error);
            }
        });
    }
}

</script>

<script>
    function maskCardNumber(input) {
        // Remove qualquer caractere que não seja número
        let value = input.value.replace(/\D/g, '');

        // Adiciona a máscara
        value = value.replace(/(\d{4})(\d{4})(\d{4})(\d{4})/, '$1-$2-$3-$4');

        // Atualiza o valor no input
        input.value = value;
    }

    function validateName(input) {
        // Remove qualquer caractere que não seja uma letra
        let value = input.value.replace(/[^a-zA-ZÀ-ÖØ-öø-ÿ\s]/g, '');

        // Atualiza o valor no input
        input.value = value;
    }
    function aplicarMascara(inputField) {
        // Remover caracteres não numéricos
        const valorLimpo = inputField.value.replace(/\D/g, '');

        // Atualizar o valor no input
        inputField.value = valorLimpo;
    }
    function formatarData(input) {
            // Remove caracteres não numéricos
            var inputValue = input.value.replace(/\D/g, '');

            // Adiciona a máscara MES/ANO
            if (inputValue.length > 2) {
                inputValue = inputValue.substring(0, 2) + '/' + inputValue.substring(2);
            }

            // Atualiza o valor do campo
            input.value = inputValue;
    }

    function validarData() {
            // Obtém o valor do campo
            var valorCampo = document.getElementById('DtAnoVencimento').value;

            var dataAtual = new Date();

            var partesData = valorCampo.split('/');
            var dataCampo = new Date(partesData[1], partesData[0] - 1);

            // Compara as datas
            if (dataCampo < dataAtual) {
                // Utiliza SweetAlert para exibir a mensagem
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'A data de vencimento deve ser futura',
                });

                // Limpa o campo (ou você pode tomar outra ação)
                document.getElementById('DtAnoVencimento').value = '';
            }
        }
</script>




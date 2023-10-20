<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('../conexao.php');
?>

<style>
  .Col-pagamento2 {
    padding-left:3%;  
    height: 15%;    
    width: 100%;
    display: flex;
    align-items: center;
    background-color: white;
    border-top: 1px solid #bebaba;
    border-left: 1px solid #bebaba;
    border-right: 1px solid #bebaba;
    border-bottom: 1px solid #bebaba;
    border-radius: 2px;
    gap: 5vh;
  }
  .Pagamento-Cartao {
    border-bottom: 1px solid #bebaba;
    height: 75%;
    padding-top: 2%;
    padding-left: 3%;
    padding-right: 3%;
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color: white;
    border-top: 1px solid #bebaba;
    border-left: 1px solid #bebaba;
    border-right: 1px solid #bebaba;
    border-radius: 2px;
    gap: 5vh;
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
/* Estilizando o select */
.formSelect {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    display: block;
    width: 100%;
    height: 34px;
    outline: none;
    padding: 6px 30px 6px 10px; /* Ajuste o padding para dar espaço à seta */
    font-size: 14px;
    background-color: #fff;
    background-image: none;
    border: none;
    border-bottom: 1px solid #5A9BE6;
    position: relative;
}

/* Estilizando a seta */
.formSelect::after {
    content: '\25BC'; /* Caractere Unicode para uma seta para baixo */
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #5A9BE6;
    pointer-events: none;
}

/* Estilo para realçar a borda inferior quando o select está focado */
.formSelect:focus {
    border-bottom-color: #007BFF; /* Ou a cor desejada */
}

#txtNumeroCartao{
    width:50%
}
#txtNomeCompleto{
    width:50%
}
#DtAnoVencimento{
    width:50%;
}
#codSeguranca{
    width:50%;
}
#txtValorTotal{
    width:50%;
}
#txtParcela{
    width:50%;
}
#txtValorFinal{
    width:50%;
}
#btnContinuar{
    width:50%;
    height:100%;
}

.Alinha-Campo {
    display: flex;
}
.text-span2{
    font-size: 12px;
    color: #807878;
}
</style>

<?php

$valorPagamento = $_POST['valorPagamento'];
$id_carrinho = $_POST['idCarrinho'];
$idUsuario = $_SESSION['id_user'];

switch ($valorPagamento) {
    case 'Cartao':

    $queryValores = "SELECT DISTINCT preco_total FROM tb_carrinho WHERE id_carrinho = '$id_carrinho' AND id_usuario = $idUsuario";
    $resultValores = mysqli_query($conexao, $queryValores);

    if ($resultValores) {
        while ($row = mysqli_fetch_assoc($resultValores)) {
            echo '<form id="frmPagamento" name="frmPagamento" method="POST"> 
            <div class="col-md-12 Col-pagamento2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="CardSvg" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                </svg>                        
                <div class="text-pagamento">
                    <span class="text-campo">Cartão de Crédito</span>
                    <p class="text-campo">Até 5x sem juros</p>
                </div>
            </div>
        <br>
        <div class="col-md-6 Pagamento-Cartao"> 
            <label for="txtNumeroCartao">Número do Cartão:</label>
                <input type="text" class="formInpt" name="txtNumeroCartao" id="txtNumeroCartao" placeholder="Número do Cartão" maxlength="19" oninput="maskCardNumber(this)">
            <label for="txtNomeCompleto">Nome Completo:</label>
                <input type="text" class="formInpt" name="txtNomeCompleto" id="txtNomeCompleto" placeholder="Nome Completo" maxlength="100" oninput="validateName(this)">
            <p class="text-span2">Assim como está impresso no cartão</p>
        
            <div class="Alinha-Campo">
                <div>
                    <label>Ano de vencímento:</label>
                        <input type="text" class="formInpt" name="DtAnoVencimento" id="DtAnoVencimento" maxlength="7" oninput="formatarData(this)" onchange="validarData()">
                </div>
                <div>
                    <label>Código de Segurança:</label>
                        <input type="text" class="formInpt" name="codSeguranca" id="codSeguranca" maxlength="3" oninput="aplicarMascara(this)">
                </div>
            </div>
            <div class="">
                <label for="txtValorTotal">Valor Total da Viagem:</label>
                    <input class="formInpt" name="txtValorTotal" id="txtValorTotal" value="'. $row['preco_total'] .'">
            </div>
            <div class="">
                <label for="txtParcela">Parcelar em:</label>
                    <input class="formInpt" name="txtParcela" id="txtParcela" value="" maxlength="2">
            </div>
            <div class="">
            <label for="txtValorFinal">Valor Final da Viagem:</label>
                <input class="formInpt" name="txtValorFinal" id="txtValorFinal" value="">
            </div>
            <br>
            <br>  
        </div>
        <br>
        <br>    
        <div class="col-md-12" align="end">
            <input type="button" class="btn btn-primary" name="btnContinuar" id="btnContinuar" value="Continuar" onclick="validarCampos()">
        </div>
    </form>';
        }
        mysqli_free_result($resultValores);
    } else {
        echo 'Erro na consulta: ' . mysqli_error($conexao);
        }
    break;
    default:
            echo '<p>HTML padrão ou erro</p>';
        }
    ?>

<script>

// Adiciona um ouvinte de eventos ao campo de parcelas
document.getElementById('txtParcela').addEventListener('input', function() {
    // Obtém os valores dos campos
    var valorViagem = parseFloat(document.getElementById('txtValorTotal').value);
    var numParcelas = parseInt(this.value);

    // Verifica se os valores são válidos
    if (!isNaN(valorViagem) && !isNaN(numParcelas) && numParcelas > 0 && numParcelas <= 10) {
        // Adiciona juros se a quantidade de parcelas for maior que 5
        var taxaJuros = numParcelas > 5 ? 0.05 : 0; // 5% de juros se maior que 5 parcelas, 0% caso contrário

        // Calcula o valor final considerando os juros
        var valorFinal = (valorViagem * (1 + taxaJuros)) / numParcelas;

        // Atualiza o valor no campo 'txtValorFinal'
        document.getElementById('txtValorFinal').value = valorFinal.toFixed(2);
    } else {
        // Se os valores não forem válidos, limpa o campo 'txtValorFinal'
        document.getElementById('txtValorFinal').value = '';

        // Se a quantidade de parcelas for maior que 10, exiba uma mensagem de erro
        if (numParcelas > 10) {
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'A quantidade de parcelas nao pode ser maior que 10.',
            });     
        }
    }
});

function validarCampos() {
    // Obtém os valores dos campos
    var numeroCartao = document.getElementById('txtNumeroCartao').value;
    var nomeCompleto = document.getElementById('txtNomeCompleto').value;
    var anoVencimento = document.getElementById('DtAnoVencimento').value;
    var codSeguranca = document.getElementById('codSeguranca').value;
    var numParcelas = document.getElementById('txtParcela').value;
    var valorTotalViagem = document.getElementById('txtValorTotal').value;
    var valorFinal = document.getElementById('txtValorFinal').value;
    var idCarrinho = "<?php echo $id_carrinho; ?>";
    var valorPagamento = "<?php echo $valorPagamento; ?>";

    // Verifica se todos os campos estão preenchidos
    if (!numeroCartao || !nomeCompleto || !anoVencimento || !codSeguranca || !numParcelas) {
        // Utiliza SweetAlert para exibir a mensagem de erro
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Para prosseguir, preencha todos os campos.',
        });
        return false; // Impede o envio do formulário
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso',
            text: 'Pagamento Efetuado com sucesso, Dados Enviados Ao Aplicativo!',
        }).then((result) => {
        if (result.isConfirmed) {
            var formdata = new FormData($("form[name='frmPagamento']")[0]);

            formdata.append('valorPagamento',"<?php echo $valorPagamento; ?>");
            formdata.append('idCarrinho',"<?php echo $id_carrinho; ?>");
            formdata.append('valorFinal',txtValorFinal);
            formdata.append('valorTotalViagem',valorTotalViagem);
            formdata.append('numParcelas',numParcelas);
            formdata.append('codSeguranca',codSeguranca);
            formdata.append('anoVencimento',anoVencimento);
            formdata.append('nomeCompleto',nomeCompleto);
            formdata.append('numeroCartao',numeroCartao);


            $.ajax({
                url: '../Ajax/AjaxEnviaPagamento.php',
                type: 'POST',
                data: formdata,
                processData: false, // Não processar os dados
                contentType: false, // Não definir tipo de conteúdo
                success: function (data) {
                    console.log(data);
                    $('#TipoPagamento').html(data);

                    // Redireciona para uma nova página
                     window.location.href = '../index.php';
                },
                error: function (error) {
                    console.error('Erro na solicitação Ajax:', error);
                }
            });

            }
        });
        return true;
        }
    }
</script>


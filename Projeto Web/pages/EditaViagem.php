<?php 
	session_start();
	include('conexao.php');
?>

<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                #ModalViagem{
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
          <h4 style="text-align: center;padding-top:5%"><translateMult>Buscar Viagem</translateMult></h4>
          <hr style=" border: none;border-top: 3px solid gray;">
            <form id="frmEditarViagem" name="frmEditarViagem" method="post" enctype="multipart/form-data">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <label for="txtDestino">Destino</label>
                      <input type="text" name="txtDestino" id="txtDestino" class="form-control input-sm" maxlength="20" style="height: 35px;" oninput="permitirSomenteLetras(event)">
                    </div>
                  <div class="col-md-4"></div>
              </div>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <label for="txtData">Data</label>
                    <input type="date" name="txtData" id="txtData" class="form-control input-sm" maxlength="20" style="height: 35px;">
                  </div>
                <div class="col-md-4"></div>
            </div>
           
              <br>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <button type="button" id="btnFiltra" name="btnFiltra" class="btn btn-secondary" style="width: 100%;background-color: #000000;">Filtrar</button>            
                </div>
                <div class="col-md-4"></div>
              </div>
              <br>
              <hr style=" border: none;border-top: 3px solid gray;">
              <br>
              <table id="TableViagem" style="text-align: center;" class="table table-responsive table-hover">
                <thead style="background-color:#000000;color:white; text-align: center;">
                  <tr style="vertical-align: middle; text-align:center;"> 
                    <th class="no-sort"><input type="checkbox" id="select-all" class="editaexcel" name="select-all" onclick="checkAll()"/></th>
                    <th style="text-align: center; color:#FFFFFF">Destino</th>
                    <th style="text-align: center; color:#FFFFFF">Data</th>
                    <th style="text-align: center; color:#FFFFFF">Editar</th>
                    <th style="text-align: center; color:#FFFFFF">Excluir</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <td style="text-align: center;"><input type="checkbox" id="ckbTable_body" name="ckbTable_body" value="" class=""></td>
                  <td style="cursor: pointer">Ubatuba</td>
                  <td style="cursor: pointer;">10/05/2023</td>
                  <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" id="olhoViagem" onclick="mostrarModal()" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                  </td>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" id="lixeira" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>                    
                    </td>
                </tr>
            </tbody>
          </table>
          <div class="modal" id="ModalViagem" tabindex="-1" role="dialog" aria-labelledby="DesejaExcluir" aria-hidden="true" style="padding-top: 150px; overflow-x: hidden;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#084d6e !important; padding-top:5%">
                      <h5 style="color: white;font-size:20px;padding-left: 38%;" class="modal-title" id="modalEditaViagem">Edita Viagem</h5>
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x close" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </div>
          
                    <div class="modal-body" style="max-height: 600px;overflow-y: auto;" >
                        <div class="row">
                            <div class="col-md-6">
                              <label for="txtDestinoEdit">Destino</label>
                              <input type="text" name="txtDestinoEdit" id="txtDestinoEdit" class="form-control input-sm" maxlength="20" style="height: 35px" oninput="permitirSomenteLetras(event)">
                            </div>
                            <div class="col-md-6">
                              <label for="txtDataEdit">Data</label>
                              <input type="date" name="txtDataEdit" id="txtDataEdit" class="form-control input-sm" maxlength="20" style="height: 35px;">
                            </div>
                        </div>                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary" style="background-color: #084d6e ;" onclick="validarCampos()">Atualizar</button>
                    </div>
                </div> 
            </div>
          </div>
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
  function mostrarModal() {
     var modal = document.getElementById("ModalViagem");
     modal.style.display = "block";
   }

  // Obtém a referência para o elemento span com a classe "close"
  var closeSpan = document.querySelector('.close');

  // Obtém a referência para o elemento modal
  var modal = document.getElementById('ModalViagem');

  // Adiciona o evento de clique ao elemento span
  closeSpan.addEventListener('click', function() {
      modal.style.display = 'none';
  });
</script>

<script>
function validarCampos() {
  // Obtém os valores dos campos
  var destino = document.getElementById('txtDestinoEdit').value;
  var data = document.getElementById('txtDataEdit').value;

  // Verifica se os campos estão vazios
  if (destino.trim() === '' || data.trim() === '') {
    // Exibe uma mensagem informando que os campos não foram preenchidos
    Swal.fire('Erro!', 'Por favor, preencha todos os campos.', 'error');
  } else {
    // Exibe uma mensagem informando que os campos foram atualizados com sucesso
    Swal.fire('Sucesso!', 'Campos atualizados com sucesso.', 'success');
    
    // Envia o formulário
    document.getElementById('frmEditarViagem').submit();
  }
}
</script>

<script>
  $(document).ready(function () {
  $('#TableViagem').dataTable({
      "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/pt_br.json"
      },
      "order": [[1, "desc"]] // Altera o número da coluna (0 no exemplo) para a coluna desejada
  });
  });
</script>

<script>
  function checkAll(){
    var selecao = $('#select-all').prop('checked');
    var check = document.querySelectorAll("input[type=checkbox]");
    for(let i = 1; i < check.length; i++){
      if(selecao == true){
        if (check[i].disabled) {
          check[i].checked = false;
        }
        else{
          check[i].checked = true;
        }
      }
      else{
        check[i].checked = false;
      }
    }
  }
</script>

<script>
  function ExcluiUser() {
    Swal.fire({
      title: 'Deseja excluir esta viagem?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Não',
      confirmButtonText: 'Sim'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Esta viagem foi deletado com sucesso.',
          'success'
        ).then(() => {
          document.getElementById("frmEditarViagem").submit();
        });
      }
    });
  }

  document.getElementById("lixeira").onclick = function() {
    ExcluiUser();
  };
</script>

     
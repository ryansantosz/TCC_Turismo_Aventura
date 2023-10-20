<div class="modal-content">
    <div class="modal-header" style="background-color:#084d6e !important; padding-top:5%">
        <h5 style="color: white;font-size:20px;padding-left: 38%;" class="modal-title" id="modalEditaUser">Edita Usuário</h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x close" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
    </div>

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
        // Nome da tabela
        $tableName = "usuarios";  // Substitua pelo nome da tabela desejada

        // Nome do campo que você deseja retornar
              // Substitua pelo nome do campo desejado

        $id = 1; // Substitua pelo ID do registro que você deseja recuperar
        $id_user = $_GET['id_user'];
        $sql = "SELECT nome, email, nu_perfil_usuario FROM $tableName WHERE id_user = $id_user"; // Altere a consulta conforme sua necessidade

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            $campoUsuario = $row['email'];
            $campoNome = $row['nome'];
            $email = $row['email'];
            $perfil = $row['nu_perfil_usuario'];
            
            // Fechar a conexão com o banco de dados
            $conn->close();
        } else {
            echo "Nenhum resultado encontrado.";
        }
        ?>

        <!-- Modal HTML com os campos preenchidos -->
        <div class="modal-body" style="max-height: 600px; overflow-y: auto;">
            <div class="row">
                <div class="col-md-6">
                    <label for="txtUserEdit">Usuário</label>
                    <input type="text" name="txtUserEdit" id="txtUserEdit" class="form-control input-sm" maxlength="20" style="height: 35px;"  value="<?php echo $campoUsuario; ?>">
                </div>
                <div class="col-md-6">
                    <label for="txtNomeEdit">Nome</label>
                    <input type="text" name="txtNomeEdit" id="txtNomeEdit" class="form-control input-sm" style="height: 35px;" value="<?php echo $campoNome; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="txtEmailEdit">Email</label>
                    <input type="text" name="txtEmailEdit" id="txtEmailEdit" class="form-control input-sm" maxlength="20" style="height: 35px;" onblur="verificarEmail()" value="<?php echo $email; ?>">
                </div>
                <div class="col-md-6">
                    <label for="txtPerfil">Tipo de Perfil</label>
                    <select name="nu_perfil_usuario" class="form-select" id="slcTipoPerfilEdit" name="slcTipoPerfilEdit">
                        <option value="">Selecione</option>
                        <option value="23" <?php if ($perfil == 23) echo "selected"; ?>>Administrador</option>
                        <option value="100" <?php if ($perfil == 100) echo "selected"; ?>>Cliente</option>
                    </select>
                </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" id="fechaMOdal" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" style="background-color: #084d6e ;" onclick="validarCampos('<?php echo $id_user; ?>')">Atualizar</button>
    </div>
</div> 
<script>
      $('.close').on('click', function() {
    var modal = $('#ModalUser');
      modal.hide();
  });

</script>
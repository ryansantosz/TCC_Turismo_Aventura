<html>
    <head></head>

    <body>
        <h1>Atualizar Registro</h1>
        <form method="post">
        <?php
            include 'conecta.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM aluno where id=\"$id\"";
            $exec = $pdo->query($sql);
            $regAtualiza = $exec->fetch();
        ?>
            <input type="text" id="nome" name="nome" value="<?php echo $regAtualiza["nome"] ?>" />
            <br/>
            <input type="email" id="email" name="email" value="<?php echo $regAtualiza["email"] ?>" />
            <br/>
            <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" />
            <br/>
            <input type="button" id="btn_atualizar" value="Atualizar" />
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
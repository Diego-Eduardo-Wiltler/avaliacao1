<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastre seu peixe</h2>
        <p>Favor inserir os dados.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome do seu peixe</label>
                <input type="text" name="nome" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Raça do peixe</label>
                <input type="text" name="raça" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Senha do Peixe</label>
                <input type="text" name="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark" value="Acessar">
                <a href="leitura.php" class="btn btn-primary enable" tabindex="1" role="button" aria-disabled="false">Ver dados</a>
                <a href="welcome.php" class="btn btn-primary enable" tabindex="1" role="button" aria-disabled="false">Voltar</a>

            </div>
        </form>
    </div>   

    
    <?php

    include('arquivos.php')

    ?>
    
</body>
</html>
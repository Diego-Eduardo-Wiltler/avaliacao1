<?php

$filename = "cadastroFunc.txt";
if(!file_exists($filename)){
    $handle = fopen($filename, "a");
} else {
    $handle = fopen($filename, "a");
    fwrite($handle,  "Digite o nome: " . $_POST['nome'] . PHP_EOL);
    fwrite($handle, "Digite a raça: " . $_POST['raça'] . PHP_EOL);
    fwrite($handle,  "Digite a senha: " .  $_POST['senha'] .PHP_EOL);
    fwrite($handle, "<br>");
    fwrite($handle, "<br>");
    fflush($handle);
    fclose($handle);
}

?>  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>


</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão acadêmica</title>
</head>
<body>
    <?php
    require './Pessoa.php';
    require './Estudante.php';
    
    $estudante = new Estudante(1);
    echo $estudante->disciplinasMatriculadas();
    ?>
    
    <br><hr>
    
    <?php
    $ira = $estudante->atualizaIRA(9);
    echo "Novo IRA {$ira} <br>";
    
    $ira = $estudante->atualizaIRA(5);
    echo "Novo IRA {$ira} <br>";
    ?>
    
    <br><hr>
    
    <?php
    $estudante->nome = 'Maria';
    $estudante->matricula = '2021020001';
    $dadosEstudante = $estudante->verEstudante();
    foreach ($dadosEstudante as $key => $value) {
        echo "{$key}: {$value} <br>";
    }
    ?>
    
    <br><hr>
    
    <?php
    $pessoa = new Pessoa(5);
    $pessoaDados = $pessoa->verDados();
    echo "Nome: {$pessoaDados->nome} <br>";
    echo "Telefone: {$pessoaDados->telefone} <br>";
    echo "Email: {$pessoaDados->email}";
    ?>
</body>
</html>
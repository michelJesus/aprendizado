<?php

$nome = trim($_POST['nome']);
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);

var_dump($interesses);

if (empty($nome)) {
    echo 'Informe o nome!<br>';
}

if (is_null($interesses)) {
    echo 'Seleciona pelo um item de interesse!<br>';
}

echo $mensagem;

/*trim($nome);
empty($nome) -> "", 0, null, false, array()*/
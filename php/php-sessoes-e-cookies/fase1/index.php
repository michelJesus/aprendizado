<?php

session_start();
//session_save_path(__DIR__.'\sessions');

/* $_SESSION['usuario'] = [
    'nome' => 'Erik',
    'idade' => 32,
    'ativo' => true,
    'rate' => 4.3
]; */

// unset($_SESSION['usuario']);

$_SESSION['usuario'] = 'asd';
$_SESSION['ultimo-acesso'] = '12-12-2012';
$_SESSION['id-user'] = 3;
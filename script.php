<?php
$nome = $_POST['nome'];
$anoServico = $_POST['anoservico'];

$categorias = [];
$categorias[] = 'desenvolvedor junior';
$categorias[] = 'desenvolvedor pleno';
$categorias[] = 'desenvolvedor senior';
$categorias[] = 'especialista';

var_dump($nome);
var_dump($anoServico);

if ($anoServico <= 1) {
    for($i = 0; i <= count($categorias); $i++) {
        if($categorias[$i] == 'desenvolvedor junior') {
            echo "O desenvolvedor ".$nome." é considerado um ".$categorias[$i];
        }
    }
}
<?php
error_reporting(0);
$nome = $_POST['nome'];
$anoServico = $_POST['anoservico'];
$categorias = [];
$categorias[] = 'junior';
$categorias[] = 'pleno';
$categorias[] = 'senior';
$categorias[] = 'especialista';

if ($anoServico == '1') {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'junior') {
            echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico == '2') {
        for ($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == "pleno") {
                echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico == '3') {
        for($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == 'senior') {
                echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico >= '4'){
        for($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == 'especialista') {
                echo "O desenvolvedor ".$nome." atingiu o ápice e é um ".$categorias[$i];
            }
        }
    }
    echo "<br/><a href='./index.php'>Voltar</a>"
?>
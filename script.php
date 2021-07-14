<?php
/*
O BLOCO DE CÓDIGO ABAIXO DESATIVA MEUS WARNINGS QUE FICAM APARECENDO,
*/

error_reporting(0);

/*
LOGO ABAIXO TEMOS O RECEBIMENTO DOS DADOS DO FORMULÁRIO NO VERBO HTTP
POST, QUE É COMO COLOCAMOS NO FORM METHOD="POST"
*/

$nome = $_POST['nome'];
$anoServico = $_POST['anoservico'];

/*
UM ARRAY $categorias FOI CRIADO PARA 4 TIPOS DE DADOS
*/

$categorias = [];
$categorias[] = 'junior';
$categorias[] = 'pleno';
$categorias[] = 'senior';
$categorias[] = 'especialista';

if ($anoServico == '1') {
    /* 
    A ESTRUTURA FOR SE INICIA EM 0 SE MANTÉM MENOR QUE O NÚMERO DE ITENS NO ARRAY
    E IMPRIME O VALOR SELECIONADO DE ACORDO COM A CONDICIONAL
    */
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'junior') {
            echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico == '2') {
    /* 
    A ESTRUTURA FOR SE INICIA EM 0 SE MANTÉM MENOR QUE O NÚMERO DE ITENS NO ARRAY
    E IMPRIME O VALOR SELECIONADO DE ACORDO COM A CONDICIONAL
    */
        for ($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == "pleno") {
                echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico == '3') {
    /* 
    A ESTRUTURA FOR SE INICIA EM 0 SE MANTÉM MENOR QUE O NÚMERO DE ITENS NO ARRAY
    E IMPRIME O VALOR SELECIONADO DE ACORDO COM A CONDICIONAL
    */
        for($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == 'senior') {
                echo "O desenvolvedor ".$nome." é considerado um desenvolvedor ".$categorias[$i];
            }
        }
    } else if ($anoServico >= '4'){
    /* 
    A ESTRUTURA FOR SE INICIA EM 0 SE MANTÉM MENOR QUE O NÚMERO DE ITENS NO ARRAY
    E IMPRIME O VALOR SELECIONADO DE ACORDO COM A CONDICIONAL
    */
        for($i = 0; $i <= count($categorias); $i++) {
            if($categorias[$i] == 'especialista') {
                echo "O desenvolvedor ".$nome." atingiu o ápice e é um ".$categorias[$i];
            }
        }
    }
    echo "<br/><a href='./index.php'>Voltar</a>"
?>
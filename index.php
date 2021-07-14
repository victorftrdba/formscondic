<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de inscrição</title>
    <script src="./valida.js"></script>
</head>
<body>
    <p>FORMULÁRIO DE INSCRIÇÃO DE PROFISSIONAIS DE TI</p>

<!-- 
    FORMULÁRIO COM ACTION JÁ 
    APONTANDO PARA O ARQUIVO
    script.php RECEBER

    EVENTO onClick APONTANDO
    PARA A FUNCTION valida()
    NO ARQUIVO valida.js
    PARA VERIFICAR SE HÁ OU NÃO
    DADOS PARA SEREM ENVIADOS
 -->

<form action="./script.php" method="POST" id="form">
    <p>Seu nome: <input type="text" name="nome" id="nome" required /></p>
    <p>Anos de serviço como desenvolvedor: <input  type="text" name="anoservico" id="anos" required /></p>
    <p><input type="submit" value="Enviar dados do profissional" id="anos" onClick="{valida()}" /></p>
</form>
</body>
</html>
<?php

require_once('conexao.php');

$parametros = $_POST;

if (isset($parametros['nome']) && isset($parametros['senha'])) {
    $nome_formulario = $parametros['nome'];
    $senha_formulario = $parametros['senha'];

    $conexao = new Conexao();

    $sql = "INSERT INTO public.usuario (nome, senha) VALUES ('$nome_formulario', '$senha_formulario');";

    $resultado = $conexao->executarConsulta($sql);

    if ($resultado) {
        echo "usuário cadastrado!";
    } else {
        echo "usuário não cadastrado";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>

    <style>
        button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            background-color: blue;
            color: white;
            margin-top: 10px;
        }

        button:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body>

    <button onclick="goBack()">Voltar</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
<button type="button" onclick="VoltarParaLogin()">Entre</button>
</body>

</html>
<script>
    function VoltarParaLogin() {
        window.location.href = "http://localhost/A3-SISTEMAS-DISTRIBUIDOS/";
    }
</script>
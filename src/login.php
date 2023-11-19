<?php

require_once('conexao.php');

$parametros = $_POST;

if (isset($parametros['nome']) && isset($parametros['senha'])) {
    $nome_formulario = $parametros['nome'];
    $senha_formulario = $parametros['senha'];

    $conexao = new Conexao();
    $sql = "SELECT * FROM public.usuario where nome = '{$nome_formulario}' and senha = '{$senha_formulario}'";
    $resultado = $conexao->executarConsulta($sql);

    if ($resultado->num_rows > 0) {

        echo "usuário logado!";
    } else {
        echo "usuário não encontrado";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
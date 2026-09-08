<?php

    function validarCadastro(string $nome, int $idade): array {
        $nomeLimpo = ucwords(strtolower(trim($nome)));
        $status = ($idade >= 18) 
            ? "[ ACESSO CONCEDIDO ] - Credencial Ativa" 
            : "[ RESTRITO ] - Aguardando Autorização do Guardião";
        
        return [
            'nome' => $nomeLimpo,
            'idade' => $idade,
            'status' => $status
        ];
    }

    $listaUsuarios = [];
    $enviado = false;

    if (isset($_POST['botaoCadastrar'])) {
        $enviado = true;

        $cadastros = [
            ['nome' => $_POST['Nome'], 'idade' => (int)$_POST['Idade']],
            ['nome' => 'Arlete de Lira ', 'idade' => 25],
            ['nome' => 'Looney Tunes ', 'idade' => 02]
        ];

        foreach ($cadastros as $pessoa) {
            $listaUsuarios[] = validarCadastro($pessoa['nome'], $pessoa['idade']);
        }
    }

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="card-formulario">
        <h2>Status do Processamento</h2>

        <?php if ($enviado && !empty($listaUsuarios)): ?>
  
            <?php foreach ($listaUsuarios as $usuario): ?>
                <div class="alert-box" style="margin-bottom: 12px;">
                    <strong>USUÁRIO CADASTRADO</strong><br><br>
                    <strong>Nome:</strong> <?php echo $usuario['nome']; ?><br>
                    <strong>Idade:</strong> <?php echo $usuario['idade']; ?> anos<br>
                    <strong>Status:</strong> <?php echo $usuario['status']; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert-box" style="background-color: #fed7d7; border-color: #feb2b2; color: #9b2c2c;">
                > FALHA NA CONEXÃO: Envie o formulário novamente.
            </div>
        <?php endif; ?>

        <br>
        <a href="cadastro.html" style="text-decoration: none;">
            <button class="botao-enviar">[ VOLTAR AO TERMINAL ]</button>
        </a>
    </div>

</body>
</html>
<?php
include 'includes/funcoesIdade.inc.php';

$mensagem = '';

$idade = $_POST['idade'];

if (!validarIdade($idade)) {
    $mensagem = 'Idade inválida. Informe uma idade entre 0 e 120 anos.';
} else {
    $mensagem = verificarAptidaVoto($idade);
}
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da verificação</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <?php if (!empty($mensagem)) : ?>
            <p class="message"><?= $mensagem; ?></p>
        <?php else : ?>
            <p class="message">Informe a idade para verificar se a pessoa pode votar.</p>
        <?php endif; ?>

        <p>
            <a class="link" href="index.html">Voltar ao formulário</a>
        </p>
    </main>
</body>

</html>

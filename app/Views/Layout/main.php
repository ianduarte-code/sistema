<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= esc($conteudo['Titulo'] ?? 'Meu Site') ?></title>
<link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
</head>
<body>
<header>
<?= $this->include('Layout/menu') ?>
</header>
<main class="container">
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success"><?= esc(session()->getFlashdata('message')) ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-error"><?= esc(session()->getFlashdata('error')) ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-error">
        <ul>
        <?php foreach ((array) session()->getFlashdata('errors') as $erro): ?>
            <li><?= esc($erro) ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<?= $this->renderSection('conteudo') ?>
</main>
</body>
</html>

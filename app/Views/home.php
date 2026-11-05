<?= $this->extend('Layout/main') ?>
<?= $this->section('conteudo') ?>
<h1><?= esc($conteudo['Titulo'] ?? 'Home') ?></h1>
<p><?= texto_conteudo($conteudo['Texto'] ?? null, 'Conteúdo não cadastrado no banco (Id 1).') ?></p>
<?= $this->endSection() ?>

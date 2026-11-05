<?= $this->extend('Layout/main') ?>
<?= $this->section('conteudo') ?>
<h1><?= esc($conteudo['Titulo'] ?? 'Produtos') ?></h1>
<p><?= texto_conteudo($conteudo['Texto'] ?? null, 'Conteúdo não cadastrado no banco (Id 4).') ?></p>
<?= $this->endSection() ?>

<?= $this->extend('Layout/main') ?>

<?= $this->section('conteudo') ?>
<h1>Novo usuário</h1>
<form method="post" action="<?= site_url('admin/usuarios') ?>" class="formulario">
    <?= csrf_field() ?>
    <label for="username">Usuário</label>
    <input type="text" id="username" name="username" value="<?= esc(old('username')) ?>" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" value="<?= esc(old('email')) ?>" required>

    <label for="password">Senha</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="btn">Cadastrar</button>
    <a class="btn btn-secondary" href="<?= site_url('admin/usuarios') ?>">Cancelar</a>
</form>
<?= $this->endSection() ?>

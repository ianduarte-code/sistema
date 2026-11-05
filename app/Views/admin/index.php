<?= $this->extend('Layout/main') ?>

<?= $this->section('conteudo') ?>
<h1>Painel administrativo</h1>
<p>
    Bem-vindo, <strong><?= esc(auth()->user()->username) ?></strong>.
    Esta área só é exibida para usuários autenticados com a permissão
    <code>admin.access</code>.
</p>
<ul class="admin-links">
    <li><a class="btn" href="<?= site_url('admin/usuarios') ?>">Gerenciar usuários</a></li>
    <li><a class="btn" href="<?= site_url('admin/usuarios/novo') ?>">Cadastrar usuário</a></li>
</ul>
<?= $this->endSection() ?>

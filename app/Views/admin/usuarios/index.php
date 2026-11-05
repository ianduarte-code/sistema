<?= $this->extend('Layout/main') ?>

<?= $this->section('conteudo') ?>
<h1>Usuários</h1>
<p><a class="btn" href="<?= site_url('admin/usuarios/novo') ?>">Novo usuário</a></p>
<table class="tabela">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>E-mail</th>
            <th>Grupos</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?= esc($u->id) ?></td>
            <td><?= esc($u->username) ?></td>
            <td><?= esc($u->email ?? '') ?></td>
            <td><?= esc(implode(', ', $u->getGroups())) ?></td>
        </tr>
    <?php endforeach; ?>
    <?php if ($users === []): ?>
        <tr><td colspan="4">Nenhum usuário cadastrado.</td></tr>
    <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>

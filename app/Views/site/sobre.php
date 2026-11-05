<?= $this->extend('Layout/main') ?>

<?= $this->section('conteudo') ?>
<h1>Sobre</h1>
<p>
    Esta página é pública e pode ser acessada por qualquer visitante, sem a necessidade de login.
    Ela demonstra que o filtro de sessão foi aplicado apenas às rotas da área administrativa.
</p>
<p>
    O sistema utiliza o CodeIgniter Shield para autenticação (login com e-mail e senha) e
    autorização (grupos e permissões). A área <strong>admin</strong> exige autenticação, e o
    cadastro de usuários exige a permissão <code>users.create</code>.
</p>
<p><a class="btn" href="<?= site_url('admin') ?>">Ir para o painel</a></p>
<?= $this->endSection() ?>

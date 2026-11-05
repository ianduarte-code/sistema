<?php $usuario = auth()->user(); ?>
<nav class="navbar">
<a href="<?= site_url('home') ?>" class="nav-link <?= in_array(uri_string(), ['', 'home'], true) ? 'active' : '' ?>">Home</a>
<a href="<?= site_url('quemsou') ?>" class="nav-link <?= url_is('quemsou') ? 'active' : '' ?>">Quem sou</a>
<a href="<?= site_url('produtos') ?>" class="nav-link <?= url_is('produtos') ? 'active' : '' ?>">Produtos</a>
<a href="<?= site_url('contato') ?>" class="nav-link <?= url_is('contato') ? 'active' : '' ?>">Contato</a>
<a href="<?= site_url('sobre') ?>" class="nav-link <?= url_is('sobre') ? 'active' : '' ?>">Sobre</a>
<?php if ($usuario !== null): ?>
    <?php if ($usuario->inGroup('admin')): ?>
        <a href="<?= site_url('admin') ?>" class="nav-link <?= str_starts_with(uri_string(), 'admin') ? 'active' : '' ?>">Painel</a>
    <?php endif; ?>
    <a href="<?= site_url('logout') ?>" class="nav-link">Sair (<?= esc($usuario->username) ?>)</a>
<?php else: ?>
    <a href="<?= site_url('login') ?>" class="nav-link <?= url_is('login') ? 'active' : '' ?>">Entrar</a>
<?php endif; ?>
</nav>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Projetos - Lar da Menina</title>
</head>

<body>
    <div class="logo-container">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2024/04/nova-logo-lar-da-menina.png" class="logo-img">
    </div>
    <nav>
        <ul>
            <li class="<?php echo isActivePage('home'); ?>"><a href="{{ route('home') }}">O Lar</a></li>
            <li class="<?php echo isActivePage('projetos'); ?>"><a href="{{ route('projetos') }}">Projetos</a></li>
            <li class="<?php echo isActivePage('noticias'); ?>"><a href="{{ route('noticias') }}">Notícias</a></li>
            <li class="<?php echo isActivePage('voluntarios'); ?>"><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
            <li class="<?php echo isActivePage('parcerias'); ?>"><a href="{{ route('parcerias') }}">Parcerias</a></li>
            <li class="<?php echo isActivePage('contatos'); ?>"><a href="{{ route('contatos') }}">Contatos</a></li>
        </ul>
    </nav>
    <div class="projects-section">
        <h2>Conheça alguns projetos que realizamos</h2>
        <p>Projetos importantes para a comunidade</p>

        <div class="project-item">
            <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/01/projeto-01.jpg" alt="Projeto">
            <h3>Doação</h3>
            <p>A sua doação é muito importante para nós mantermos a qualidade dos nossos serviços a todos que acolhemos. Entre em contato e saiba como ajudar.</p>
        </div>
    </div>
    <footer>
        © 2023 Lar das Meninas
    </footer>
</body>

</html>

<?php
function isActivePage($routeName)
{
    $currentRoute = $_SERVER['REQUEST_URI'];

    if (strpos($currentRoute, $routeName) !== false) {
        return 'active';
    } else {
        return '';
    }
}
?>
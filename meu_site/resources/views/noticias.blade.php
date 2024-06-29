<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Noticias - Lar da Menina</title>
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
    <div class="news-section">
        <h2>Confira as últimas notícias</h2>
        <p>Notícias recentes sobre nossos projetos e atividades</p>

        <div class="news-item">
            <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/01/post-01.jpg" alt="Notícia">
            <h3>Gratidão</h3>
            <p>O Lar da Menina agradece a todos aqueles que colaboraram conosco, com parcerias, donativos, bens alimentares ou de outra espécie, ou ainda com o valor do seu voluntariado.</p>
        </div>
        <div class="news-item">
            <img src="https://rwtv.com.br/wp-content/uploads/2024/06/Imagem-do-WhatsApp-de-2024-06-06-as-11.01.01_f389cc7d.jpg" alt="Notícia">
            <h3>Santa Catarina Clube e Instituto Lar da Menina</h3>
            <p>O Santa Catarina Clube e o Instituto Lar da Menina formalizaram nesta semana uma ação para que crianças e adolescentes possam acompanhar a partida de domingo (9), diante do Guarani de Palhoça, pelo Catarinense da Série B, no Alfredão.</p>
            <br>
            <a href="https://rwtv.com.br/santa-catarina-clube-e-instituto-lar-da-menina-realizam-acao-no-domingo/" target="_blank">Leia mais</a>

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
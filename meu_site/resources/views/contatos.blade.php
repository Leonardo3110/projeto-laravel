<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Contatos - Lar da Menina</title>
</head>

<body>
    <div class="logo-container">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2024/04/nova-logo-lar-da-menina.png" class="logo-img" alt="Logo Lar da Menina">
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

    <div class="contact-info">
        <div class="contact-details">
            <h2>Contato</h2>
            <ul>
                <li><strong>Endereço:</strong> Rua Exemplo, 1234</li>
                <li><strong>Cidade:</strong> Cidade Exemplo</li>
                <li><strong>Telefone:</strong> (11) 1234-5678</li>
                <li><strong>E-mail:</strong> contato@lardamenina.org.br</li>
                <li><strong>Fixo:</strong> +55 (47) 3525-0459</li>
                <li><strong>WhatsApp:</strong> +55 (47) 3525-0459</li>
                <li><strong>E-mail Administrativo:</strong> adm@lardamenina.org.br</li>
            </ul>
        </div>
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_contato.jpg" alt="Imagem do local">
    </div>

    <div class="google-maps">
        <h2>Localização</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.458215207016!2d-49.39170218489256!3d-27.20963518297321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dfc0bbd7dddf0f%3A0x2120a00d0ba1b9f1!2sR.%20Jo%C3%A3o%20Ledra%2C%202027%20-%20Tabo%C3%A3o%2C%20Rio%20do%20Sul%20-%20SC%2C%2089160-000!5e0!3m2!1spt-BR!2sbr!4v1624897758945!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
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
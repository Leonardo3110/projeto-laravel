<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Parcerias - Lar da Menina</title>
</head>

<body>
    <div class="logo-container">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2024/04/nova-logo-lar-da-menina.png" class="logo-img" alt="Logo Lar da Menina">
    </div>
    <nav>
        <ul>
            <li class="{{ isActivePage('home') }}"><a href="{{ route('home') }}">O Lar</a></li>
            <li class="{{ isActivePage('projetos') }}"><a href="{{ route('projetos') }}">Projetos</a></li>
            <li class="{{ isActivePage('noticias') }}"><a href="{{ route('noticias') }}">Notícias</a></li>
            <li class="{{ isActivePage('voluntarios') }}"><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
            <li class="{{ isActivePage('parcerias') }}"><a href="{{ route('parcerias') }}">Parcerias</a></li>
            <li class="{{ isActivePage('contatos') }}"><a href="{{ route('contatos') }}">Contatos</a></li>
        </ul>
    </nav>

    <div class="main-section">
        <h2>Principais Parcerias</h2>
        <div class="partners-container">
            <div class="partner-box">
                <h3>Parceiro 1</h3>
            </div>
            <div class="partner-box">
                <h3>Parceiro 2</h3>
            </div>
            <div class="partner-box">
                <h3>Parceiro 3</h3>
            </div>
        </div>
    </div>

    <div class="register-section">
        <h2>Ainda não é nosso parceiro?</h2>
        <p>Realize seu cadastro e faça uma doação para apoiar nossa causa.</p>
        <form action="{{ route('salvar-parceria') }}" method="POST" class="partner-form">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone"><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <footer>
        © 2023 Lar das Meninas
    </footer>

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
</body>

</html>
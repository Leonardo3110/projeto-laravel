<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Seja um Voluntário - Lar da Menina</title>
    <!-- Incluir a biblioteca inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.5/inputmask.min.js"></script>
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

    <div class="volunteer-form">
        <form id="volunteerForm" method="post" action="{{ route('voluntarios.store') }}">
            @csrf
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone"><br><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco"><br><br>

            <label for="cidade">Cidade:</label><br>
            <input type="text" id="cidade" name="cidade"><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensagem">Como você pode nos ajudar?</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <footer>
        © 2023 Lar das Meninas
    </footer>

    <script>
        // Aplicar máscara no campo de telefone
        var telefoneInput = document.getElementById('telefone');
        inputmask({
            mask: '(99) 9999-9999[9]'
        }).mask(telefoneInput);

        document.addEventListener('DOMContentLoaded', function () {
            var successMessage = {!! json_encode(session('success')) !!};
            var errorMessage = {!! json_encode(session('error')) !!};
            var validationErrors = {!! json_encode($errors->all()) !!};

            if (successMessage) {
                alert(successMessage);
            }

            if (errorMessage) {
                alert(errorMessage);
            }

            if (validationErrors.length > 0) {
                validationErrors.forEach(function (error) {
                    alert(error);
                });
            }
        });
    </script>

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

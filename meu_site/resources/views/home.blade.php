<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lar da Menina - Rio do Sul - SC</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="logo-container">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2024/04/nova-logo-lar-da-menina.png" class="logo-img">
    </div>
    <nav>
        <ul>
            <li class="<?php echo isActivePage('home'); ?>"><a href="{{ route('home') }}">Home</a></li>
            <li class="<?php echo isActivePage('projetos'); ?>"><a href="{{ route('projetos') }}">Projetos</a></li>
            <li class="<?php echo isActivePage('noticias'); ?>"><a href="{{ route('noticias') }}">Notícias</a></li>
            <li class="<?php echo isActivePage('voluntarios'); ?>"><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
            <li class="<?php echo isActivePage('doacoes'); ?>"><a href="{{ route('doacoes') }}">Doações</a></li>
            <li class="<?php echo isActivePage('contatos'); ?>"><a href="{{ route('contatos') }}">Contatos</a></li>
        </ul>
    </nav>

    <div class="image-section">
        <?php
        $imageUrls = [
            "https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider1.jpg",
            "https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider2.jpg",
            "https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider3.jpg"
        ];

        foreach ($imageUrls as $index => $imageUrl) {
            $class = ($index === 0) ? 'main-image' : 'image-slide hidden-image';
            echo '<img src="' . $imageUrl . '" class="' . $class . '" alt="Slide ' . ($index + 1) . '">';
        }
        ?>
        <p class="intro-text">
            Desde 1954 prestando serviço de acolhimento institucional para crianças e adolescentes.
        </p>
    </div>
    <br>
    <div class="intro-section">
        <div class="historia">
            <h2>Nossa História</h2>
            <p>
                Em meados de 1940, a Sra. Lindomar Fornerolli percebeu a necessidade de criar e implantar em nossa cidade um orfanato, visto que na época aconteciam festividades frequentes à beira do Rio Itajaí onde ali compareciam senhoras e senhores da sociedade rio-sulense, com o intuito de diversão e contato social sendo que nestas ocasiões o número de crianças pedindo comida era significante em relação a população da época. Com isto, a Sra. Lindomar Fornerolli começou a questionar-se da importância de um lugar para estas crianças serem atendidas.
            </p>
            <p>
                Tal ideia já vinha sendo amadurecida pelo Sr. Willy Schleumer. Quando aportou no Brasil com seu pai, vindo da Alemanha, perceberam que havia uma quantidade considerável de crianças abandonadas pedindo comida pelas ruas. O pai de Willy Schleumer pediu ao filho para que conseguisse melhorar sua condição financeira e assim fundasse uma casa onde as crianças desamparadas pudessem ser atendidas.
            </p>
            <p>
                O tempo foi passando, contatos foram feitos até o encontro da Sra. Lindomar Fornerolli com o Sr. Willy Schleumer, os dois possuidores de uma mesma visão e ideia dispondo-se em parceria neste trabalho de benfeitoria social à nossa cidade, e às exigências de nossas crianças na época. Assim o Sr. Willy fez a doação do terreno onde hoje se encontra a sede da instituição, enquanto a Sra. Lindomar se dispôs em buscar recursos para tal obra. Esta parceria resultou no que conhecemos em nossos dias como o Clube das Mães – Lar da Menina da cidade de Rio do Sul.
            </p>
            <p>
                O nome inicial da Instituição era “Lar da Menina Desamparada”, acolhendo em regime de internato apenas meninas que eram órfãs ou abandonadas na sociedade rio-sulense. As atividades do então orfanato tiveram início no dia 12 de abril de 1965, porém a fundação foi em 27 de novembro de 1954.
            </p>
        </div>
        <div class="quem-somos">
            <h2>Quem Somos</h2>
            <p>
                O Lar da Menina de Rio do Sul é uma entidade que atende Crianças e Adolescentes de 0 a 18 anos incompletos de ambos os sexos em situação de risco social e pessoal que tiveram seus direitos violados e que necessitam do acolhimento institucional, segundo determinação do Juizado da Infância e Juventude.
            </p>
        </div>

    </div>
    <br>
    <footer>
        © 2023 Lar das Meninas
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.image-section img');
            let currentImageIndex = 0;

            function changeImage() {
                images[currentImageIndex].classList.add('hidden-image');
                currentImageIndex = (currentImageIndex + 1) % images.length;
                images[currentImageIndex].classList.remove('hidden-image');
            }
            images[currentImageIndex].classList.remove('hidden-image');
            setInterval(changeImage, 5000);
        });
    </script>

</body>

</html>

<?php
function isActivePage($routeName)
{
    $currentRoute = $_SERVER['REQUEST_URI'];

    if ($routeName === 'home' && $currentRoute === '/') {
        return 'active';
    }

    if (strpos($currentRoute, $routeName) !== false) {
        return 'active';
    } else {
        return '';
    }
}
?>
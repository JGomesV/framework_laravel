<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html {
            min-height: 100%;
            position: relative;
        }

        body {
            margin: 0;
            padding-bottom: 6rem; 
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto py-4 px-8 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src= "{{ asset('./img/images.png') }}" alt="Logo" class="h-8">
                <span class="text-xl font-bold ml-2">Etec</span>
            </div>
            <!-- Menu -->
            <nav class="space-x-4">
                <a href="{{ route('site.home') }}" class="text-gray-800 hover:text-blue-500">Principal</a>
                <a href="{{ route('site.contact') }}" class="text-gray-800 hover:text-blue-500">Contato</a>
                <a href="{{ route('site.news') }}" class="text-gray-800 hover:text-blue-500">Notícias</a>
            </nav>
        </div>
    </header>


    <div class="container mx-auto mt-8">

    <img src="{{ asset('./img/img.png') }}" alt="Descrição da Imagem" class="mx-auto w-2/4">

    <p class="mt-4 text-center">Implantada no ano de 2008, na Avenida Águia de Haia, localizada na Zona Leste da cidade de São Paulo, a ETEC Zona Leste, atualmente se destaca como um ponto de referência em educação e infraestrutura. Sua história, desde o início, contou com o apoio e o compromisso da comunidade que a permeia.

Inicialmente abandonado, o espaço que hoje comporta as respectivas instituições de ensino ETEC e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao receber a informação, logo prontificou-se a ir contra a ideia. Como moradores das redondezas, sentiam a necessidade da implantação de um ambiente voltado à educação, pela valorização do local e, conclusivamente pela possibilidade de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado. Abaixo-assinados percorreram as proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas as duas instituições pertencentes ao Centro Paula Souza.

Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, nossa escola oferece uma variedade de cursos técnicos, proporcionando aos alunos uma formação sólida e atualizada.</p>
</div>
<br>
<br>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Site Estudantil. Todos os direitos reservados.</p>
        </div>
    </footer>

    
</body>
</html>

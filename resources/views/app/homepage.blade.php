<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Estudantil</title>
    <!-- Inclua os links para o Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <header class="bg-white shadow">
        <div class="container mx-auto py-4 px-8 flex justify-between items-center">
            
            <div class="flex items-center">
                <img src= "{{ asset('./img/images.png') }}" alt="Logo" class="h-8">
                <span class="text-xl font-bold ml-2">Etec</span>
            </div>
        
            <nav class="space-x-4">
                <a href="{{ route('site.aboutus') }}" class="text-gray-800 hover:text-blue-500">Sobre nós</a>
                <a href="{{ route('site.contact') }}" class="text-gray-800 hover:text-blue-500">Contato</a>
                <a href="{{ route('site.news') }}" class="text-gray-800 hover:text-blue-500">Notícias</a>
            </nav>
        </div>
    </header>

    <div class="bg-gray-150 flex items-center justify-center py-16">
    <img src="{{ asset('./img/fachada.png') }}" alt="Imagem Centralizada" class="max-w-full mx-auto">
    </div>

    
    <div class="container mx-auto mt-8 flex flex-col">
    <div class="flex items-center mb-8">
        <img src="{{ asset('./img/etec.png') }}" alt="Descrição da Imagem" class="w-1/2">  
        <div class="w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-4">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h2>
        <p class="mb-4">Entendemos que pensar adiante pode gerar inquietação. Constantemente elaboramos planos e trajetórias profissionais, buscando o melhor rumo. Mas na ETEC Zona Leste, compreendemos seus anseios e oferecemos um novo horizonte! O futuro não precisa causar apreensão. Aqui, suas habilidades técnicas e profissionais são aprimoradas enquanto você aprende conosco. Valorizamos cada progresso, cada etapa conquistada. Dê o primeiro passo hoje rumo ao seu futuro. Junte-se à ETEC e embarque nessa jornada de crescimento e realização!</p>
        </div>
    </div>

<br>
<br>
    <div class="flex items-center mb-8">  
        <img src="{{ asset('./img/entrada.png') }}" alt="etec_img" class="w-1/2">
        <div class="w-1/2 px-4">
            <h2 class="text-2xl font-bold mb-4">Excelência Educacional</h2>
            <p class="mb-4">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
        </div>
    </div>

    
</div>
<br>
<br>

 
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Site Estudantil. Todos os direitos reservados.</p>
        </div>
    </footer>

    
</body>
</html>

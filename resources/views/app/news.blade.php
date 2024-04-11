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
                <a href="{{ route('site.home') }}" class="text-gray-800 hover:text-blue-500">Principal</a>
            </nav>
        </div>
    </header>

    <div class="bg-gray-150 flex items-center justify-center py-16">
    <img src="{{ asset('./img/fachada.png') }}" alt="Imagem Centralizada" class="max-w-full mx-auto">
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

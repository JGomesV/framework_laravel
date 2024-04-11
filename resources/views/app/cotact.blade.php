<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
    <div class="flex items-center">
                    <svg class="flex-shrink-0 w-7 h-7 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993"
                            y2="40.615" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2aa4f4" />
                            <stop offset="1" stop-color="#007ad9" />
                        </linearGradient>
                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)"
                            d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z" />
                        <path fill="#fff"
                            d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z" />
                    </svg>
                    <h3 class="text-lg font-medium">Facebook</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Acompanhe a gente no Facebook para ficar por dentro de todas as postagens que fazemos
                    constantemente.
                </div>
                <div class="flex">
                    <a href='https://www.facebook.com/Eteczonalesteoficial' target="blank">
                        <button type="button"
                            class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            Ver mais
                        </button>
                </div>

            </div>
            <div class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                role="alert">
                <div class="flex items-center">

                    <svg class="flex-shrink-0 w-7 h-7 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#FF3D00"
                            d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z" />
                        <path fill="#FFF" d="M20 31L20 17 32 24z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">Yotube</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Acompanhe a gente no Youtube para ter acesso a nossos vídeos que cobrem todos os eventos que
                    acontece na Etec Zona Leste.
                </div>
                <div class="flex">
                    <a href='https://www.youtube.com/@etecdazonaleste2949' target="blank">
                        <button type="button"
                            class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            Ver mais
                        </button>
</div>
</div>

<br>
<br> 
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Site Estudantil. Todos os direitos reservados.</p>
        </div>
    </footer>

    
</body>
</html>

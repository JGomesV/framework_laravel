<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span></span>
            </div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-blue-200 border-blue-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden" id="nav-content">
                <div class="text-sm lg:flex-grow">
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white mr-4">
                        Home
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white mr-4">
                        About
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white">
                        Contact
                    </a>
                </div>
            </div>
        </nav>
        <div class="mt-10">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">Welcome to My Website</h1>
            <div class="flex justify-center">
                <p class="text-lg text-gray-600">This is a simple example of using PHP with Tailwind CSS to create a home page.</p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function () {
            var navContent = document.getElementById('nav-content');
            navContent.classList.toggle('hidden');
        });
    </script>
</body>
</html>
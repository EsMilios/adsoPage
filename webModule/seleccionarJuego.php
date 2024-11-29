<?php include_once '../assets/navbarParaModulos.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Game Web Module</title>
</head>

<div class="w-full text-gray-700 bg-gray-100">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="../webModule.php" class="bg-blue-600 text-white px-4 py-2 rounded focus:outline-none hover:bg-green-700">
                Back to Web Module
            </a>
        </div>
    </div>
</div>


<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <!-- Título principal -->
        <h1 class="text-4xl font-bold text-gray-800 mb-10">
            Select a Web Module Game 
        </h1>

        <!-- Contenedor de los botones de juegos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Primer botón (Juego 1) -->
            <a href="game1.html" class="flex items-center justify-between bg-red-500 hover:bg-red-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                    <span>Game 1</span>
                </div>
            </a>

            <!-- Segundo botón (Juego 2) -->
            <a href="game2.html" class="flex items-center justify-between bg-yellow-500 hover:bg-yellow-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span>Game 2</span>
                </div>
            </a>

            <!-- Tercer botón (Juego 3) -->
            <a href="game3.html" class="flex items-center justify-between bg-green-500 hover:bg-green-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-8 4 8m-8 0h8" />
                        </svg>
                    </div>
                    <span>Game 3</span>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include_once '../assets/footer.php'; ?>

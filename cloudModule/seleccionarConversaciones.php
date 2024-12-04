<?php include_once '../assets/navbarParaModulos.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Conversation</title>
</head>

<div class="w-full text-gray-700 bg-gray-100">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="../cloudModule.php" class="bg-blue-600 text-white px-4 py-2 rounded focus:outline-none hover:bg-green-700">
                Back to Cloud Module
            </a>
        </div>
    </div>
</div>

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <!-- Título principal -->
        <h1 class="text-4xl font-bold text-gray-800 mb-10">
            Select a Cloud Module Conversation!
        </h1>

        <!-- Contenedor de los botones de selección -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Primer enlace (botón) -->
            <a href="conversacion1.php" class="flex items-center justify-between bg-blue-500 hover:bg-blue-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4v4H3zM17 10h4v4h-4zM10 3h4v4h-4zM10 17h4v4h-4z" />
                        </svg>
                    </div>
                    <span>Choosing a Cloud Provider</span>
                </div>
            </a>

            <!-- Segundo enlace (botón) -->
            <a href="conversacion2.php" class="flex items-center justify-between bg-green-500 hover:bg-green-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4v4H3zM17 10h4v4h-4zM10 3h4v4h-4zM10 17h4v4h-4z" />
                        </svg>
                    </div>
                    <span>Deploying with Modern Tools</span>
                </div>
            </a>

            <!-- Tercer enlace (botón) -->
            <a href="conversacion3.php" class="flex items-center justify-between bg-purple-500 hover:bg-purple-600 text-white text-2xl p-8 rounded-lg shadow-lg transform transition-transform hover:scale-105 w-80 mx-auto">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-4 rounded-full">
                        <svg class="w-12 h-12 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4v4H3zM17 10h4v4h-4zM10 3h4v4h-4zM10 17h4v4h-4z" />
                        </svg>
                    </div>
                    <span>Understanding Cloud Services</span>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include_once '../assets/footerParaModulos.php'; ?>

<?php include_once 'assets/navbar.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>

<div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-6">
    <!-- Contenedor principal -->
    <div class="bg-white shadow-lg rounded-lg w-full max-w-lg p-8">
        <!-- Título -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">
            Contact Me
        </h1>

        <!-- Información personal -->
        <div class="space-y-4 text-center">
            <!-- Nombre -->
            <div>
                <h2 class="text-xl font-semibold text-blue-600">Name:</h2>
                <p class="text-gray-700">Emiliano Calderón</p>
            </div>

            <!-- Correo -->
            <div>
                <h2 class="text-xl font-semibold text-blue-600">Email:</h2>
                <a href="mailto:emilianoalejandrocalderon@gmail.com" class="text-gray-700 hover:text-blue-500">
                emilianoalejandrocalderon@gmail.com
                </a>
            </div>

            <!-- GitHub -->
            <div>
                <h2 class="text-xl font-semibold text-blue-600">GitHub:</h2>
                <a href="https://github.com/EsMilios" target="_blank" class="text-gray-700 hover:text-blue-500">
                    github.com/EsMIlios
                </a>
            </div>
        </div>

        <!-- Imagen decorativa -->
        <div class="mt-6 flex justify-center">
            <img src="https://avatars.githubusercontent.com/u/149895406?s=96&v=4" alt="Contact illustration" class="w-40 h-40 rounded-full shadow-md">
        </div>
    </div>
</div>

<?php include_once 'assets/footer.php'; ?>

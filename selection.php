<?php include_once 'assets/navbar.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select a Module</title>
</head>

<div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 p-4">
  <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 text-center">Choose Your Module</h1>
  <div class="flex flex-wrap justify-center gap-8 w-full max-w-6xl">
    <!-- Web Development Module -->
    <div class="w-full md:w-96 bg-blue-500 rounded-lg shadow-lg flex flex-col items-center p-8 md:p-10 hover:shadow-xl hover:scale-105 transition transform duration-300">
      <h2 class="text-2xl font-bold text-white mb-4 text-center">Web Development</h2>
      <p class="text-white text-center mb-6">
        Explore vocabulary, conversations, and interactive games focused on web development concepts.
      </p>
      <div class="flex flex-col w-full gap-4">
        <a href="webModule.php" class="text-center bg-white text-blue-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Home</a>
        <a href="webModule/vocabulario.php" class="text-center bg-white text-blue-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Vocabulary</a>
        <a href="webModule/seleccionarConversaciones.php" class="text-center bg-white text-blue-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Conversations</a>
        <a href="webModule/seleccionarJuego.php" class="text-center bg-white text-blue-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Games</a>
      </div>
    </div>

    <!-- Cloud Computing Module -->
    <div class="w-full md:w-96 bg-green-500 rounded-lg shadow-lg flex flex-col items-center p-8 md:p-10 hover:shadow-xl hover:scale-105 transition transform duration-300">
      <h2 class="text-2xl font-bold text-white mb-4 text-center">Cloud Computing</h2>
      <p class="text-white text-center mb-6">
        Dive into cloud computing with tailored vocabulary, conversations, and fun games.
      </p>
      <div class="flex flex-col w-full gap-4">
        <a href="cloudModule.php" class="text-center bg-white text-green-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Home</a>
        <a href="cloudModule/vocabulario.php" class="text-center bg-white text-green-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Vocabulary</a>
        <a href="cloudModule/seleccionarConversacion.php" class="text-center bg-white text-green-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Conversations</a>
        <a href="cloudModule/seleccionarJuego.php" class="text-center bg-white text-green-500 py-2 px-4 rounded-lg font-medium hover:bg-gray-200">Games</a>
      </div>
    </div>
  </div>
</div>
<?php include_once 'assets/footer.php'; ?>

<?php include_once 'assets/navbar.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Module</title>
</head>

<div class="min-h-screen bg-gray-100 py-16">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
    <!-- Section Header -->
    <div class="bg-blue-500 text-white py-10 px-6 rounded-lg shadow-lg">
      <div class="text-center">
        <h1 class="text-4xl font-extrabold sm:text-5xl">Welcome to Web Development</h1>
        <p class="mt-4 text-lg sm:text-xl">
          Enhance your skills with interactive vocabulary, conversations, and engaging games. 
          Dive into the world of HTML, CSS, JavaScript, and much more!
        </p>
      </div>
    </div>

    <!-- Content Section -->
    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center mt-12">
      <!-- Image Section -->
      <div class="w-full lg:w-1/2 mb-8 lg:mb-0 lg:pr-8">
        <img 
          src="https://www.bundlen.com/wp-content/uploads/2023/03/637ef1f502c0f83324cbf1ad_ABM-College-Web-developer-main.jpg" 
          alt="Web Development Illustration" 
          class="rounded-lg shadow-lg mx-auto"
        />
      </div>

      <!-- Description Section -->
      <div class="w-full lg:w-1/2">
        <h2 class="text-2xl font-bold text-gray-800">Why Learn Web Development?</h2>
        <p class="mt-4 text-gray-600">
          Web development is an essential skill in the digital age. Master the art of creating interactive, responsive websites with key technologies like HTML, CSS, JavaScript, and frameworks.
        </p>
      </div>
    </div>

    <!-- Buttons Section -->
    <div class="mt-16">
    <h3 class="text-center text-2xl font-semibold text-gray-800 mb-8">Explore the Module</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <!-- Vocabulary Button -->
        <a 
          href="webModule/vocabulario.php" 
          class="flex flex-col items-center justify-center w-40 h-48 text-center bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transform hover:scale-105 transition">
          <img 
            src="https://cdn-icons-png.flaticon.com/512/3448/3448471.png" 
            alt="Vocabulary Icon" 
            class="w-16 h-16 mb-4"
          />
          <span class="text-lg font-semibold text-blue-500">Vocabulary</span>
        </a>

        <!-- Conversations Button -->
        <a 
          href="webModule/seleccionarConversaciones.php" 
          class="flex flex-col items-center justify-center w-40 h-48 text-center bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transform hover:scale-105 transition">
          <img 
            src="https://cdn-icons-png.flaticon.com/512/3448/3448491.png" 
            alt="Conversations Icon" 
            class="w-16 h-16 mb-4"
          />
          <span class="text-lg font-semibold text-blue-500">Conversations</span>
        </a>

        <!-- Games Button -->
        <a 
          href="webModule/seleccionarJuego.php" 
          class="flex flex-col items-center justify-center w-40 h-48 text-center bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transform hover:scale-105 transition">
          <img 
            src="https://cdn-icons-png.flaticon.com/512/3448/3448506.png" 
            alt="Games Icon" 
            class="w-16 h-16 mb-4"
          />
          <span class="text-lg font-semibold text-blue-500">Games</span>
        </a>
    </div>
</div>

  </div>
</div>


<?php include_once 'assets/footer.php'; ?>

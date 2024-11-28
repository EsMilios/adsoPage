<?php include_once 'assets/navbar.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADSO Page</title>
</head>

<div class="bg-gray-100 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:flex lg:items-center lg:justify-between">
      <!-- Text Content -->
      <div class="max-w-2xl">
        <h1 class="text-4xl font-bold text-gray-800 sm:text-5xl lg:text-6xl">
          ¡Welcome to  <span class="text-blue-500">ADSO!</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            Welcome to this page dedicated to vocabulary of Software Analysis and Development (ADSO). 
        </p>
        <a 
          href="selection.php" 
          class="mt-6 inline-block px-6 py-3 text-white bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md transition-all"
        >
          Lets Start
        </a>
      </div>
      <!-- Image -->
      <div class="mt-10 lg:mt-0 lg:ml-10">
        <img 
          src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29kaW5nfGVufDB8fDB8fHww" 
          alt="Software Development" 
          class="w-full rounded-lg shadow-md"
        />
      </div>
    </div>
  </div>
</div>

<div class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
        Learn Interactively
      </h2>
      <p class="mt-4 text-lg text-gray-600">
        Here, you'll learn key concepts of software analysis and development in English. 
        Discover essential vocabulary with interactive resources tailored to your level.
      </p>
    </div>

    <!-- Interactive Tabs -->
    <div class="mt-12">
      <div class="flex justify-center">
        <button id="web-tab" 
                class="tab-button px-6 py-3 mx-2 text-white bg-blue-500 hover:bg-blue-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
          Web Development
        </button>
        <button id="cloud-tab" 
                class="tab-button px-6 py-3 mx-2 text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
          Cloud Computing
        </button>
      </div>

      <!-- Web Development Content -->
      <div id="web-content" class="tab-content min-h-[400px] mt-8">
        <div class="flex flex-wrap lg:flex-nowrap items-center">
          <div class="lg:w-1/2">
            <img 
              src="https://cdn.pixabay.com/photo/2019/10/09/07/28/development-4536630_640.png" 
              alt="Web Development" 
              class="w-full rounded-lg shadow-md"
            />
          </div>
          <div class="lg:w-1/2 lg:pl-10">
            <h3 class="text-2xl font-bold text-gray-800">Module: Web Development</h3>
            <p class="mt-4 text-gray-600">
              In this module, you'll learn essential vocabulary for web development, 
              covering HTML for structuring content, CSS for styling pages, and JavaScript for adding interactivity. 
              You'll also explore Responsive Design concepts and frameworks like Bootstrap for efficient development.
            </p>
          </div>
        </div>
      </div>

      <!-- Cloud Computing Content -->
      <div id="cloud-content" class="tab-content hidden min-h-[400px] mt-8">
        <div class="flex flex-wrap lg:flex-nowrap items-center">
          <div class="lg:w-1/2">
            <img 
              src="https://lumolog.com/wp-content/uploads/2024/04/Cloud-Computing-1024x678.jpeg" 
              alt="Cloud Computing" 
              class="w-full rounded-lg shadow-md"
            />
          </div>
          <div class="lg:w-1/2 lg:pl-10">
            <h3 class="text-2xl font-bold text-gray-800">Module: Cloud Computing</h3>
            <p class="mt-4 text-gray-600">
              In this module, you'll explore essential vocabulary for cloud computing, 
              including basics and service models like IaaS, PaaS, and SaaS. 
              Learn about platforms like AWS, Azure, and Google Cloud, as well as concepts such as containerization 
              with Docker, orchestration with Kubernetes, Serverless computing, and CI/CD practices.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // JavaScript for interactivity
  const webTab = document.getElementById("web-tab");
  const cloudTab = document.getElementById("cloud-tab");
  const webContent = document.getElementById("web-content");
  const cloudContent = document.getElementById("cloud-content");

  webTab.addEventListener("click", () => {
    webContent.classList.remove("hidden");
    cloudContent.classList.add("hidden");
    webTab.classList.add("bg-blue-500", "text-white");
    webTab.classList.remove("bg-gray-200", "text-gray-700");
    cloudTab.classList.add("bg-gray-200", "text-gray-700");
    cloudTab.classList.remove("bg-blue-500", "text-white");
  });

  cloudTab.addEventListener("click", () => {
    cloudContent.classList.remove("hidden");
    webContent.classList.add("hidden");
    cloudTab.classList.add("bg-blue-500", "text-white");
    cloudTab.classList.remove("bg-gray-200", "text-gray-700");
    webTab.classList.add("bg-gray-200", "text-gray-700");
    webTab.classList.remove("bg-blue-500", "text-white");
  });
</script>



<?php include_once 'assets/footer.php'; ?>

<?php include_once '../assets/navbarParaModulos.php'; ?>
<?php include_once '../assets/cloudAudios.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversation Cloud Module</title>
</head>

<div class="w-full text-gray-700 bg-gray-100">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
        <button onclick="window.history.back()" class="bg-blue-600 text-white px-4 py-2 rounded focus:outline-none hover:bg-green-700">
            Back
        </button>
        </div>
    </div>
</div>

<div class="flex flex-col items-center justify-center h-screen p-4">
        
        <!-- Título de la conversación -->
        <h1 class="text-4xl font-bold mb-8">Choosing a Cloud Provider</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
                
                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?semt=ais_hybrid" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con1Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>John:</strong> Hi Lisa, have you decided which cloud provider we should use for the new project?</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con1Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Lisa:</strong> I’m still considering options. We could go with AWS, Azure, or Google Cloud.</p>
                    </div>
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/medium-shot-smiley-woman_23-2148941454.jpg?semt=ais_hybrid" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?semt=ais_hybrid" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con1Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>John:</strong> Which one do you prefer?</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con1Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Lisa:</strong> I’m leaning toward AWS because of its extensive services. But Google Cloud is great for analytics, and Azure integrates well with Microsoft tools.</p>
                    </div>
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/medium-shot-smiley-woman_23-2148941454.jpg?semt=ais_hybrid" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?semt=ais_hybrid" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con1Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>John:</strong> Let’s list the project requirements and choose accordingly.</p>
                    </div>
                </div>


            </div>

        </div>

    </div>
<?php include_once '../assets/footerParaModulos.php'; ?>
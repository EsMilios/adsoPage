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
        <h1 class="text-4xl font-bold mb-8">Deploying with Modern Tools</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
                
                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Anna:</strong> Are we using Kubernetes or Docker for container management in this project?</p>
                    </div>
                    <div class="profile">
                        <img src="https://www.shutterstock.com/image-photo/black-woman-arms-crossed-standing-600nw-2254569139.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://hicuespeakers.com/sites/default/files/styles/cuadrada_737x737/public/2022-05/perfiles/David%20Goggins.jpg.webp?itok=jSv1V_tq" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Tom:</strong> Both. Docker helps create containers, and Kubernetes is great for orchestrating them.</p>
                    </div>
                </div>
                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Anna:</strong> That makes sense. Should we implement a Serverless approach for some features?</p>
                    </div>
                    <div class="profile">
                        <img src="https://www.shutterstock.com/image-photo/black-woman-arms-crossed-standing-600nw-2254569139.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://hicuespeakers.com/sites/default/files/styles/cuadrada_737x737/public/2022-05/perfiles/David%20Goggins.jpg.webp?itok=jSv1V_tq" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Tom:</strong> Yes, especially for functions that don’t run continuously. It will save costs.</p>
                    </div>
                </div>
                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Anna:</strong> And how about automating deployments with CI/CD?</p>
                    </div>
                    <div class="profile">
                        <img src="https://www.shutterstock.com/image-photo/black-woman-arms-crossed-standing-600nw-2254569139.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://hicuespeakers.com/sites/default/files/styles/cuadrada_737x737/public/2022-05/perfiles/David%20Goggins.jpg.webp?itok=jSv1V_tq" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg max-w-[70%]">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con2Diag6.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Tom:</strong> Absolutely. Continuous Integration and Deployment will ensure smoother updates. We’ll also configure a Load Balancer for traffic management.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php include_once '../assets/footer.php'; ?>
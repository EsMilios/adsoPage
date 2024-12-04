<?php include_once '../assets/navbarParaModulos.php'; ?>
<?php include_once '../assets/webAudios.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversation Web Module</title>
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
        <h1 class="text-4xl font-bold mb-8">Deploying the Website</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
            
                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Emma:</strong> Our project is ready to deploy. What’s the next step?</p>
                    </div>
                    <div class="profile">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/033/168/347/small_2x/an-attractive-african-american-business-woman-smiling-ai-generative-free-photo.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://st4.depositphotos.com/1591576/20942/i/450/depositphotos_209420114-stock-photo-close-horizontal-portrait-stubble-bearded.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Frank:</strong> First, we need to optimize for SEO so that our site ranks well on search engines.</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Emma:</strong> Got it. Should we host it on a CDN for better performance?</p>
                    </div>
                    <div class="profile">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/033/168/347/small_2x/an-attractive-african-american-business-woman-smiling-ai-generative-free-photo.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://st4.depositphotos.com/1591576/20942/i/450/depositphotos_209420114-stock-photo-close-horizontal-portrait-stubble-bearded.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Frank:</strong> Definitely. A CDN will reduce load times by delivering content from servers closer to users.</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Emma:</strong> And for security, we’ll need SSL/TLS certificates, right?</p>
                    </div>
                    <div class="profile">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/033/168/347/small_2x/an-attractive-african-american-business-woman-smiling-ai-generative-free-photo.jpg" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://st4.depositphotos.com/1591576/20942/i/450/depositphotos_209420114-stock-photo-close-horizontal-portrait-stubble-bearded.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con3Diag6.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Frank:</strong> Exactly. They encrypt data and ensure a secure connection.2</p>
                    </div>
                </div>

                     
            </div>

        </div>

    </div>
<?php include_once '../assets/footerParaModulos.php'; ?>

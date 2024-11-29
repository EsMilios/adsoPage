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
        <h1 class="text-4xl font-bold mb-8">Discussing APIs</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
            
                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1139722168/photo/mid-adult-man-smiling-on-gray-background.jpg?s=612x612&w=0&k=20&c=fLgqnldmSlNHU-fooFM1dlyF4Fo1gqx8yDJsmkz-AHw=" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Charlie:</strong> Hey Dana, do you know how we can integrate the payment system into our app?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Dana:</strong> Sure! We can use an API for that. It will simplify communication with the payment service.</p>
                    </div>
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg?semt=ais_hybrid" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>
                
                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1139722168/photo/mid-adult-man-smiling-on-gray-background.jpg?s=612x612&w=0&k=20&c=fLgqnldmSlNHU-fooFM1dlyF4Fo1gqx8yDJsmkz-AHw=" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Charlie:</strong> Should we use REST or GraphQL?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Dana:</strong> It depends on the project. REST is straightforward, but GraphQL might be better if we need to fetch specific data.</p>
                    </div>
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg?semt=ais_hybrid" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1139722168/photo/mid-adult-man-smiling-on-gray-background.jpg?s=612x612&w=0&k=20&c=fLgqnldmSlNHU-fooFM1dlyF4Fo1gqx8yDJsmkz-AHw=" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Charlie:</strong> That makes sense. And for real-time updates, should we look into WebSocket?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lgs max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con2Diag62.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Dana:</strong> Yes, especially if we need instant notifications.</p>
                    </div>
                    <div class="profile">
                        <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg?semt=ais_hybrid" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>


                
                
            </div>

        </div>

    </div>
<?php include_once '../assets/footer.php'; ?>

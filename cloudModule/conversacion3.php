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
        <h1 class="text-4xl font-bold mb-8">Understanding Cloud Services</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
            
                <div class="chat-message flex items-start space-x-4 ">
                        <img src="https://cdn.pixabay.com/photo/2021/06/04/10/28/portrait-6309448_1280.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    <div class="profile">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Mark: </strong> I’m confused about the differences between SaaS, PaaS, and IaaS. Can you explain?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Sophie:</strong> Sure! SaaS stands for Software as a Service. It’s when you use ready-to-go applications like Gmail or Salesforce.</p>
                    </div>
                    <div class="profile">
                        <img src="https://cdn.create.vista.com/api/media/small/8982997/stock-photo-young-woman-smiling" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4 ">
                        <img src="https://cdn.pixabay.com/photo/2021/06/04/10/28/portrait-6309448_1280.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    <div class="profile">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Mark: </strong> Got it. And PaaS?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Sophie:</strong> Platform as a Service provides a platform for developers to build applications, like Google App Engine.</p>
                    </div>
                    <div class="profile">
                        <img src="https://cdn.create.vista.com/api/media/small/8982997/stock-photo-young-woman-smiling" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4 ">
                        <img src="https://cdn.pixabay.com/photo/2021/06/04/10/28/portrait-6309448_1280.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    <div class="profile">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Mark: </strong> What about IaaS?</p>
                    </div>
                </div>


                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg ">
                        <audio controls>
                            <source src="../assets/cloudAudios.php?nombre=con3Diag6.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Sophie:</strong> Infrastructure as a Service offers virtual machines, storage, and networking, like Amazon EC2. It’s like renting physical hardware but online.</p>
                    </div>
                    <div class="profile">
                        <img src="https://cdn.create.vista.com/api/media/small/8982997/stock-photo-young-woman-smiling" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>



            </div>

        </div>

    </div>
<?php include_once '../assets/footer.php'; ?>

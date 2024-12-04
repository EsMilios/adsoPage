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
        <h1 class="text-4xl font-bold mb-8">A Web Development Project</h1>

        <!-- Sección de la conversación -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            
            <!-- Mensajes de la conversación -->
            <div class="chat-container space-y-4">
                
                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag1.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Alice:</strong> Hey Bob, we need to finalize the structure of our website. Have you decided which technologies we’ll use?</p>
                    </div>
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1365601848/photo/portrait-of-a-young-woman-carrying-her-schoolbooks-outside-at-college.jpg?s=612x612&w=0&k=20&c=EVxLUZsL0ueYFF1Nixit6hg-DkiV52ddGw_orw9BSJA=" class="w-20 h-20 rounded-full object-cover"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://thumbs.wbm.im/pw/small/39573f81d4d58261e5e1ed8f1ff890f6.jpg" alt="Persona 1" class="w-20 h-20 rounded-full">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag2.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Bob:</strong> Yes, I was thinking of starting with HTML, CSS, and JavaScript. They’re essential for the front-end.</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag3.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Alice:</strong> That’s great. Will we implement Responsive Design?</p>
                    </div>
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1365601848/photo/portrait-of-a-young-woman-carrying-her-schoolbooks-outside-at-college.jpg?s=612x612&w=0&k=20&c=EVxLUZsL0ueYFF1Nixit6hg-DkiV52ddGw_orw9BSJA=" class="w-20 h-20 rounded-full object-cover"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://thumbs.wbm.im/pw/small/39573f81d4d58261e5e1ed8f1ff890f6.jpg" alt="Persona 1" class="w-20 h-20 rounded-full object-cover">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag4.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Bob:</strong> Absolutely. It’s crucial for mobile users. I was also considering using Bootstrap to speed up the styling process.</p>
                    </div>
                </div>

                <div class="chat-message flex items-start justify-end space-x-4">
                    <div class="message-content bg-green-100 p-4 rounded-lg  max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag5.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Alice:</strong> Perfect! For dynamic interactions, we could use frameworks like React, Angular, or Vue.js. What do you think?</p>
                    </div>
                    <div class="profile">
                        <img src="https://media.istockphoto.com/id/1365601848/photo/portrait-of-a-young-woman-carrying-her-schoolbooks-outside-at-college.jpg?s=612x612&w=0&k=20&c=EVxLUZsL0ueYFF1Nixit6hg-DkiV52ddGw_orw9BSJA=" class="w-20 h-20 rounded-full"> 
                    </div>
                </div>

                <div class="chat-message flex items-start space-x-4">
                    <div class="profile">
                        <img src="https://thumbs.wbm.im/pw/small/39573f81d4d58261e5e1ed8f1ff890f6.jpg" alt="Persona 1" class="w-20 h-20 rounded-full object-cover">
                    </div>
                    <div class="message-content bg-blue-100 p-4 rounded-lg max-w-[70%]">
                        <audio controls>
                            <source src="../assets/webAudios.php?nombre=con1Diag6.wav" type="audio/mp3">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                        <p><strong>Bob:</strong> I’d go with React since it’s more familiar to the team.</p>
                    </div>
                </div>

                
                
            </div>

        </div>
</div>
<?php include_once '../assets/footerParaModulos.php'; ?>

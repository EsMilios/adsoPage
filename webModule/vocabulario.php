<?php include_once '../assets/navbarParaModulos.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vocabulary Web Module</title>
</head>


<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "u469734594_adsoPageRoot";
$password = "pgAdso2024";
$dbname = "u469734594_adsoPage";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL inicial
$sql = "SELECT tittle, description, icon, audio FROM webVocabularyAudios";
$result = $conn->query($sql);
?>

<div class="w-full text-gray-700 bg-gray-100">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="../webModule.php" class="bg-blue-600 text-white px-4 py-2 rounded focus:outline-none hover:bg-green-700">
                Back to Web Module
            </a>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-8 space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-extrabold text-blue-600 mb-4">Web Vocabulary Activities</h1>
        <p class="text-lg text-gray-600">Explore, learn, and practice key web development terms!</p>
    </div>

    <!-- Search Bar -->
    <div class="flex justify-center mb-8">
        <input id="searchInput" type="text" placeholder="Search for a term..." 
               class="border border-gray-300 rounded-lg px-4 py-2 w-full max-w-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
    </div>

    <!-- Vocabulary List -->
    <div id="vocabularyList" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 min-h-[500px]">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="vocabulary-item bg-white shadow-lg rounded-lg p-4 flex flex-col items-center space-y-4">
                    <img src="<?php echo $row['icon']; ?>" alt="Icon" class="w-16 h-16 rounded-full" onerror="this.onerror=null; this.src='path/to/default/image.png';">
                    <h3 class="text-xl font-semibold text-blue-500"><?php echo $row['tittle']; ?></h3>
                    <p class="text-gray-600 text-sm text-center"><?php echo $row['description']; ?></p>
                    <button onclick="playAudio('<?php echo base64_encode($row['audio']); ?>')" 
                            class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fa-solid fa-volume-high mr-2"></i> Play Audio
                    </button>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="col-span-full text-center text-gray-500">No vocabulary found.</p>
        <?php endif; ?>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const vocabularyList = document.getElementById('vocabularyList');
    const items = Array.from(vocabularyList.getElementsByClassName('vocabulary-item'));
    const initialHeight = vocabularyList.offsetHeight;

    // Set initial height
    vocabularyList.style.minHeight = `${initialHeight}px`;

    searchInput.addEventListener('input', function () {
        const filter = searchInput.value.toLowerCase();
        let visibleItems = 0;

        items.forEach(item => {
            const title = item.querySelector('h3').textContent.toLowerCase();

            // Filter only by title
            if (title.includes(filter)) {
                item.style.display = '';
                visibleItems++;
            } else {
                item.style.display = 'none';
            }
        });

        // Ensure the height remains consistent even when fewer items are visible
        if (visibleItems === 0) {
            vocabularyList.style.minHeight = `${initialHeight}px`;
        }
    });

    // Play audio
    function playAudio(audioData) {
        const audioBlob = new Blob([Uint8Array.from(atob(audioData), c => c.charCodeAt(0))], { type: 'audio/mpeg' });
        const audioUrl = URL.createObjectURL(audioBlob);
        const audio = new Audio(audioUrl);
        audio.play();
    }
</script>

<?php include_once '../assets/footerParaModulos.php'; ?>

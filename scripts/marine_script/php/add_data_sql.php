<?php

// Codes couleurs ANSI
$blue = "\033[34m";
$green = "\033[32m";
$red = "\033[31m";
$yellow = "\033[33m";
$reset = "\033[0m";

echo "{$blue}Ajout des données dans la base SQL{$reset}\n";

// connexion à la base de données
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "photos_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("{$red}Connection failed: " . $conn->connect_error . "{$reset}\n");
}
echo "{$green}Connected successfully{$reset}\n";


// Récupérer tous les fichiers .jpeg
$files = glob('./pictures/*.jpeg');

// Filtrer pour exclure ceux qui contiennent "small"
$files = array_filter($files, function($file) {
    return strpos(basename($file), 'small') === false;
});

if (!$files) {
    die("{$red}Aucune photo trouvée dans ./pictures{$reset}\n");
}

// Récupérer les noms des photos déjà en base
$result = $conn->query("SELECT photo_name FROM photos");
$existing_photos = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $existing_photos[] = $row['photo_name'];
    }
}

// Parcourir tous les fichiers
$count_added = 0;
foreach ($files as $file) {
    $photo_name = basename($file);

    // Vérifier si la photo est déjà en base
    if (in_array($photo_name, $existing_photos)) {
        echo "{$yellow}Photo déjà en base: $photo_name (skip){$reset}\n";
        continue;
    }

    // Nouvelle photo à ajouter
    $img_data = file_get_contents($file);
    $base64_data = base64_encode($img_data);
    $photo_path = realpath($file);

    $stmt = $conn->prepare("INSERT INTO photos (image_base64, photo_name, photo_path) VALUES (?, ?, ?)");
    if (!$stmt) {
        echo "{$red}Erreur préparation requête: " . $conn->error . "{$reset}\n";
        continue;
    }

    $stmt->bind_param("sss", $base64_data, $photo_name, $photo_path);
    if ($stmt->execute()) {
        echo "{$green}Photo ajoutée: $photo_name{$reset}\n";
        $count_added++;
    } else {
        echo "{$red}Erreur lors de l'ajout de $photo_name: " . $stmt->error . "{$reset}\n";
    }
    $stmt->close();
}

echo "\n{$blue}=== Résumé ==={$reset}\n";
echo "{$blue}Nombre de photos ajoutées: $count_added{$reset}\n";

$conn->close();

?>

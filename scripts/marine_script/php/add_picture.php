<?php

// Codes couleurs ANSI
$green = "\033[32m";
$red = "\033[31m";
$yellow = "\033[33m";
$blue = "\033[34m";
$reset = "\033[0m";

echo "{$blue}prise de la photo et sauvegarde{$reset}\n";

// URL de l'API
$url = "https://cataas.com/cat";

function fetch_and_save($url)
{
    global $green, $red, $yellow, $reset;

    // récupère l'image
    $img = @file_get_contents($url);
    if ($img === false) {
        echo "{$red}Erreur lors de la récupération de l'image{$reset}\n";
        return false;
    }
    echo "{$green}Image récupérée avec succès{$reset}\n";

    // Générer un nom de fichier unique
    $uniq = time() . '_' . mt_rand(1000, 9999);
    $baseDir = __DIR__ . '/../pictures';
    $filename = $baseDir . "/cat_marine_" . date("Ymd_His") . "_" . $uniq . ".jpeg";

    // sauvegarde principale (toujours sans '_small')
    if (file_put_contents($filename, $img) === false) {
        echo "{$red}Erreur lors de l'écriture de " . $filename . "{$reset}\n";
        return false;
    }
    echo "{$green}Image saved to " . $filename . "{$reset}\n";

    // Occasionnellement, sauvegarder aussi une version "_small" (20% de chance)
    if (rand(1, 100) <= 20) {
        $filenameSmall = $baseDir . "/cat_marine_" . date("Ymd_His") . "_" . $uniq . "_small.jpeg";
        if (file_put_contents($filenameSmall, $img) !== false) {
            echo "{$yellow}Image small saved to " . $filenameSmall . "{$reset}\n";
        }
    }

    return true;
}

// Appeler la fonction 100 fois avec 3 secondes d'attente entre chaque appel
$times = 5;
$delay = 3; // secondes

echo "{$blue}=== Début du téléchargement de $times images ==={$reset}\n\n";

for ($i = 0; $i < $times; $i++) {
    echo "{$blue}[" . ($i + 1) . "/$times]{$reset} ";
    fetch_and_save($url);
    if ($i < $times - 1) {
        sleep($delay);
    }
    echo "\n";
}

echo "{$green}=== Téléchargement terminé ==={$reset}\n";

?>

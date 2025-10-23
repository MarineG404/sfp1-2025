<?php
define('APP_VERSION', 'dev-2024-06-27');

// Main entry point of the application

// Include the version file to get the application version
include_once __DIR__ . '/../includes/version.php';

// Get the current branch name from the environment variable or set a default
function findGitHeadFile($dir) {
    while ($dir !== '/' && $dir !== '') {
        $gitHead = $dir . '/.git/HEAD';
        if (file_exists($gitHead)) {
            return $gitHead;
        }
        $dir = dirname($dir);
    }
    return null;
}

$headFile = findGitHeadFile(__DIR__);

if ($headFile) {
    $content = trim(file_get_contents($headFile));
    if (strpos($content, 'ref:') === 0) {
        $branch = basename(trim(substr($content, 5)));
    } else {
        $branch = substr($content, 0, 7); // commit détaché
    }
} else {
    $branch = 'ouin ouin';
}


$phpVersion = phpversion();
$currentDateTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil — SFP1</title>
    <link rel="stylesheet" href="assets/css/index.css?v=1.0">
</head>

<body>
    <header class="site-header">
        <div class="wrap">
            <h1>SFP1 2025</h1>
            <p class="lead">Plateforme interne — environnement de dev</p>
        </div>
    </header>

    <main class="wrap main-grid">
        <section class="card info">
            <h2>Informations</h2>
            <ul>
                <li>Version de l'application : <?php echo defined('APP_VERSION') ? APP_VERSION : 'inconnue'; ?></li>
                <li>Version de PHP : <?php echo $phpVersion; ?></li>
                <li>Branche actuelle : <?php echo $branch; ?></li>
                <li>Date et heure : <?php echo $currentDateTime; ?></li>
            </ul>
        </section>

        <section class="card devs">
            <h2>Développeurs</h2>
            <ul>
                <li><a href="developers/clement-kieu.php">Clément KIEU</a></li>
                <li><a href="developers/hieu-tran.php">Hieu TRAN</a></li>
                <li><a href="developers/marine-gonnord.php">Marine GONNORD</a></li>
                <li><a href="developers/alexandre-iglesias.php">Alexandre IGLESIAS</a></li>
            </ul>
        </section>

        <section class="card tools">
            <h2>Outils</h2>
            <ul>
                <li><a href="phpinfo.php">phpinfo()</a></li>
                <li><a href="git-refresh.php">Actualiser le code source</a></li>
            </ul>
        </section>
    </main>

    <footer class="site-footer">
        <div class="wrap">
            <p>Dernière mise à jour : <?php echo $currentDateTime; ?></p>
        </div>
    </footer>
</body>

</html>

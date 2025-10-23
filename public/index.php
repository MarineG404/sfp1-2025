<?php
define('APP_VERSION', '1.0.0');

// Main entry point of the application

// Include the version file to get the application version
include_once __DIR__ . '/../includes/version.php';

// Get the current branch name from the environment variable or set a default
$branch = getenv('GIT_BRANCH') ?: 'dev';
$phpVersion = phpversion();
$currentDateTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<h1>Bienvenue sur notre application PHP</h1>
	<p>Version de l'application : <?php echo defined('APP_VERSION') ? APP_VERSION : 'inconnue'; ?></p>
	<p>Version de PHP : <?php echo $phpVersion; ?></p>
	<p>Branche actuelle : <?php echo $branch; ?></p>
	<p>Date et heure actuelle : <?php echo $currentDateTime; ?></p>

	<h2>Liens vers les pages des développeurs :</h2>
	<ul>
		<li><a href="developers/clement-kieu.php">Clémant KIEU</a></li>
		<li><a href="developers/hieu-tran.php">Hieu TRAN</a></li>
		<li><a href="developers/marine-gonnord.php">Marine Gonnord</a></li>
		<li><a href="developers/alexandre-iglesias.php">Alexandre IGLESIAS</a></li>
	</ul>

	<h2>Autres liens :</h2>
	<ul>
		<li><a href="phpinfo.php">Page phpInfo</a></li>
		<li><a href="git-refresh.php">Actualiser le code source</a></li>
	</ul>
</body>
</html>

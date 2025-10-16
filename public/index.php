<?php
include_once '../includes/version.php';
$branch = getenv('GIT_BRANCH') ?: 'dev';
$phpVersion = phpversion();
$currentDateTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SFP1 2025 - Accueil</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header>
			<h1>🚀 SFP1 2025</h1>
			<p class="subtitle">Plateforme de développement</p>
		</header>

		<div class="info-cards">
			<div class="card">
				<h3>Version</h3>
				<p><?php echo APP_VERSION; ?></p>
			</div>
			<div class="card">
				<h3>PHP</h3>
				<p><?php echo $phpVersion; ?></p>
			</div>
			<div class="card">
				<h3>Branche</h3>
				<p><?php echo $branch; ?></p>
			</div>
		</div>

		<section class="main-content">
			<div class="section-box">
				<h2>👨‍💻 Équipe de développement</h2>
				<div class="dev-links">
					<a href="developers/clement-kieu.php" class="dev-card">Clément KIEU</a>
					<a href="developers/hieu-tran.php" class="dev-card">Hieu TRAN</a>
					<a href="developers/marine-gonnord.php" class="dev-card">Marine GONNORD</a>
					<a href="developers/alexandre-iglesias.php" class="dev-card">Alexandre IGLESIAS</a>
				</div>
			</div>

			<div class="section-box">
				<h2>🛠️ Outils</h2>
				<div class="tools-links">
					<a href="phpinfo.php" class="tool-btn">PHP Info</a>
					<a href="git-refresh.php" class="tool-btn">Actualiser le code</a>
				</div>
			</div>
		</section>

		<footer>
			<p>Dernière mise à jour : <?php echo $currentDateTime; ?></p>
		</footer>
	</div>
</body>

</html>

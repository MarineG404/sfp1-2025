<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marine GONNORD - Développeuse</title>
	<link rel="stylesheet" href="../assets/css/profileMarine.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<a href="../index.php" class="back-btn">← Retour à l'accueil</a>

		<div class="profile-header">
			<div class="profile-avatar">
				<img src="https://github.com/MarineG404.png" alt="Marine GONNORD" class="github-avatar">
			</div>
			<h1>👋 Salut, c'est Marine !</h1>
			<p class="subtitle">Développeuse Full-stack alimentée par la caféine ☕</p>
			<div class="social-links">
				<a href="https://github.com/MarineG404" target="_blank" class="github-link">
					<img src="https://skillicons.dev/icons?i=github" alt="GitHub">
				</a>
			</div>
		</div>

		<div class="profile-content">
			<div class="section-box">
				<h2>🚀 Projets principaux</h2>
				<div class="projects-grid">
					<a href="https://github.com/MarineG404/Fokuz" class="project-card" target="_blank">
						<h3>Fokuz</h3>
						<p>Application de productivité</p>
					</a>
					<a href="https://github.com/MarineG404/ADHDragon" class="project-card" target="_blank">
						<h3>ADHDragon</h3>
						<p>Projet gaming éducatif</p>
					</a>
					<a href="https://github.com/MarineG404/ETA" class="project-card" target="_blank">
						<h3>ETA</h3>
						<p>Système de gestion</p>
					</a>
				</div>
			</div>

			<div class="section-box">
				<h2>💻 Compétences techniques</h2>
				<div class="skills-section">
					<h3>🧠 Développement</h3>
					<div class="skills-grid">
						<img src="https://skillicons.dev/icons?i=php,symfony,py,django,html,css,bootstrap,npm,javascript,typescript,react,angular,cs,cpp,md"
							alt="Compétences de développement">
					</div>

					<h3>🛠️ Outils</h3>
					<div class="skills-grid">
						<img src="https://skillicons.dev/icons?i=vscode,visualstudio,pycharm,git,github,gitlab,githubactions,docker,postman,mysql"
							alt="Outils">
					</div>

					<h3>💿 Systèmes d'exploitation</h3>
					<div class="skills-grid">
						<img src="https://skillicons.dev/icons?i=linux,debian,ubuntu,windows,raspberrypi,arduino"
							alt="Systèmes d'exploitation">
					</div>
				</div>
			</div>
		</div>

		<footer>
			<p>Dernière mise à jour : <?php echo date('Y-m-d H:i:s'); ?></p>
		</footer>
	</div>
</body>

</html>

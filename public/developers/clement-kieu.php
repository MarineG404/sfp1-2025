<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/clement.css">
	<title>Clémant KIEU</title>
</head>

<body>
	<h1>Clémant KIEU</h1>
	<p>Date/Heure actuelle : <?php echo date('Y-m-d H:i:s'); ?></p>
	<h2>Résumé du CV</h2>
	<p>>Je suis une personne rigoureux et investi qui saurai déployer l’énergie et la capacité de travail nécessaires afin de réussir les missions confiées pour le développement de l’entreprise.</p>
	<a href="../index.php">Acceuil</a>
	<form method="post">
		<button type="submit" name="pull">Mettre à jour (git pull)</button>
	</form>

	<button onclick="pull()">pull</button>
</body>

</html>

<?php
	$resultatcommande = shell_exec('git branch --show-current');
	echo "<p>$resultatcommande<p>";
?>
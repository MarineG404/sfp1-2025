<?php
session_start();

$script = realpath(__DIR__ . '/../scripts/gitpull.sh');
if (!$script || !file_exists($script)) {
    die('Script introuvable.');
}

exec('/bin/sh ' . escapeshellarg(__DIR__ . '/../scripts/gitpull.sh') . ' 2>&1', $output, $exitCode);

if ($exitCode !== 0) {
	die('Échec de la mise à jour Git. Code de sortie : ' . $exitCode);
} else {
	echo 'Mise à jour Git réussie.<br><pre>' . htmlspecialchars(implode("\n", $output)) . '</pre>';
}

// header('Location: index.php');
exit;
?>

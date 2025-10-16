<?php
// This file will execute a Git pull command to update the source code and then redirect to the homepage.

$repositoryPath = __DIR__ . '/../..'; // Path to the repository
$command = 'git -C ' . escapeshellarg($repositoryPath) . ' pull';

// Execute the command
$output = [];
$returnVar = 0;
exec($command, $output, $returnVar);

// Redirect to the homepage
header('Location: index.php');
exit();
?>
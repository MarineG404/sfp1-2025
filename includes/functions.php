<?php
function getCurrentDateTime() {
    return date('Y-m-d H:i:s');
}

function getDeveloperInfo($name, $cvSummary) {
    return [
        'name' => $name,
        'date_time' => getCurrentDateTime(),
        'cv_summary' => $cvSummary
    ];
}

function getAppVersion() {
    return trim(file_get_contents(__DIR__ . '/../version.php'));
}

function getPhpVersion() {
    return phpversion();
}

function getBranchName() {
    return trim(shell_exec('git rev-parse --abbrev-ref HEAD'));
}
?>
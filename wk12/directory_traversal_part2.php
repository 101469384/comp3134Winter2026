<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? $_GET['q'] : '.';
$path = basename($path);

if (!file_exists($path) || !is_dir($path)) {
    die("Directory does not exist.");
}

print "<pre>";
print_r(scandir($path));
print "</pre>";
?>

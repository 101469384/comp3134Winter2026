<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION["confirmation"] == $_POST["confirmation"]) {
        echo "Valid Request";
    } else {
        echo "CSRF Attack Detected";
    }
}
?>

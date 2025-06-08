<?php
$host = "sql309.infinityfree.com";
$user = "if0_39182241";
$pass = "Valenttok2005";
$db = "if0_39182241_valent";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$servername = "localhost"; // Andmebaasi server
$username = ""; // Andmebaasi kasutajanimi
$password = ""; // Andmebaasi parool
$dbname = ""; // Andmebaasi nimi

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    die("Ühendus ebaõnnestus: " . $e->getMessage());
}

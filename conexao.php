<?php

$servername = "localhost";
$username = "id19693869_nunes";
$password = "Wendellnunu23@";
$dbname = "id19693869_agenda";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

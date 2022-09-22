<?php

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=nome_do_bando_de_dados', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
<?php

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "mano_db";

try {
    if(!$_POST) {
        die('Netinkamas metodas');
    }
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt= $conn->prepare("INSERT INTO persons (first_name, last_name, email, id)
VALUES (:firstname, :lastname, :email, :id)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    $firstname = $_POST['vardas'];
    $lastname = $_POST['pavarde'];
    $email = $_POST['elpastas'];
    $password = $_POST['password'];
    $stmt->execute();

    echo "New records created successfully";
}catch (PDOException $e) {
    echo "Klaida: " . $e->getMessage();
}
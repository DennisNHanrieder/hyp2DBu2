<?php
require_once("functions.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    $origin = $_POST['origin'];
    $role = $_POST['role'];

    $pdo = connectToDatabase();

    // Register usre in the database
    $sql = "INSERT INTO Player (username, password, origin,role) VALUES (:username, :password, :origin, :role)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':origin', $origin);
    $stmt->bindParam(':role', $role);

    $stmt->execute();

    // Informing user in case of successful registration in the register.html.twig file
    $twig->display("register.html.twig", ['success' => 'User registered successfully!']);

}
?>

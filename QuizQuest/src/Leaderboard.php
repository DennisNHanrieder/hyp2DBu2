<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    //for leaderboard: username, origin, points and placement somehow (maybe id)

    $pdo = connectToDatabase();

    // Abfrage der Daten von Player, points

    $sql = "SELECT username, origin, points FROM Player ORDER BY points DESC";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Pass data to Twig template
    echo $twig->render("Leaderboard.html.twig", ['players' => $result]);

}

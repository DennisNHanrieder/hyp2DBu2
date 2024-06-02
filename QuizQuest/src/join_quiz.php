<?php


use Fhooe\Router\Router;

require_once("functions.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connectToDatabase();
    $code = $_POST["join-code"];
    $userid = $_SESSION["userId"];
    print_r($userid);

    $sql = "SELECT * FROM Quiz WHERE Status = 'private' AND StartedAt <= NOW() AND ClosedAt >= NOW() AND DeletedAt IS NULL AND Joincode = :code";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':code', $code);
    $stmt->execute();

    $privateQuiz = $stmt->fetchAll();
    var_dump($privateQuiz);


    $sql2 = "INSERT IGNORE INTO PlayerQuiz (Player_ID, Quiz_ID) VALUES (:userid, :quizid)";

    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(':userid', $userid);
    $stmt2->bindParam(':quizid', $privateQuiz[0]['ID']);
    $stmt2->execute();
    // Redirect to the quiz_overview.html.twig using the router
}
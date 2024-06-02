<?php

 require_once("functions.php");

 function getQuizzes()
 {
     $pdo = connectToDatabase();

     $sql = "SELECT q.*, COUNT(pq.Player_ID) AS answeredPlayers 
            FROM Quiz q
            LEFT JOIN PlayerQuiz pq ON q.ID = pq.Quiz_ID
            WHERE (q.Status = 'public' OR q.JoinCode IS NOT NULL)
            AND q.StartedAt <= NOW() 
            AND q.ClosedAt >= NOW() 
            AND q.DeletedAt IS NULL
            GROUP BY q.ID";

     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     $quizzes = $stmt->fetchAll();
     return $quizzes;
 }
function getQuizzesFromUser($userId)
{
    $pdo = connectToDatabase();

    $sql = "SELECT q.*, COUNT(pq.Player_ID) AS answeredPlayers 
            FROM Quiz q
            LEFT JOIN PlayerQuiz pq ON q.ID = pq.Quiz_ID
            WHERE q.UserID = :userId 
            AND q.DeletedAt IS NULL
            GROUP BY q.ID";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    $quizzes = $stmt->fetchAll();
    return $quizzes;
}

 function getQuiz($id)
 {
    // Get the quiz with the given id from the database
    $pdo = connectToDatabase();

    $sql = "SELECT * FROM Quiz WHERE ID = :id AND DeletedAt IS NULL";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $quiz = $stmt->fetch();
    return $quiz;
 }



?>

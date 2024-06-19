<?php

require_once("functions.php");

function getQuizzes() {
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

function getQuizzesFromUser($userId) {
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

function getQuiz($id) {
    $pdo = connectToDatabase();

    $sql = "SELECT * FROM Quiz WHERE ID = :id AND DeletedAt IS NULL";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $quiz = $stmt->fetch();
    return $quiz;
}

function getQuestion($quizId, $questionIndex) {
    $pdo = connectToDatabase();

    $sql = "SELECT * FROM Question 
            WHERE Quiz_ID = :quizId 
            AND DeletedAt IS NULL 
            LIMIT 1 OFFSET :questionIndex";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':quizId', $quizId, PDO::PARAM_INT);
    $stmt->bindParam(':questionIndex', $questionIndex, PDO::PARAM_INT);
    $stmt->execute();
    $question = $stmt->fetch();
    return $question;
}

function getAnswers($questionId, $quizId) {
    $pdo = connectToDatabase();

    $sql = "SELECT * FROM Answer 
            WHERE Question_ID = :questionId 
            AND Quiz_ID = :quizId 
            AND DeletedAt IS NULL";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questionId', $questionId, PDO::PARAM_INT);
    $stmt->bindParam(':quizId', $quizId, PDO::PARAM_INT);
    $stmt->execute();
    $answers = $stmt->fetchAll();
    return $answers;
}

function getTotalQuestions($quizId) {
    $pdo = connectToDatabase();

    $sql = "SELECT COUNT(*) FROM Question 
            WHERE Quiz_ID = :quizId 
            AND DeletedAt IS NULL";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':quizId', $quizId, PDO::PARAM_INT);
    $stmt->execute();
    $totalQuestions = $stmt->fetchColumn();
    return $totalQuestions;
}

function savePlayerAnswer($playerId, $answerId, $questionIndex, $quizId) {
    $pdo = connectToDatabase();

    $sql = "INSERT INTO PlayerAnswer (Player_ID, Answer_ID, Question_ID, Quiz_ID)
            VALUES (:playerId, :answerId, 
                (SELECT ID FROM Question WHERE Quiz_ID = :quizId AND DeletedAt IS NULL LIMIT 1 OFFSET :questionIndex), 
                :quizId)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
    $stmt->bindParam(':answerId', $answerId, PDO::PARAM_INT);
    $stmt->bindParam(':questionIndex', $questionIndex, PDO::PARAM_INT);
    $stmt->bindParam(':quizId', $quizId, PDO::PARAM_INT);
    $stmt->execute();
}

function getCompletedQuizzes($playerId) {
    $pdo = connectToDatabase();

    $sql = "SELECT q.*, COUNT(pa.ID) AS totalQuestions, 
            SUM(CASE WHEN a.IsCorrect = 1 THEN 1 ELSE 0 END) AS correctAnswers
            FROM Quiz q
            JOIN PlayerAnswer pa ON q.ID = pa.Quiz_ID
            JOIN Answer a ON pa.Answer_ID = a.ID
            WHERE pa.Player_ID = :playerId
            GROUP BY q.ID";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
    $stmt->execute();
    $quizzes = $stmt->fetchAll();
    return $quizzes;
}

function getPlayerAnswers($playerId, $quizId) {
    $pdo = connectToDatabase();

    $sql = "SELECT q.Title as questionTitle, a.Title as answerTitle, 
            a.IsCorrect, pa.Answer_ID, pa.Question_ID
            FROM PlayerAnswer pa
            JOIN Answer a ON pa.Answer_ID = a.ID
            JOIN Question q ON pa.Question_ID = q.ID
            WHERE pa.Player_ID = :playerId
            AND pa.Quiz_ID = :quizId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
    $stmt->bindParam(':quizId', $quizId, PDO::PARAM_INT);
    $stmt->execute();
    $answers = $stmt->fetchAll();
    return $answers;
}


function getPlayerBadges($playerId) {
    $pdo = connectToDatabase();

    $sql = "SELECT Badge_Name FROM PlayerBadges WHERE Player_ID = :playerId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
    $stmt->execute();
    $badges = $stmt->fetchAll();
    return $badges;
}


?>

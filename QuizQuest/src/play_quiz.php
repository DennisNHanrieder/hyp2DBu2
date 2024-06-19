<?php

require_once("../src/quiz.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quizId = $_POST['quiz_id'];
    $questionIndex = (int)$_POST['question_index'];
    $selectedAnswer = $_POST['answer'];

    $playerId = $_SESSION['player_id'];

    // Check if the quiz is already completed
    $completedQuizzes = getCompletedQuizzes($playerId);
    foreach ($completedQuizzes as $completedQuiz) {
        if ($completedQuiz['ID'] == $quizId) {
            header("Location: /quizdetails?id=$quizId");
            exit;
        }
    }

    // Save the player's answer
    savePlayerAnswer($playerId, $selectedAnswer, $questionIndex, $quizId);

    // Check if it was the last question
    $totalQuestions = getTotalQuestions($quizId);
    if ($questionIndex >= $totalQuestions - 1) {
        // Call the stored procedure to check and award badges
        $pdo = connectToDatabase();
        $stmt = $pdo->prepare("CALL CheckAndAwardBadges(:playerId)");
        $stmt->bindParam(':playerId', $playerId, PDO::PARAM_INT);
        $stmt->execute();

        // Redirect to quiz overview if it was the last question
        header("Location: /quizoverview");
        exit;
    }

    // If not the last question, go to the next question
    $nextQuestionIndex = $questionIndex + 1;
    header("Location: /quizshow?id=$quizId&question_index=$nextQuestionIndex");
    exit;
}
?>

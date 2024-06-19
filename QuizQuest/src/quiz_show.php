<?php

use Fhooe\Router\Router;
require_once("functions.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $pdo = connectToDatabase();
    $quizId = $_GET['id'];
    $userId = $_SESSION['user_id'];

    // Fetch the quiz data
    $stmt = $pdo->prepare("SELECT * FROM Quiz WHERE ID = :quizId");
    $stmt->bindParam(':quizId', $quizId);
    $stmt->execute();
    $quiz = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch the user's progress
    $stmt = $pdo->prepare("SELECT current_question_index FROM UserProgress WHERE user_id = :userId AND quiz_id = :quizId");
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':quizId', $quizId);
    $stmt->execute();
    $userProgress = $stmt->fetch(PDO::FETCH_ASSOC);

    $currentQuestionIndex = 0;
    if ($userProgress) {
        $currentQuestionIndex = $userProgress['current_question_index'];
    } else {
        // Initialize user progress if it doesn't exist
        $stmt = $pdo->prepare("INSERT INTO UserProgress (user_id, quiz_id, current_question_index) VALUES (:userId, :quizId, 0)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':quizId', $quizId);
        $stmt->execute();
    }

    // Fetch the current question
    $stmt = $pdo->prepare("SELECT * FROM Question WHERE Quiz_ID = :quizId LIMIT 1 OFFSET :offset");
    $stmt->bindParam(':quizId', $quizId);
    $stmt->bindParam(':offset', $currentQuestionIndex, PDO::PARAM_INT);
    $stmt->execute();
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch the question options
    $stmt = $pdo->prepare("SELECT * FROM Answer WHERE Question_ID = :questionId");
    $stmt->bindParam(':questionId', $question['ID']);
    $stmt->execute();
    $answers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Render the quiz show template
    $twig->display('quiz_open.html.twig', [
        'quiz' => $quiz,
        'question' => $question,
        'answers' => $answers,
        'questionIndex' => $currentQuestionIndex
    ]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quiz_id'])) {
    $pdo = connectToDatabase();
    $quizId = $_POST['quiz_id'];
    $questionIndex = intval($_POST['question_index']);
    $userId = $_SESSION['user_id'];

    // Update the user's progress
    $stmt = $pdo->prepare("UPDATE UserProgress SET current_question_index = :questionIndex WHERE user_id = :userId AND quiz_id = :quizId");
    $stmt->bindParam(':questionIndex', $questionIndex);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':quizId', $quizId);
    $stmt->execute();

    header("Location: /quizshow?id=$quizId");
    exit;
}

?>

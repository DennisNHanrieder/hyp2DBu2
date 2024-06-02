<?php

use Fhooe\Router\Router;
require_once("functions.php");

// TODO html template ausgehend, daten reinschreiben (frage/kategorie/Correct Answer/ Answers)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connectToDatabase();

    // Get form data
    $Title = $_POST['question'];
    $subcategory = $_POST['category'];
    $Quiz_ID = $_POST['quizId'];
    $correctAnswer = $_POST['correctAnswer'];
    $wrongAnswer1 = $_POST['wrongAnswer1'];
    $wrongAnswer2 = $_POST['wrongAnswer2'];
    $wrongAnswer3 = $_POST['wrongAnswer3'];

    // Insert the question into the Question table
    $sql = "INSERT INTO Question (Title, Subcategory, CreatedAt, Quiz_ID) 
            VALUES (:title, :category, NOW(), :quizId)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $Title);
    $stmt->bindParam(':category', $subcategory);
    $stmt->bindParam(':quizId', $Quiz_ID);
    $stmt->execute();

    // Get the ID of the newly inserted question
    $Question_ID = $pdo->lastInsertId();

    // Function to insert an answer
    function insertAnswer($pdo, $answerTitle, $isCorrect, $Question_ID, $Quiz_ID) {
        $sql = "INSERT INTO Answer (Title, isCorrect, CreatedAt, Question_ID, Quiz_ID) 
                VALUES (:title, :isCorrect, NOW(), :questionId, :quizId)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $answerTitle);
        $stmt->bindParam(':isCorrect', $isCorrect);
        $stmt->bindParam(':questionId', $Question_ID);
        $stmt->bindParam(':quizId', $Quiz_ID);
        $stmt->execute();
    }

    // Insert the correct answer
    insertAnswer($pdo, $correctAnswer, 1, $Question_ID, $Quiz_ID);

    // Insert the wrong answers
    insertAnswer($pdo, $wrongAnswer1, 0, $Question_ID, $Quiz_ID);
    insertAnswer($pdo, $wrongAnswer2, 0, $Question_ID, $Quiz_ID);
    insertAnswer($pdo, $wrongAnswer3, 0, $Question_ID, $Quiz_ID);

    $twig->display("quiz_questions.html.twig", ['success' => 'The question was added!']);
}

?>

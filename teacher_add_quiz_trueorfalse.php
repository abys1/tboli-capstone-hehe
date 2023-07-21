<?php
session_start();
$user_id = $_SESSION['user_id'];

require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $lesson = $_POST['lesson'];
    $maxScore = $_POST['max'];
    $dateStart = $_POST['date_start'];
    $allowLate = isset($_POST['allow']) ? 1 : 0; // 1 if checkbox is checked, 0 if not
    $grading = $_POST['grading'];
    $due = $_POST['due'];
    $gradingScore = $_POST['grading_score'];
    $instructions = $_POST['instructions'];
    $questions = $_POST['questions']; // Array of question texts
    $correctChoices = $_POST['correct_choice']; // Array of correct choices

    $sql = "INSERT INTO tbl_quiz_options (added_by, title, lesson, max_score, date_start, allow_late, grading, due, grading_score, instructions) VALUES ('$user_id', '$title', '$lesson', '$maxScore', '$dateStart', $allowLate, '$grading', '$due', '$gradingScore', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        $quiz_options_id = mysqli_insert_id($conn);

        // Loop through the questions and choices
        for ($i = 0; $i < count($questions); $i++) {
            $question = $questions[$i];
            $correctChoice = $correctChoices[$i]; // Get the correct choice for this question

            // Insert the question and choices into tbl_quiz_true_or_false
            $sql = "INSERT INTO tbl_quiz_true_or_false (quiz_options_id, question, correct_choice) VALUES ($quiz_options_id, '$question', '$correctChoice')";


            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully ";
            } else {
                // Error occurred
                echo "Error: " . mysqli_error($conn);
            }
        }

    } else {
        // Error occurred
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>

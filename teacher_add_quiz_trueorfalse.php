<?php
session_start();
$user_id = $_SESSION['user_id'];

require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $title = $_POST['title'];
    $lesson = $_POST['lesson'];
    $maxScore = $_POST['max'];
    $dateStart = $_POST['date_start'];
    $allowLate = isset($_POST['allow']) ? 1 : 0;
    $grading = $_POST['grading'];
    $due = $_POST['due'];
    $gradingScore = $_POST['grading_score'];
    $attempts = $_POST['attempts'];
    $instructions = $_POST['instructions'];
    $questions = $_POST['question'];
    $correctChoices = $_POST['choices'];

    // Insert quiz options into the database
    $sql = "INSERT INTO tbl_quiz_options (added_by, title, lesson, max_score, date_start, allow_late, grading, due, grading_score, attempts, instructions) VALUES ('$user_id', '$title', '$lesson', '$maxScore', '$dateStart', $allowLate, '$grading', '$due', '$gradingScore', '$attempts', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        $quiz_options_id = mysqli_insert_id($conn);

        // Loop through the questions and choices
        for ($i = 0; $i < count($questions); $i++) {
            $question_text = $questions[$i];
            $correct_choice = $correctChoices[$i]['correct'];

            // Insert the question and choices into tbl_quiz_true_or_false
            $sql = "INSERT INTO tbl_quiz_true_or_false (quiz_options_id, question, correct_choice) VALUES ($quiz_options_id, '$question_text', '$correct_choice')";

            if ($conn->query($sql) === TRUE) {
                // Success message or redirect if needed
            } else {
                // Error occurred
                echo "Error: " . mysqli_error($conn);
            }
        }

        // Redirect to a success page or show a success message
        header("Location: Teacher_index.php?msg=Quiz - true or false added successfully");
        exit();
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>

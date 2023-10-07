<?php
session_start();
include 'dbcon.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if (isset($_POST['btnSubmit'])) {
        $userAnswers = $_POST; // Get user's answers from the form

        // Function to calculate the score
        function calculateScore($userAnswers, $conn)
        {
            // Initialize the score
            $score = 0;

            // Loop through the user answers and compare with correct answers in the database
            foreach ($userAnswers as $questionNumber => $userAnswer) {
                // Check if the input name corresponds to a question (e.g., customRadio1, customRadio2, etc.)
                if (strpos($questionNumber, 'customRadio') !== false) {
                    // Extract the question number from the input name
                    $questionNumber = str_replace('customRadio', '', $questionNumber);

                    // Fetch the correct answer from the database based on the question number
                    $query = "SELECT is_right FROM question_opt WHERE question_id = $questionNumber";
                    $result = mysqli_query($conn, $query);

                    // Check if the query was successful and a correct answer was found
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $correctAnswer = $row['is_right'];

                        // Debugging: Output the correct answer and user's answer for this question
                        echo "Question $questionNumber: Correct Answer = $correctAnswer, User's Answer = $userAnswer<br>";

                        // Compare the user's answer with the correct answer
                        if ($userAnswer === $correctAnswer) {
                            $score++; // Increase the score for a correct answer
                        }
                    }
                }
            }

            return $score;
        }

        // Calculate the user's score
        $userScore = calculateScore($userAnswers, $conn);

        // Debugging: Output the user's score
        echo "User's Score: $userScore";
    }
}
?>
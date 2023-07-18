<?php
session_start();
include 'dbcon.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $name = $_POST['name'];
    $objective = $_POST['objective'];
    $type = $_POST['type'];
    $files = $_FILES['lesson'];

    // Ensure $files is an array
    if (!is_array($files['name'])) {
        die("Invalid file input.");
    }

    $file_count = count($files['name']);

    $lesson_files_ids = [];

    for ($i = 0; $i < $file_count; $i++) {
        $file_name = $files['name'][$i];
        $file_tmp = $files['tmp_name'][$i];
        $file_size = $files['size'][$i];
        $file_error = $files['error'][$i];

        if ($file_error !== UPLOAD_ERR_OK) {
            die("Error uploading the file.");
        }

        if ($file_size > 10000000) {
            die("File size is too big.");
        }

        $lesson_name = $file_name;

        $target_dir = "teachers/lessons/";
        $target_path = $target_dir . $lesson_name;

        if (!move_uploaded_file($file_tmp, $target_path)) {
            die("Error moving the uploaded file.");
        }

        $sql = "INSERT INTO tbl_lesson_files (lesson, added_by, status) VALUES ('$lesson_name', '$user_id', 2)";

        if ($conn->query($sql) === TRUE) {
            $lesson_files_ids[] = $conn->insert_id;
        } else {
            die("Error inserting data into tbl_lesson_files: " . $conn->error);
        }
    }

    if (!empty($lesson_files_ids)) {
        $lesson_files_ids_str = implode(",", $lesson_files_ids);

        $sql = "INSERT INTO tbl_lesson (name, objective, type, lesson_files_id, added_by) VALUES ('$name', '$objective', '$type', '$lesson_files_ids_str', '$user_id')";

        if ($conn->query($sql) === TRUE) {
            $lesson_id = $conn->insert_id;

            $sql = "INSERT INTO tbl_module (module_name, module_description, category) VALUES (' ', ' ', ' ')";

                if ($conn->query($sql) === TRUE) {
                    $module_id = $conn->insert_id;

                    $sql = "INSERT INTO tbl_content (lesson_id, module_id) VALUES ('$lesson_id', '$module_id')";

                if ($conn->query($sql) === TRUE) {
                    header("Location: Teacher_uploadlesson.php?msg=Lesson uploaded successfully");
                    exit();
                } else {
                    die("Error inserting data into tbl_content: " . $conn->error);
                }
            } else {
                die("Error inserting data into tbl_module: " . $conn->error);
            }
        } else {
            die("Error inserting data into tbl_lesson: " . $conn->error);
        }
    } else {
        die("Please select at least one file.");
    }
} else {
    echo "No user ID provided";
}
?>

<?php
include("../../include/connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['student_id']) && isset($_POST['edit_first_name']) && isset($_POST['edit_last_name']) && isset($_POST['edit_email']) && isset($_POST['edit_phone'])) {
        $student_id = $_POST['student_id'];
        $edit_first_name = $_POST['edit_first_name'];
        $edit_last_name = $_POST['edit_last_name'];
        $edit_email = $_POST['edit_email'];
        $edit_phone = $_POST['edit_phone'];

        // Update student information in the database
        $update_query = "UPDATE students SET first_name='$edit_first_name', last_name='$edit_last_name', email='$edit_email', phone='$edit_phone' WHERE id='$student_id'";
        $update_result = mysqli_query($connection, $update_query);

        if ($update_result) {
            $_SESSION['success'] = "Student information updated successfully!";
            header("Location:  ../student_information_page_data.php"); // Redirect to the page where student records are displayed
            exit();
        } else {
            $_SESSION['error'] = "Failed to update student information!";
            header("Location:  ../student_information_page_data.php"); // Redirect to the page where student records are displayed
            exit();
        }
    } else {
        $_SESSION['error'] = "All fields are required!";
        header("Location:  ../student_information_page_data.php"); // Redirect to the page where student records are displayed
        exit();
    }
} else {
    // Redirect to index page if accessed directly without POST request
    header("Location: ../student_information_page_data.php");
    exit();
}
?>

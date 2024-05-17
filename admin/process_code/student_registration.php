<?php

session_start();
include("../../include/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and escape input
    $student_id = mysqli_real_escape_string($connection, $_POST['student_id']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $dob = mysqli_real_escape_string($connection, $_POST['dob']);

    // Insert student data into the database
    $query = "INSERT INTO students (student_id, username, password, first_name, last_name, email, phone, address, dob, created_at)
              VALUES ('$student_id', '$username', '$password', '$first_name', '$last_name', '$email', '$phone', '$address', '$dob', NOW())";

    if (mysqli_query($connection, $query)) {
        $_SESSION['success'] = "Student registered successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);

    header("Location: ../student_registration_page.php");
    exit();
}
?>

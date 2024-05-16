<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = htmlspecialchars($_POST['studentName']);
    $studentEmail = htmlspecialchars($_POST['studentEmail']);
    $studentPhone = htmlspecialchars($_POST['studentPhone']);
    $studentGrade = htmlspecialchars($_POST['studentGrade']);
    $orgName = htmlspecialchars($_POST['orgName']);
    $personalStatement = htmlspecialchars($_POST['personalStatement']);

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "soms_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO registrations (student_name, student_email, student_phone, student_grade, organization_name, personal_statement) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssss", $studentName, $studentEmail, $studentPhone, $studentGrade, $orgName, $personalStatement);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Registration submitted successfully";
            $_SESSION['message_type'] = "alert-success";
        } else {
            $_SESSION['message'] = "Error: " . $stmt->error;
            $_SESSION['message_type'] = "alert-danger";
        }

        $stmt->close();
    } else {
        $_SESSION['message'] = "Error preparing statement: " . $conn->error;
        $_SESSION['message_type'] = "alert-danger";
    }

    $conn->close();

    header("Location: ../organization_page.php");
    exit();
}
?>

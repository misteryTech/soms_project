<?php
// Start or resume session
session_start();

// Include the database connection
include("../../include/connection.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input data
    $organization_name = mysqli_real_escape_string($connection, $_POST['organization_name']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $advisor_name = mysqli_real_escape_string($connection, $_POST['advisor_name']);
    $contact_email = mysqli_real_escape_string($connection, $_POST['contact_email']);

    // Insert data into the database
    $query = "INSERT INTO organizations (organization_name, department, advisor_name, contact_email, registration_date)
              VALUES ('$organization_name', '$department', '$advisor_name', '$contact_email', NOW())";

    if (mysqli_query($connection, $query)) {
        // Registration successful
        $_SESSION['success'] = "Organization registered successfully!";
        // Redirect the user to a success page or back to the registration form
        header("Location: ../organization_registration_page.php");
        exit(); // Exit the script after redirecting
    } else {
        // Registration failed
        $_SESSION['error'] = "Error: " . mysqli_error($connection);
        // Redirect the user back to the registration form
        header("Location: ../organization_registration_page.php");
        exit(); // Exit the script after redirecting
    }
} else {
    // If the form is not submitted, redirect to the registration form page
    header("Location: ../organization_registration_page.php");
    exit(); // Exit the script after redirecting
}
?>

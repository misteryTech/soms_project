<?php 
include("include/connection.php");


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) == 1){
        header("Location: admin/admin_dashboard.php");
        } else {
            echo "Invalid Username or Password";
            }
            }
            ?>








?>
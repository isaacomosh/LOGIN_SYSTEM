<?php

session_start();

// Check if form submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Get username from form
    $username = $_POST["username"];

    // Store username in session
    $_SESSION["username"] = $username;

    // Redirect to welcome page
    header("Location: welcome_message.php");

    exit();

}else{

    echo "Invalid Request";

}

?>
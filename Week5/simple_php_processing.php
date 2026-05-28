<?php

session_start();

// Check if form submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Get username from form
    $username = $_POST["username"];

    // Store username in session
    $_SESSION["username"] = $username;

    // Check if user is admin
    if($username == "admin"){

        // Redirect admin to dashboard
        header("Location: dashboard.php");

    }else{

        // Redirect normal users
        header("Location: welcome_message.php");

    }

    exit();

}else{

    echo "Invalid Request";

}

?>
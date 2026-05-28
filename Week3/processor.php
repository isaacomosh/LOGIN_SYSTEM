<?php

// Check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Receive form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    // Validation
    if(empty($fullname) || empty($email) || empty($course)){

        echo "
        <h2 style='color:red;'>
            All fields are required!
        </h2>
        ";

    }else{

        echo "
        <h1>Form Submitted Successfully</h1>
        ";

        echo "
        <p><strong>Full Name:</strong> $fullname</p>
        ";

        echo "
        <p><strong>Email:</strong> $email</p>
        ";

        echo "
        <p><strong>Course:</strong> $course</p>
        ";
    }

}else{

    echo "Invalid Request";

}

?>
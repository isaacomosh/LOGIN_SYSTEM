<?php
//database conection syntax
$conn = mysqli_connect("localhost", "root", "", "Week5db");

if($conn){
    echo "Connected Successfully";
} else {
    echo "Connection Failed";
}

?>

<?php

include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION["username"] = $username;
            echo "Login Successful";
        }else{
            echo "Wrong Password";
        }
    }else{
        echo "User Not Found";
    }
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "Week5db");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";

if(mysqli_query($conn, $sql)){
    header("Location: dashboard.php");
}else{
    echo "Failed to delete";
}
?>
<?php

$conn = mysqli_connect("localhost", "root", "", "Week5db");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container-fluid p-4">

    <h4 class="mb-5">Welcome Admin</h4>

    <?php
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="user-card d-flex justify-content-between align-items-center">

        <div class="username">
            <?php echo $row['username']; ?>
        </div>

        <div class="buttons d-flex gap-3">

            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn custom-btn">
                Edit
            </a>

            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn custom-btn">
                Delete
            </a>

        </div>

    </div>

    <?php
        }
    }else{
        echo "<p>No users found</p>";
    }
    ?>

</div>

</body>
</html>
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

    <div class="container mt-5">

        <h1 class="mb-4">
            Welcome 
            <?php echo $_SESSION["username"]; ?>
        </h1>

        <!-- Link to Contact Page -->
        <a href="contact.php" class="btn btn-dark">
            Go to Contact Page
        </a>

    </div>

</body>
</html>
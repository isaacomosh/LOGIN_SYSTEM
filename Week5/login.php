

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

 

    <form action="./simple_php_processing.php" method="POST">

        <!-- Username -->
        <label>Username:</label><br>
        <input 
            type="text" 
            name="username" 
            placeholder="Enter username"
            required
        >
        <br><br>

        <!-- Password -->
        <label>Password:</label><br>
        <input 
            type="password" 
            name="password" 
            placeholder="Enter password"
            required
        >
        <br><br>

        <!-- Submit Button -->
        <input type="submit" value="Login">

    </form>

</body>
</html>
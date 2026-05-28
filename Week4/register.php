<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>

 

    <form action="register.php" method="POST">

        <!-- Full Name -->
        <label>Full Name:</label><br>
        <input 
            type="text" 
            name="fullname" 
            placeholder="Enter full name"
            required
        >
        <br><br>

        <!-- Email -->
        <label>Email:</label><br>
        <input 
            type="email" 
            name="email" 
            placeholder="Enter email"
            required
        >
        <br><br>

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

        <!-- Confirm Password -->
        <label>Confirm Password:</label><br>
        <input 
            type="password" 
            name="confirm_password" 
            placeholder="Confirm password"
            required
        >
        <br><br>

        <!-- Submit Button -->
        <input type="submit" value="Register">

    </form>

</body>
</html>
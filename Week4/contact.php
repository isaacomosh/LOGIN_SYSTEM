

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>

    

    <form action="contact.php" method="POST">

        <!-- Full Name -->
        <label>Full Name:</label><br>
        <input 
            type="text" 
            name="fullname" 
            placeholder="Enter your name"
            required
        >
        <br><br>

        <!-- Email -->
        <label>Email Address:</label><br>
        <input 
            type="email" 
            name="email" 
            placeholder="Enter your email"
            required
        >
        <br><br>

        <!-- Subject -->
        <label>Subject:</label><br>
        <input 
            type="text" 
            name="subject" 
            placeholder="Enter subject"
            required
        >
        <br><br>

        <!-- Message -->
        <label>Message:</label><br>
        <textarea 
            name="message" 
            rows="5" 
            cols="30"
            placeholder="Write your message"
            required
        ></textarea>
        <br><br>

        <!-- Submit Button -->
        <input type="submit" value="Send Message">

    </form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="contact_process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" rows="5" required></textarea><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

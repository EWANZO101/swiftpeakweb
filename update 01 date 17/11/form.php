<!DOCTYPE html>
<html>
<head>
    <title>Generic Form</title>
</head>
<body>
    <h1>Generic Form</h1>
    <form method="post" action="form_process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

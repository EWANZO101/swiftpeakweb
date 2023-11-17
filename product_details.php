<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>

    <?php
    // Check if a product ID is provided for displaying details (Replace with your connection code)
    $product_id = $_GET['id'] ?? null;

    if (!$product_id) {
        echo "<p>No product ID provided for details.</p>";
    } else {
        // Connect to the database (Replace with your connection code)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "your_database_name";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve product data based on the provided ID
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <h2><?php echo $row['product_name']; ?></h2>
            <p>Description: <?php echo $row['description']; ?></p>
            <p>Price: $<?php echo $row['price']; ?></p>
            <!-- Display other product details as needed -->
        <?php
        } else {
            echo "<p>Product not found.</p>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>

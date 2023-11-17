<!DOCTYPE html>
<html>
<head>
    <title>Product Listing</title>
</head>
<body>
    <h1>Product Listing</h1>

    <?php
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

    // Retrieve all products from the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display product data in a list
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='product_details.php?id=" . $row['id'] . "'>" . $row['product_name'] . "</a></li>";
            // Display other product information as needed
        }
        echo "</ul>";
    } else {
        echo "<p>No products found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

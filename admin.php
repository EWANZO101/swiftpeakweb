<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>

    <?php
    // Connect to the database (Replace with your connection code)
    $servername = "localhost";
    $username = "admin";
    $password = "Nt4MV6m8csRx26JRXHMq8oRWDCVodPDRHcQ5dhoBrRWcYaC648NYFzvjUjfeDEWsoMXGapFzHspkXUR9WuFuc8i3Nsc!";
    $dbname = "swiftpeakweb";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example functionality: Display all products in the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display product data in a table
        echo "<h2>All Products:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Product Name</th><th>Description</th><th>Price</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["product_name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            // Include other product attributes as needed
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No products found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

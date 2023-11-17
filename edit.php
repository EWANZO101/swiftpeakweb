<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <?php
    // Check if an ID is provided for editing (Replace with your connection code)
    $product_id = $_GET['id'] ?? null;

    if (!$product_id) {
        echo "<p>No product ID provided for editing.</p>";
    } else {
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

        // Retrieve product data based on the provided ID
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="edit_process.php">
                <!-- Input fields for editing product information -->
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Product Name:</label>
                <input type="text" name="name" value="<?php echo $row['product_name']; ?>"><br>

                <label for="description">Description:</label><br>
                <textarea name="description" rows="5"><?php echo $row['description']; ?></textarea><br>

                <label for="price">Price:</label>
                <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>

                <button type="submit" name="submit">Update</button>
            </form>
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

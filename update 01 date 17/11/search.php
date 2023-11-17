<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
</head>
<body>
    <h1>Search</h1>
    <form method="get">
        <!-- Input field for search query -->
        <input type="text" name="query" placeholder="Search for products">
        <button type="submit" name="search">Search</button>
    </form>

    <?php
    // Check if search form is submitted
    if (isset($_GET['search'])) {
        // Get the search query from the form
        $search_query = $_GET['query'];

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

        // Prepare and execute a query to search for products (Replace with your table and column names)
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$search_query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display search results
            echo "<h2>Search Results:</h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["product_name"] . "</li>";
                // Display other product information as needed
            }
            echo "</ul>";
        } else {
            echo "<p>No results found.</p>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>

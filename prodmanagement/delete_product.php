<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the POST request
    $productId = $_POST['id'];


    // Database connection parameters
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_database";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully!";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $conn->close();
}
?>

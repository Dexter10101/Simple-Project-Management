<?php
// save_to_database.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract totalValue from the POST request
    $calculateTotalValue = $_POST['calculateTotalValue'];

    // TODO: Implement database connection and save logic here

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

    // TODO: Insert the totalValue into the database table
    $sql = "INSERT INTO products (inventory_cost) VALUES ('$calculateTotalValue')";

    if ($conn->query($sql) === TRUE) {
        echo "Total value saved to the database successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

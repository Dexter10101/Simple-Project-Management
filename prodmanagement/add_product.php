<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the POST request
    $productName = $_POST['productName'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expiryDate = $_POST['expiryDate'];
    $inventory = $_POST['inventory'];
    $productImage = $_POST['productImage'];


    



    // Database connection parameters
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_database";
            


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the new product into the database
    $sql = "INSERT INTO products (product_name, unit, price, expiry_date, available_inventory, product_image)
            VALUES ('$productName', '$unit', '$price', '$expiryDate', '$inventory',  '$productImage')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . $conn->error;
    }



    $conn->close();
}


  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run the SQL UPDATE query
$sql = "UPDATE products
        SET expired_date_words = DATE_FORMAT(STR_TO_DATE(expiry_date, '%Y-%m-%d'), '%M %e, %Y')";

if ($conn->query($sql) === FALSE) {
    echo "Error updating expired_date_words column: " . $conn->error;
}

$conn->close();






?>

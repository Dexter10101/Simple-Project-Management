<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['id'];
    $productName = $_POST['productName'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expiryDate = $_POST['expiryDate'];
    $inventory = $_POST['inventory'];
    $productImage = $_POST['productImage'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE products SET
            product_name = '$productName',
            unit = '$unit',
            price = '$price',
            expiry_date = '$expiryDate',
            available_inventory = '$inventory',
            product_image = '$productImage'
            WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . $conn->error;
    }




  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE products
        SET expired_date_words = DATE_FORMAT(STR_TO_DATE(expiry_date, '%Y-%m-%d'), '%M %e, %Y')";

if ($conn->query($sql) === FALSE) {
    echo "Error updating expired_date_words column: " . $conn->error;
}


    $conn->close();
}
?>

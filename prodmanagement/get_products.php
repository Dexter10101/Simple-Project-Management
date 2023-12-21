<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['unit'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['expired_date_words'] . "</td>";
        echo "<td>" . $row['available_inventory'] . "</td>";
        echo "<td>" . $row['inventory_cost'] . "</td>";
        echo "<td><img src='" . $row['product_image'] . "' alt='Product Image' style='width:50px;height:50px;'></td>";
           echo "<td><button onclick='openEditModal(" . $row['id'] . ", \"" . $row['product_name'] . "\", \"" . $row['unit'] . "\", " . $row['price'] . ", \"" . $row['expiry_date'] . "\", " . $row['available_inventory'] . ", \"" . $row['product_image'] . "\")'>Edit</button></td>"; 
        echo "<td><button onclick='deleteProduct(" . $row['id'] . ")'>Delete</button></td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No products found</td></tr>";
}


$conn->close();




?>

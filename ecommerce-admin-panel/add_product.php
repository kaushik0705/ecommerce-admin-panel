<?php
include 'db_connect.php';

$name = "T-Shirt";
$description = "High-quality cotton t-shirt";
$price = 499.99;
$stock = 50;
$image = "tshirt.jpg";

$sql = "INSERT INTO products (name, description, price, stock, image) 
        VALUES ('$name', '$description', '$price', '$stock', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
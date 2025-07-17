<?php
session_start();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    $_SESSION['user_details'] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone']
    ];
    header("Location: payment.php");
    exit();
}
?>
<!-- HTML for order summary and billing form goes here -->
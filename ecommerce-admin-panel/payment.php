<?php
session_start();
if (!isset($_SESSION['user_details']) || empty($_SESSION['cart'])) {
    header("Location: checkout.php");
    exit();
}
$order_total = array_sum(array_column($_SESSION['cart'], 'price'));
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pay_now'])) {
    unset($_SESSION['cart']);
    header("Location: order_success.php");
    exit();
}
?>
<!-- HTML for showing total and fake payment button -->
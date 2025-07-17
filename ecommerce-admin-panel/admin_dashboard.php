<?php
include 'db_connect.php';
$sql = "SELECT id, user_id, total_price, payment_status, order_status, created_at FROM orders ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!-- HTML to display orders in a table -->
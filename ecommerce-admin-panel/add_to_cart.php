<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$products = [
    "PLAN001" => ["name" => "HUSTLE Blue Oversized Tshirt", "price" => 549, "image" => "img1.jpg"],
    "PLAN002" => ["name" => "Premium Black Hoodie", "price" => 899, "image" => "img2.jpg"]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['plan_id']) && isset($_POST['size'])) {
    $plan_id = $_POST['plan_id'];
    $size = $_POST['size'];

    if (isset($products[$plan_id])) {
        $_SESSION['cart'][] = [
            'plan_id' => $plan_id,
            'name' => $products[$plan_id]['name'],
            'price' => $products[$plan_id]['price'],
            'image' => $products[$plan_id]['image'],
            'quantity' => 1,
            'size' => $size
        ];
    }

    header("Location: cart.php");
    exit();
}
?>
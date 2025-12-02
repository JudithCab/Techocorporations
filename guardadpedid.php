<?php
$conn = new mysqli("localhost", "root", "", "tecno_corporationsvf");

$producto = $_POST['producto'];
$precio = $_POST['precio'];

$sql = "INSERT INTO pedidos (producto, precio) VALUES ('$producto', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

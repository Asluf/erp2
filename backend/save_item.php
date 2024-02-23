<?php
include('conn.php');

$code = $_POST['item_code'];
$category = $_POST['item_category'];
$subcategory = $_POST['item_subcategory'];
$name = $_POST['item_name'];
$quantity = $_POST['quantity'];
$uprice = $_POST['unit_price'];

$sql = "INSERT INTO item (item_code, item_category, item_subcategory, item_name, quantity, unit_price)
        VALUES ('$code', $category, $subcategory,'$name', '$quantity', '$uprice')";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

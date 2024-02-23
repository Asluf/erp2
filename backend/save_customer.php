<?php
include('conn.php');

$title = $_POST['title'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$contact_no = $_POST['contact_number'];
$district = $_POST['district'];

$sql = "INSERT INTO customer (title, first_name, middle_name, last_name, contact_no, district)
        VALUES ('$title', '$fname', '', '$lname', '$contact_no', $district)";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

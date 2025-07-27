<?php
include 'database/db_connect.php';

$own_home = $_POST['own_home'];
$own_solar = $_POST['own_solar'];
$electric_bill = $_POST['electric_bill'];
$how_soon = $_POST['how_soon'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$p_number = $_POST['p_number'];
$best_time = $_POST['best_time'];

$stmt = $conn->prepare("INSERT INTO details_for_quote (own_home, own_solar, electric_bill, how_soon, full_name, email, p_number, best_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $own_home, $own_solar, $electric_bill, $how_soon, $full_name, $email, $p_number, $best_time);

if ($stmt->execute()) {
  echo "The form has been successfully submitted.";
} else {
  echo "Something went wrong during execution:  . $stmt->error";
}

$stmt->close();
$conn->close();

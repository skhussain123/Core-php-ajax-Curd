<?php


include "config.php";

$fullName = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];



$sql = "INSERT INTO userdata (Name, Email, Password) VALUES ('$fullName','$email','$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

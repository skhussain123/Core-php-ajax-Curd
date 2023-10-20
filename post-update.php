<?php
include "config.php";

$fullName = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$id = $_POST["id"];



$sql = "UPDATE `userdata` SET `Name`='$fullName', `Email`='$email', `Password`='$password' WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record updated successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

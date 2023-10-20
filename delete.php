<?php

include 'config.php';

if ($_GET['id']) {

    echo  $id = $_GET['id'];

    $sql = "SELECT * from userdata WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if ($result = mysqli_num_rows($query) > 0) {

        $delete = "DELETE  From userdata WHERE id='$id'";
        $query = mysqli_query($conn, $delete);

        if ($query == true) {

            header('Location:index.php?message=User Delete Success');
        }
    } else {

        echo 'User Not Register';
    }
} else {

    echo 'NO Recorde Found';
}

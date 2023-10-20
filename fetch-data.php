<?php

include 'config.php';

$sql = "SELECT * FROM userdata";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    ?><table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            
        </thead>
        <tbody>
            <?php
             while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Password']?></td>
                    <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                </tr><?php
            }
            
            
            ?>

        </tbody>
    </table>
   <?php
   }
   else {
    echo "No records found";
}
?>

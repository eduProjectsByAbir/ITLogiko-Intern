<?php
include "includes/header.php";
include "includes/view_data.php";
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Education</th>
            <th scope="col">Bio</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <th scope='row'>".$row['id']."</th>
                    <td>".$row['fname']."</td>
                    <td>".$row['lname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['education']."</td>
                    <td>".$row['bio']."</td>
                    <td></td>
                </tr>
                ";
            }
        }
        ?>
    </tbody>
</table>
<?php include "includes/footer.php"; ?>
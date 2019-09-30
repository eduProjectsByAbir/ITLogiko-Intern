<?php include "includes/header.php" ?>
<?php
include "db/conn.php";
$gid = $_GET['id'];
if (!empty($gid)) {
    $query = "SELECT * FROM `customers` WHERE `id` = $gid";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto p-auto">
                    <div class="main-title" id="main-content">
                        <form action="includes/edit_data.php" method="post" enctype="multipart/form-data" class="form-group" id="form2">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-row">
                                <div class="col">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>" class="form-control" onchange="nameCheck()">
                                </div>
                                <div class="col">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" value="<?php echo $row['lname']; ?>" class="form-control" onchange="nameCheck()">
                                </div>
                            </div>
                            <span id="wfname"></span>
                            <div class="form-row">
                                <div class="col">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control" onchange="validateemail()" required>
                                </div>
                            </div>
                            <span id="wemail"></span>
                            <div class="row">
                                <label for="gender" class="col pt-3">Gender</label>
                                <div class="col pt-3"><input type="radio" name="gender" value="male" id="gender" checked> Male</div>
                                <div class="col pt-3"><input type="radio" name="gender" value="female" id="genderF"> Female</div>
                                <div class="col pt-3"><input type="radio" name="gender" value="gender" id="genderO"> Others</div>
                            </div>
                            <div class="row pt-2">
                                <div class="col pt-2">
                                    <label for="dob">Date of Birth</label>
                                </div>
                                <div class="col pt-2">
                                    <input type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" class="form-control" onchange="checkForm()">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="edu">Education</label>
                                    <input type="text" name="education" id="edu" value="<?php echo $row['education']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="bio">Bio</label>
                                    <input type="text" name="bio" id="bio" value="<?php echo $row['bio']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pt-4">
                                    <input type="submit" value="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php     }
} else {
    header("Location: index.php");
}
?>
<?php include "includes/footer.php" ?>
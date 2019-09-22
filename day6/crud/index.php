<?php include "includes/header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto p-auto">
            <div class="main-title">
                <form action="includes/add_data.php" method="post" enctype="multipart/form-data" class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <label for="gender" class="col pt-3">Gender</label>
                        <div class="col pt-3"><input type="radio" name="gender" id="gender" checked> Male</div>
                        <div class="col pt-3"><input type="radio" name="gender" id="genderF"> Female</div>
                        <div class="col pt-3"><input type="radio" name="gender" id="genderO"> Others</div>
                    </div>
                    <div class="row pt-2">
                        <div class="col pt-2">
                            <label for="dob">Date of Birth</label>
                        </div>
                        <div class="col pt-2">
                            <input type="date" name="dob" id="dob" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3"><input type="checkbox" name="agr" id="agr"> Do you agree?</div>
                    </div>
                    <div class="row">
                        <div class="col pt-4">
                            <input type="submit" value="submit" name="submit" id="submit"
                                class="btn btn-success btn-lg btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php" ?>
<?php include "includes/header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto p-auto">
            <div class="main-title" id="main-content">
                <form action="includes/add_data.php" method="post" enctype="multipart/form-data" class="form-group" id="form1">
                    <div class="form-row">
                        <div class="col">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="" class="form-control" onchange="nameCheck()">
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="" class="form-control" onchange="nameCheck()">
                        </div>
                    </div>
                    <span id="wfname"></span>
                    <div class="form-row">
                        <div class="col">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" onchange="validateemail()" required>
                        </div>
                    </div>
                    <span id="wemail"></span>
                    <div class="form-row">
                        <div class="col">
                            <label for="password1">Password</label>
                            <input type="password" name="password" id="password1" class="form-control" onchange="passVal()" autocomplete="true" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="password2">Password again</label>
                            <input type="password" name="password2" id="password2" class="form-control" onchange="passVal()" autocomplete="true" required>
                        </div>
                    </div>
                    <span id="wpass"></span>
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
                            <input type="date" name="dob" id="dob" class="form-control" onchange="checkForm()">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="edu">Education</label>
                            <input type="text" name="education" id="edu" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="bio">Bio</label>
                            <input type="text" name="bio" id="bio" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3"><input type="checkbox" name="agr" id="agr" onchange="document.querySelector('#submit').disabled = !this.checked;"> Do you agree?</div>
                    </div>
                    <div class="row">
                        <div class="col pt-4">
                            <input type="submit" value="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
<?php include "includes/footer.php" ?>
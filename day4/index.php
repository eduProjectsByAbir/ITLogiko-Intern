<?php
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nameErr = $emailErr = $genderErr = $fileErr = "";
$name    = $email    = $gender = $file = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $nameErr = "Only letters and white space allowed";
        } else {
            $name = test_input($_POST["name"]);
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = test_input($_POST["email"]);
        }
    }
    if(empty($_FILES["file"])){
        $fileErr = "File is required";
    } else {
        $file = $_FILES["file"];
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
function print_data($name, $email, $file, $comment, $gender){
    echo 'Name: '. $name .'<br>';
    echo 'Email: '. $email .'<br>';
    echo 'File: '. print_r($file, 1) .'<br>';
    echo 'Comment: '. $comment .'<br>';
    echo 'Gender: '. $gender .'<br>';
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
<div class="container">
    <div class="row m-auto">
        <div class="col-md-6 m-auto">
            <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-group">
                Name: <input type="text" name="name" class="form-control">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br><br>
                E-mail:
                <input type="text" name="email" class="form-control">
                <span class="error">* <?php echo $emailErr; ?></span>
                <div class="form-group">
                    <input type="file" name="file" id="file" class="form-control">
                    <span class="error">* <?php echo $fileErr; ?></span>
                </div>
                Comment: <textarea name="comment" rows="5" cols="40" class="form-control"></textarea>
                <div class="form-group">
                    Gender:
                    <input type="radio" name="gender" value="female" class="form-control">Female
                    <input type="radio" name="gender" value="male" class="form-control">Male
                    <input type="radio" name="gender" value="other" class="form-control">Other
                    <span class="error">* <?php echo $genderErr; ?></span>
                </div>
                <br><br>
                <input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
            </form>
        </div>
        <div class="col-md-6">
            <?php
            function_exists('print_data') ? print_data($name, $email, $file, $comment, $gender) : " ";
            ?>
        </div>
    </div>
</div>

</html>
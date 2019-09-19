<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write a PHP program to get the extension of a file.</title>
</head>

<body>

    <?php
    // catching the file over post method
    if(isset($_POST['submit'])){
        $file = $_FILES['file']['name'];
        // getting the file extension
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        // printing the file extension
        echo $ext;
    } else {
        echo '
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Submit" name="submit">
        </form>
        ';
    }
    ?>
</body>

</html>
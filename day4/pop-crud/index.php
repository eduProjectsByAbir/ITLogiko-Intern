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
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <?php session_start(); echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ; session_destroy(); ?>
                <form action="crud.php" method="post" enctype="multipart/form-data" class="form-group">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" placeholder="example@example.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" placeholder=">Choose profile image...">
                        <label class="custom-file-label" for="validated CustomFile">Choose profile image...</label>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio: </label>
                        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Write your bio" class="form-control"></textarea>
                    </div>
                    <div class="form-group m-auto">
                        <input type="submit" value="submit" name="submit" class="btn btn-success btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>





















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
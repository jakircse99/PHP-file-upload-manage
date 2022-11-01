<?php
    // Files type allowed
    $imageFormate = array (
     'image/jpeg',
     'image/png',
     'image/jpg',
    );

    // File upload module
    if($_FILES['photo'] ?? array()) {
        $filecount = count($_FILES['photo']['name']);
        for($i = 0; $i < $filecount; $i++) {
        if(in_array($_FILES['photo']['type'][$i], $imageFormate) && $_FILES['photo']['size'][$i] < 5* 1024 * 1024) {
                move_uploaded_file($_FILES['photo']['tmp_name'][$i], "./files/".$_FILES['photo']['name'][$i]);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file upload</title>

    <!-- milligram css style link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- custom css style link -->
    <style>
        body {
            margin: 50px;
        }
        h2 {
            text-align: center;
        }

    </style>
</head>
<body>
    <!-- main section start -->
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-20">
                <h2>PHP File upload</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo[]" id="photo"></br>
                    <input type="file" name="photo[]" id="photo"></br>
                    <input type="file" name="photo[]" id="photo"></br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- main section end -->
</body>
</html>
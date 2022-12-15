<?php

if (isset($_POST['btn'])) {
    $f_name = $_FILES['file']['name'];
    $t_name = $_FILES['file']['tmp_name'];

    $upload = 'upload/';

    $fupload = move_uploaded_file($t_name, $upload . $f_name);

    if ($fupload) {
        echo '<script>alert("File uploaded successfully")</script>';
    }
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File upload</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        .iden {
            border: 1px solid black;
            text-align: center;
            font-size: larger;
            width: 350px;
            height: 200px;
            margin: -25px 0 0 -25px;
            top: 30%;
            left: 37%;
            position: absolute;
        }

        .sub {
            /* border: 1px solid black; */
            text-align: center;
            font-size: large;
            width: 350px;
            height: 200px;
            margin: 45px 0 0 -25px;
            top: 30%;
            left: 37%;
            position: absolute;
        }

        .btN {
            margin-top: 50px;
            border: navy;
            width: 100px;
            height: 40px;
            border-radius: 150px;
            background-color: skyblue;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="iden">
        <form action="identity.php" method="post" enctype="multipart/form-data">
            <p>Attach an identification document:</p>
            <input type="file" name="file">
            <button type="submit" name="btn">Submit</button>
        </form>
    </div>
    <br>
    <div class="sub">
        <form action="login.php">
            <button type="submit" class="btN">Go to login</button>
        </form>
    </div>

</body>

</html>
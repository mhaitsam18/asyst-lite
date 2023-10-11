<?php
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Asyst</title>
</head>

<style>
    body {
        font-family: 'poppins';
        background-color: #98A8F8;
    }

    .registration-form {
        width: 1100px;
        padding: 150px;
        padding-top: 140px;
        border-radius: 25px;
        background-color: #BCCEF8;

    }

    .logo {
        width: 10px;
        height: 10px;
        padding-top: 10px;
        padding-left: 400px;
    }

    .registration-form form {
        background-color: #F9F9F9;
        max-width: 600px;
        margin: auto;
        padding: 45px 100px;
        border-radius: 20px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form form i {
        font-size: 45px;
        color: #98A8F8;
        padding: 10px 173px 20px;
        /* padding-bottom: 50px; */
    }

    .registration-form input[type='text'],
    .registration-form input[type='password'] {
        font-size: 15px;
        font-family: 'Poppins';
        display: black;
        padding: 5px;
        width: 390px;
    }
</style>

<body>
    <div class="container">
        <!-- Content here -->
        <div class='text-center'>
            <br>
            <h1></h1>
        </div>
        <div class="logo">
            <img src="gambar/logo.png">
        </div>
        <div class="registration-form">
            <form action="" method="post">
                <i class="fa-sharp fa-solid fa-circle-user"></i>
                <div class="form-icon">
                    <!-- <span><i class="icon icon-user"></i></span> -->
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="username" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item" name="password" placeholder="Password" id="password">
                </div>
                <center>
                    <p><label for="remember"><input type="checkbox" name="remember" value="true" /> Remember Me</label></p>
                </center>
                <center> <button type="submit" name="login" class="btn btn-primary">Login</button>
                </center>
            </form>
        </div>
    </div>


</body>

</html>
<?php

session_start();

if ( isset($_SESSION["login"]) ) {

    header ('Location: index.php');
    exit;

}

date_default_timezone_set('Asia/Jakarta');
$hour = date('H');

if ( $hour >= 3 && $hour <= 9 ) {
    $greeting = "Pagi";
} else if ( $hour >= 10 && $hour <= 14 ) {
    $greeting = "Siang";
} else if ( $hour >= 15 && $hour <= 17 ) {
    $greeting = "Sore";
} else if ( $hour >= 18 || $hour <= 2 ) {
    $greeting = "Malam";
}

require 'config.php';



if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);
    $username = $row["username"];

    if ( mysqli_num_rows($result) === 1 ) {

        if ( $password === $row["password"]) {

            $_SESSION["login"] = true;

            header("Location: index.php?username=$username");
            exit;
        }

    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap.css">
    <link rel="stylesheet" href="src/bootstrap.css.map">
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"
      integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Login Page</title>
    <style>
        form input {
            width: 100%;
            border-radius: 13px;
            margin-bottom: 15px;
            padding: 5px 15px;
        }
        form label {
            text-align: left;
            margin-left: 13px;
        }
        .amikom-clr-2 {
            color: #FFAC00;
        }
        .amikom-clr {
            color: #4A1B9D;
        }
        .amikom-btn {
            background-color: #4A1B9D;
            color: white;
        }
        .amikom-btn:hover {
            background-color: #5d2eae;
            color: white;
        }
        .typing {
            color: #FFAC00;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div style="height: 100vh;" class="container-fluid align-content-center d-grid">
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Masuk</h3>
                <form action="" method="post" class="d-grid" >
                    <?php if ( isset($error)) : ?>
                        <p style="color: red;"><i>password atau username salah</i></p>

                    <?php endif ?>


                    <label for="username">Username</label>
                    <input class="mb-4" type="text" name="username" id="username" required>

                    <label for="password">Password</label>
                    <input class="mb-4" type="password" name="password" id="password" required>

                    <button style="width: 70px;" class="mx-auto rounded-4 btn btn-sm amikom-btn" type="submit" name="login">Login</button>

                    <p style="font-size: 15px;" class="mb-0 mt-4">Belum punya akun? <a href="register.php" class="amikom-clr" >Daftar disini</a></p>
                </form>
            </div>
            <div class="col-xl-4 col-sm-6 d-grid align-content-between">
                <h1 style="font-size: 3.5rem;"> <span class="amikom-clr fs-1">Selamat <?= $greeting ?>,</span><br>Yuk buat <span class="amikom-clr-2">RPS</span>-mu <br>dengan <span class="typing"></span></h1>

                <h3 class="amikom-clr" id="runTime"></h3>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
         setInterval(runTime, 1000);
        });
        function runTime() {
          $.ajax({
            url: 'timeScript.php',
            success: function(data) {
               $('#runTime').html(data);
             },
          });
        }
    </script>

    <script>
        const typed = new Typed(".typing", {
            strings: ["Mudah", "Cepat", "Rapi"],
            loop: true,
            typeSpeed: 70,
            backSpeed: 60,
            backDelay: 650,
    });
    </script>

    <script src="src/bootstrap.js" ></script>

</body>
</html>
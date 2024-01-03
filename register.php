<?php

require 'config.php';

if ( isset($_POST["register"]) ) {

    if ( register($_POST) > 0 ) {
        echo "
        <script>
            alert('Berhasil Daftar');
            document.location.href = 'login.php';
        </script>
        
        ";
    } else {
        echo mysqli_error($conn);
    }

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Register Page</title>
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
    </style>
</head>
<body>
    <div style="height: 100vh;" class="container-fluid align-content-center d-grid">
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Daftar</h3>
                <form action="" method="post" class="d-grid" >

                    <label for="fullname">Nama Lengkap</label>
                    <input class="mb-4" type="text" name="fullname" id="fullname" required>
                    
                    <label for="nim">NIM</label>
                    <input class="mb-4" type="text" name="nim" id="nim" required>

                    <label for="username">Username</label>
                    <input class="mb-4" type="text" name="username" id="username" required>

                    <label for="password">Password</label>
                    <input class="mb-4" type="password" name="password" id="password" required>

                    <label for="xpassword">Konfirmasi Password</label>
                    <input class="mb-4" type="password" name="xpassword" id="xpassword" required>

                    <button style="width: 70px;" class="mx-auto rounded-4 btn btn-sm amikom-btn" type="submit" name="register">Daftar</button>

                    <p style="font-size: 15px;" class="mb-0 mt-4">Sudah punya akun? <a href="login.php" class="amikom-clr" >Masuk disini</a></p>

                </form>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js" ></script>

</body>
</html>
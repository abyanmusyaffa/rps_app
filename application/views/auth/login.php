<?php
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
?>
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Masuk</h3>
                <?= $this->session->flashdata('message') ?>
                <form action="<?= base_url('auth') ?>" method="post" class="d-grid">
                    <label for="nik">NIK</label>
                    <input class="mb-0" type="text" name="nik" id="nik">
                    <?= form_error('nik', '<small class="error text-danger">', '</small>'); ?>

                    <label class="mt-4" for="password">Password</label>
                    <input class="mb-0" type="password" name="password" id="password">
                    <?= form_error('password', '<small class="error text-danger">', '</small>'); ?>

                    <button style="width: 70px;" class="mx-auto rounded-4 btn btn-sm amikom-btn mt-3" type="submit" name="login">Login</button>

                    <!-- <p style="font-size: 15px;" class="mb-0 mt-4">Belum punya akun? <a href="<?= base_url('auth/register') ?>" class="amikom-clr" >Daftar disini</a></p> -->
                </form>
            </div>
            <div class="col-xl-4 col-sm-6 d-grid align-content-between">
                <h1 style="font-size: 3.5rem;"> <span class="amikom-clr fs-1">Selamat <?= $greeting ?>,</span><br>Yuk buat <span class="amikom-clr-2">RPS</span><br>dengan <span class="typing"></span></h1>

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
            url: '<?= base_url("assets/") ?>'+'timeScript.php',
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
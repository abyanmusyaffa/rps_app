
        <div class="row justify-content-evenly">
            <div style=" border-radius: 50px; background: #ffffff;box-shadow:  20px -20px 60px #d9d9d9, -20px 20px 60px #ffffff;" class="col-xl-3 col-sm-6 bg-white text-center px-5 py-4 rounded-5">
                <h3 class="mb-4 amikom-clr">Daftar</h3>
                <form action="" method="post" class="d-grid" >

                    <label for="fullname">Nama Lengkap</label>
                    <input class="mb-4" type="text" name="fullname" id="fullname" required>
                    
                    <label for="nim">NIK</label>
                    <input class="mb-4" type="text" name="nim" id="nim" required>

                    <label for="password">Password</label>
                    <input class="mb-4" type="password" name="password" id="password" required>

                    <label for="xpassword">Konfirmasi Password</label>
                    <input class="mb-4" type="password" name="xpassword" id="xpassword" required>

                    <button style="width: 70px;" class="mx-auto rounded-4 btn btn-sm amikom-btn" type="submit" name="register">Daftar</button>

                    <p style="font-size: 15px;" class="mb-0 mt-4">Sudah punya akun? <a href="<?= base_url('auth') ?>" class="amikom-clr" >Masuk disini</a></p>

                </form>
            </div>
        </div>
    </div>

    
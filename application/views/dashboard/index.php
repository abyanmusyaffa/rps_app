
        <div style="height: 100vh;" class="row">
            <div class="col-2 amikom-bg p-4">
                <a class="ms-2" href="<?= base_url('auth/logout') ?>"><i class="fa-solid fa-power-off fa-xl" style="color: #ffffff;"></i></a>
                
                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-5  d-block" href="">
                    <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i> Dashboard
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('create') ?>">
                    <i class="fa-solid fa-folder-plus fa-sm" style="color: #ffffff;"></i> Buat RPS
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('daftar') ?>">
                    <i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i> Daftar RPS
                </a>

            </div>
            <div class="col-10 p-4 px-5">
                <h2 class="text-center">Selamat Datang, <br>
                <span class="amikom-clr"><?= $user['fullname'] ?></span>
                </h2>
                <h5 class="mb-5 text-center amikom-clr-2"><?= $user['nik'] ?></h5>
                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">RPS Terkini</h5>

                <table class="table table-striped table-hover">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SKS</th>
                        <th scope="col" style="width: 6%;">Apa?</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($identitas as $idn )  : ?>
                        <tr>
                            <td class="text-center"><?= $idn['nama_mata_kuliah'] ?></td>
                            <td class="text-center"><?= $idn['kode'] ?></td>
                            <td class="text-center"><?= $idn['program_studi'] ?></td>
                            <td class="text-center"><?= $idn['semester'] ?></td>
                            <td class="text-center"><?= $idn['bobot_sks'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url() ?>preview/index/<?= $idn['idi'] ?>"><i class="fa-solid fa-rectangle-list "></i></a> <br>
                                <a href="<?= base_url() ?>view/index/<?= $idn['idi'] ?>" target="_blank"><i class="fa-solid fa-eye "></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
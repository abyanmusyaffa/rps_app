
        <div style="height: 100vh;" class="row">
            <div class="col-2 amikom-bg p-4">
                <a class="ms-2" href="<?= base_url('auth/logout') ?>"><i class="fa-solid fa-power-off fa-xl" style="color: #ffffff;"></i></a>
                
                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-5  d-block" href="<?= base_url('dashboard') ?>">
                    <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i> Dashboard
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('create') ?>">
                    <i class="fa-solid fa-folder-plus fa-sm" style="color: #ffffff;"></i> Buat RPS
                </a>

                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="">
                    <i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i> Daftar RPS
                </a>

            </div>
            <div class="col-10 p-4 px-5">

                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">Daftar RPS</h5>

                <form action="<?= base_url('daftar') ?>" method="post">
                    <input id="search" type="text" name="keyword" placeholder="Cari RPS">
                    <input class="btnSearch amikom-btn mb-3" type="submit" name="submit" value="Cari">
                </form>

                <table class="table table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Apa?</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($identitas as $m) : ?>
                        <tr>
                            <th class="text-center" scope="row"><?= $i ?></th>
                            <td><?= $m['nama_mata_kuliah'] ?></td>
                            <td class="text-center"><?= $m['kode'] ?></td>
                            <td class="text-center"><?= $m['program_studi'] ?></td>
                            <td class="text-center"><?= $m['semester'] ?></td>
                            <td class="text-center"><?= $m['bobot_sks'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url() ?>preview/index/<?= $m['idi'] ?>"><i class="fa-solid fa-rectangle-list " ></i></a>
                                <a href="<?= base_url() ?>view/index/<?= $m['idi'] ?>" target="_blank"><i class="fa-solid fa-eye " ></i></a>
                                <a href="<?= base_url() ?>daftar/del/<?= $m['idi'] ?>" onclick="return confirm('Anda yakin menghapus RPS ini?')"><i class="fa-solid fa-trash " ></i></a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
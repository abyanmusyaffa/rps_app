<?php
$message = $this->session->flashdata('message');
if (!empty($message)) {
    echo '<script>alert("' . $message . '");</script>';
}
?>

        <div style="height: 100vh;" class="row" id="myTabContent">
            <div class="col-2 amikom-bg p-4">
                <a class="ms-2" href="<?= base_url('auth/logout') ?>"><i class="fa-solid fa-power-off fa-xl" style="color: #ffffff;"></i></a>
                
                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-5  d-block" href="<?= base_url('dashboard') ?>">
                    <i class="fa-solid fa-chart-line fa-sm" style="color: #ffffff;"></i> Dashboard
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('create') ?>">
                    <i class="fa-solid fa-folder-plus fa-sm" style="color: #ffffff;"></i> Buat RPS
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('daftar') ?>">
                    <i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i> Daftar RPS
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url() ?>preview/index/<?= $preview['idi'] ?>">
                    <i class="fa-solid fa-rectangle-list fa-sm" style="color: #ffffff;"></i> Preview RPS
                </a>
                
                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="">
                    <i class="fa-solid fa-pen fa-sm" style="color: #ffffff;"></i> Edit Identitas
                </a>

            </div>
            <div class="col-10 p-4 px-5">
            
                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">Edit Identitas RPS</h5>

                <form class="d-grid" action="<?= base_url('preview/editIdentitas') ?>" method="post">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 pb-3 rounded-end-4">
                        <div class="col-6 d-grid align-content-start">
                            <input hidden type="text" name="idi" value="<?= $preview['idi'] ?>">

                            <label class="" for="mata_kuliah">Mata Kuliah</label>
                            <select name="mata_kuliah" id="mata_kuliah">
                                <option selected hidden value="<?= $preview['idm'] ?>"><?= $preview['nama_mata_kuliah'] ?></option>
                                <?php foreach($mata_kuliah as $mk) : ?>
                                    <option value="<?= $mk['id'] ?>"><?= $mk['nama_mata_kuliah'] ?></option>
                                <?php endforeach ?>
                            </select>

                            <label class="" for="dosen_pengampu">Dosen Pengampu</label>
                            <select name="dosen_pengampu" id="dosen_pengampu">
                                <option selected hidden value="<?= $preview['idp'] ?>" ><?= $preview['pengampu'] ?></option>
                                <?php foreach($dosen_pengampu as $dp) : ?>
                                    <option value="<?= $dp['id'] ?>"><?= $dp['nama_dosen'] ?></option>
                                <?php endforeach ?>
                            </select>
                            
                            <label for="nomor">Nomor</label>
                            <input type="text" name="nomor" id="nomor" placeholder="00/RPS/0000" value="<?= $preview['nomor'] ?>">

                            <label for="revisi">Revisi</label>
                            <input type="text" name="revisi" id="revisi" value="<?= $preview['revisi'] ?>">

                            <label>Detail Prosentasi Penilaian</label>
                            <div id="detail">
                                <label for="nilai_presensi">Presensi</label>
                                <input type="text" name="nilai_presensi" id="nilai_presensi" placeholder="00%" value="<?= $preview['nilai_presensi'] ?>">
                                <br>
                                <label for="nilai_mid">Ujian Mid</label>
                                <input type="text" name="nilai_mid" id="nilai_mid" placeholder="00%" value="<?= $preview['nilai_mid'] ?>">
                                <br>
                                <label for="nilai_akhir">Ujian Akhir</label>
                                <input type="text" name="nilai_akhir" id="nilai_akhir" placeholder="00%" value="<?= $preview['nilai_akhir'] ?>">
                                <br>
                                <label for="nilai_tugas">Tugas</label>
                                <input type="text" name="nilai_tugas" id="nilai_tugas" placeholder="00%" value="<?= $preview['nilai_tugas'] ?>">
                            </div>
                            
                            
                        </div>
                        <div class="col-6 d-grid align-content-start">
                            
                            <label for="tanggal_susun">Tanggal Disusun</label>
                            <input type="date" name="tanggal_susun" id="tanggal_susun" value="<?= $preview['tanggal_susun'] ?>">
                            
                            <label for="tanggal_berlaku">Tanggal Berlaku</label>
                            <input type="date" name="tanggal_berlaku" id="tanggal_berlaku" value="<?= $preview['tanggal_berlaku'] ?>">
                            
                            <label class="" for="dosen_dekan">Dekan</label>
                            <select name="dosen_dekan" id="dosen_dekan">
                                <option selected hidden value="<?= $preview['idd'] ?>"><?= $preview['dekan'] ?></option>
                                <?php foreach($dosen_dekan as $dd) : ?>
                                    <option value="<?= $dd['id'] ?>"><?= $dd['nama_dosen'] ?></option>
                                <?php endforeach ?>
                            </select>

                            <label class="" for="dosen_kaprodi">Kaprodi</label>
                            <select name="dosen_kaprodi" id="dosen_kaprodi">
                                <option selected hidden value="<?= $preview['idk'] ?>"><?= $preview['kaprodi'] ?></option>
                                <?php foreach($dosen_kaprodi as $dk) : ?>
                                    <option value="<?= $dk['id'] ?>"><?= $dk['nama_dosen'] ?></option>
                                <?php endforeach ?>
                            </select>

                            <label class="" for="dosen_sekretaris">Sekretaris Prodi</label>
                            <select name="dosen_sekretaris" id="dosen_sekretaris">
                                <option selected hidden value="<?= $preview['ids'] ?>"><?= $preview['sekretaris'] ?></option>
                                <?php foreach($dosen_sekretaris as $ds) : ?>
                                    <option value="<?= $ds['id'] ?>"><?= $ds['nama_dosen'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col d-grid justify-content-end">
                            <button type="submit" name="editIdentitas" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div style="height: 100vh;" class="row" id="myTabContent">
            <div class="col-2 amikom-bg p-4 position-fixed bottom-0 top-0" >
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

                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="">
                    <i class="fa-solid fa-rectangle-list fa-sm" style="color: #ffffff;"></i> Preview RPS
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url() ?>view/index/<?= $preview['idi'] ?>" target="_blank">
                    <i class="fa-solid fa-eye fa-sm" style="color: #ffffff;"></i> View RPS
                </a>

            </div>
            <div class="col-10 p-4 px-5" style="margin-left: calc(16.66666667%);" >
                </h2>
                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-3" >
                    Identitas RPS
                </div>
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 p-1 rounded-end-4 position-relative overflow-hidden" >
                    <a href="<?= base_url() ?>preview/editIdentitas/<?= $preview['idi'] ?>" style="width: auto; letter-spacing: 2px;" class="btn amikom-btn text-decoration-none rounded-start-4 text-center py-1 position-absolute top-0 end-0" >
                        <i class="fas fa-pen fa-sm"></i> Edit
                    </a>
                    <table class="table table-borderless">
                        <thead>
                            <tr class="text-center" style="font-size: 0.8rem;">
                                <td>Mata Kuliah</td>
                                <td>Kode</td>
                                <td>Semester</td>
                                <td>Bobot SKS</td>
                                <td>Progran Studi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th><?= $preview['nama_mata_kuliah'] ?></th>
                                <th><?= $preview['kode'] ?></th>
                                <th><?= $preview['semester'] ?></th>
                                <th><?= $preview['bobot_sks'] ?></th>
                                <th><?= $preview['program_studi'] ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered border-black" style="width: 90%; margin: auto;">
                        <thead>
                            <tr class="text-center" style="font-size: 0.8rem;">
                                <td style="width: 25%;">Nomor RPS</td>
                                <td style="width: 25%;">Disusun</td>
                                <td style="width: 25%;">Berlaku</td>
                                <td style="width: 25%;">Revisi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th><?= $preview['nomor'] ?></th>
                                <th><?= date('j-M-Y', strtotime($preview['tanggal_susun'])) ?></th>
                                <th><?= date('j-M-Y', strtotime($preview['tanggal_berlaku'])) ?></th>
                                <th><?= $preview['revisi'] ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered border-black mt-3" style="width: 90%; margin: auto;">
                        <thead>
                            <tr class="text-center" style="font-size: 0.8rem;">
                                <td style="width: 25%;">Dekan</td>
                                <td style="width: 25%;">Kaprodi</td>
                                <td style="width: 25%;">Sekretaris Prodi</td>
                                <td style="width: 25%;">Dosen Pengampu</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center" style="font-size: .8rem;">
                                <th><?= $preview['dekan'] ?></th>
                                <th><?= $preview['kaprodi'] ?></th>
                                <th><?= $preview['sekretaris'] ?></th>
                                <th><?= $preview['pengampu'] ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-center my-3">Persentase Penilaian</p>
                    <table class="table table-sm table-bordered border-black mb-3" style="width: 45%; margin: auto;">
                        <thead>
                            <tr class="text-center" style="font-size: 0.8rem;">
                                <td style="width: 25%;">Presensi</td>
                                <td style="width: 25%;">UTS</td>
                                <td style="width: 25%;">UAS</td>
                                <td style="width: 25%;">Tugas</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center" style="font-size: .8rem;">
                                <th><?= $preview['nilai_presensi'] ?> %</th>
                                <th><?= $preview['nilai_mid'] ?> %</th>
                                <th><?= $preview['nilai_akhir'] ?> %</th>
                                <th><?= $preview['nilai_tugas'] ?> %</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Gambaran Umum
                </div>
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 p-1 rounded-end-4">
                    <table class="table table-borderless mb-0">
                        <?php foreach($gambaran_umum as $gu) : ?>
                            <tr>
                                <td style="width: 94%;"><?= $gu['content_gambaran'] ?></td>
                                <td style="text-align: center;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#gambaranEdit<?= $gu['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                    <a href="<?= base_url() ?>preview/delGU/<?= $preview['idi'] ?>/<?= $gu['id'] ?>" onclick="return confirm('Anda yakin menghapus ini?')" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="width: 100%; height: 1px; background-color: #4A1B9D; margin: auto;" ></div>
                                </td>
                            </tr>
                            <div class="modal fade modal-lg" id="gambaranEdit<?= $gu['id'] ?>" tabindex="-1" aria-labelledby="gambaranEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="<?= base_url('preview/editGambaran') ?>" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                                <div class="col d-grid mb-3"">
                                                    <input type="text" name="id" hidden value="<?= $gu['id'] ?>">
                                                    <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                                    <label for="content_gambaran">Edit Gambaran Umum</label>
                                                    <textarea name="content_gambaran" id="content_gambaran" rows="2"><?= $gu['content_gambaran'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" name="editGambaran" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </table>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#gambaranTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Capaian Pembelajaran
                </div>
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 p-1 rounded-end-4"> 
                    <table class="table table-borderless mb-0">
                        <?php foreach($capaian_pembelajaran as $cp) : ?>
                            <tr>
                                <td style="width: 94%;"><?= $cp['content_capaian'] ?></td>
                                <td style="text-align: center;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#capaianEdit<?= $cp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                    <a href="<?= base_url() ?>preview/delCP/<?= $preview['idi'] ?>/<?= $cp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="width: 100%; height: 1px; background-color: #4A1B9D; margin: auto;" ></div>
                                </td>
                            </tr>
                            <div class="modal fade modal-lg" id="capaianEdit<?= $cp['id'] ?>" tabindex="-1" aria-labelledby="capaianEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="<?= base_url('preview/editCapaian') ?>" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                                <div class="col d-grid mb-3" id="capaian_pembelajaran">
                                                    <input type="text" name="id" hidden value="<?= $cp['id'] ?>">
                                                    <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                                    <label for="content_capaian">Edit Capaian Pembelajaran</label>
                                                    <textarea name="content_capaian" id="content_capaian" rows="2"><?= $cp['content_capaian'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" name="editCapaian" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </table>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#capaianTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Prasyarat
                </div>
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 p-1 rounded-end-4">
                    <table class="table table-borderless mb-0">
                        <?php foreach($prasyarat as $p) : ?>
                            <tr>
                                <td style="width: 94%;"><?= $p['content_prasyarat'] ?></td>
                                <td style="text-align: center;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#prasyaratEdit<?= $p['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                    <a href="<?= base_url() ?>preview/delP/<?= $preview['idi'] ?>/<?= $p['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="width: 100%; height: 1px; background-color: #4A1B9D; margin: auto;" ></div>
                                </td>
                            </tr>
                            <div class="modal fade modal-lg" id="prasyaratEdit<?= $p['id'] ?>" tabindex="-1" aria-labelledby="prasyaratEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="<?= base_url('preview/editPrasyarat') ?>" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                                <div class="col d-grid mb-3">
                                                    <input type="text" name="id" hidden value="<?= $p['id'] ?>">
                                                    <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                                    <label for="content_prasyarat">Edit Prasyarat dan Pengetahuan Awal (Prior Knowledge)</label>
                                                    <textarea name="content_prasyarat" id="content_prasyarat" rows="3" required><?= $p['content_prasyarat'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" name="editPrasyarat" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </table>
                </div>
                <a href="" data-bs-toggle="modal" data-bs-target="#prasyaratTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Unit Pembelajaran
                </div>
                <table class="table table-bordered mb-0" style="font-size: .7rem; border: 2px solid #4A1B9D;">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 18%;">Kemampuan Akhir yang Diharapkan</th>
                            <th style="width: 14%;">Indikator</th>
                            <th style="width: 14%;">Bahan Kajian</th>
                            <th style="width: 14%;">Metode Pembelajaran</th>
                            <th style="width: 6%;">Waktu</th>
                            <th style="width: 14%;">Metode Penilaian</th>
                            <th style="width: 14%;">Bahan Ajar</th>
                            <th style="width: 6%;">Apa?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($unit_pembelajaran as $up)  : ?>
                        <tr>
                            <td><?= $up['unit_kemampuan'] ?></td>
                            <td><?= $up['unit_indikator'] ?></td>
                            <td><?= $up['bahan_kajian'] ?></td>
                            <td><?= $up['metode_pembelajaran'] ?></td>
                            <td class="text-center"><?= $up['unit_waktu'] ?></td>
                            <td><?= $up['metode_penilaian'] ?></td>
                            <td><?= $up['bahan_ajar'] ?></td>
                            <td class="text-center" style="font-size: 1rem;">
                                <a href="" data-bs-toggle="modal" data-bs-target="#unitEdit<?= $up['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                                <a href="<?= base_url() ?>preview/delUP/<?= $preview['idi'] ?>/<?= $up['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade modal-lg" id="unitEdit<?= $up['id'] ?>" tabindex="-1" aria-labelledby="unitEditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <form action="<?= base_url('preview/editUnit') ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Unit Pembelajaran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                            <input type="text" name="id" hidden value="<?= $up['id'] ?>">
                                            <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                            <div class="col d-grid">
                                                <label for="unit_kemampuan">Kemampuan Akhir yang Diharapakan</label>
                                                <textarea name="unit_kemampuan" id="unit_kemampuan" rows="2"><?= $up['unit_kemampuan'] ?>
                                                </textarea>
                                            </div>
                                            <div class="col d-grid">
                                                <label for="unit_indikator">Indikator</label>
                                                <textarea name="unit_indikator" id="unit_indikator" rows="2"><?= $up['unit_indikator'] ?>
                                                </textarea>
                                            </div>
                                            <div class="row p-0 m-auto">
                                                <div class="col">
                                                    <label for="bahan_kajian">Bahan Kajian</label>
                                                    <textarea class="w-100" name="bahan_kajian" id="bahan_kajian" rows="2"><?= $up['bahan_kajian'] ?>
                                                    </textarea>
                                                </div>
                                                <div class="col">
                                                    <label for="metode_pembelajaran">Metode Pembelajaran</label>
                                                    <textarea class="w-100" name="metode_pembelajaran" id="metode_pembelajaran" rows="2"><?= $up['metode_pembelajaran'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row p-0 m-auto align-items-start">
                                                <div class="col">
                                                    <label for="metode_penilaian">Metode Penilaian</label>
                                                    <textarea class="w-100" name="metode_penilaian" id="metode_penilaian" rows="2"><?= $up['metode_penilaian'] ?>
                                                    </textarea>
                                                </div>
                                                <div class="col d-grid">
                                                    <label for="unit_waktu">Waktu</label>
                                                    <input class="w-100" type="text" name="unit_waktu" id="unit_waktu" value="<?= $up['unit_waktu'] ?>">
                                                </div>
                                                <div class="col">
                                                    <label for="bahan_ajar">Bahan Ajar</label>
                                                    <textarea class="w-100" name="bahan_ajar" id="bahan_ajar" rows="2"><?= $up['bahan_ajar'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="editUnit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="" data-bs-toggle="modal" data-bs-target="#unitTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Tugas & Penilaian
                </div>
                <table class="table table-bordered mb-0" style="font-size: .7rem; border: 2px solid #4A1B9D;">
                    <thead>
                        <tr class="text-center align-middle">
                            <th style="width: 18%;">Tugas/Aktivitas</th>
                            <th style="width: 20%;">Kemampuan akhir yang diharapkan atau dievaluasi</th>
                            <th style="width: 10%;">Waktu</th>
                            <th style="width: 10%;">Bobot</th>
                            <th style="width: 18%;">Kriteria Penilaian</th>
                            <th style="width: 18%;">Indikator Penilaian</th>
                            <th style="width: 6%;">Apa?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tugas_penilaian as $tp) : ?>
                        <tr>
                            <td><?= $tp['tugas'] ?></td>
                            <td><?= $tp['tugas_kemampuan'] ?>.</td>
                            <td class="text-center"><?= $tp['tugas_waktu'] ?></td>
                            <td class="text-center"><?= $tp['bobot'] ?></td>
                            <td><?= $tp['kriteria_penilaian'] ?></td>
                            <td><?= $tp['tugas_indikator'] ?></td>
                            <td class="text-center" style="font-size: 1rem;">
                                <a href="" data-bs-toggle="modal" data-bs-target="#tugasEdit<?= $tp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                                <a href="<?= base_url() ?>preview/delTP/<?= $preview['idi'] ?>/<?= $tp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade modal-lg" id="tugasEdit<?= $tp['id'] ?>" tabindex="-1" aria-labelledby="tugasEditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <form action="<?= base_url('preview/editTugas') ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Tugas & Penilaian</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                            <div class="row p-0 m-auto align-items-start mb-3">
                                                <input type="text" name="id" hidden value="<?= $tp['id'] ?>">
                                                <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                                <div class="col">
                                                    <label for="tugas">Tugas/Aktivitas</label>
                                                    <input class="w-100" type="text" name="tugas" id="tugas" value="<?= $tp['tugas']?>">
                                                </div>
                                                <div class="col d-grid">
                                                    <label for="tugas_waktu">Waktu</label>
                                                    <input class="w-100" type="text" name="tugas_waktu" id="tugas_waktu" value="<?= $tp['tugas_waktu']?>">
                                                </div>
                                                <div class="col">
                                                    <label for="bobot">Bobot</label>
                                                    <input class="w-100" type="text" name="bobot" id="bobot" value="<?= $tp['bobot']?>">
                                                </div>
                                            </div>
                                            <div class="col d-grid mb-3">
                                                <label for="tugas_kemampuan">Kemampuan Akhir yang Diharapakan atau dievaluasi</label>
                                                <textarea name="tugas_kemampuan" id="tugas_kemampuan" rows="2"><?= $tp['tugas_kemampuan']?>
                                                </textarea>
                                            </div>
                                            <div class="row p-0 m-auto">
                                                <div class="col">
                                                    <label for="kriteria_penilaian">Kriteria Penilaian</label>
                                                    <textarea class="w-100" name="kriteria_penilaian" id="kriteria_penilaian" rows="2"><?= $tp['kriteria_penilaian']?>
                                                    </textarea>
                                                </div>
                                                <div class="col">
                                                    <label for="tugas_indikator">Indikator Penilaian</label>
                                                    <textarea class="w-100" name="tugas_indikator" id="tugas_indikator" rows="2"><?= $tp['tugas_indikator']?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="editTugas" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="" data-bs-toggle="modal" data-bs-target="#tugasTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Referensi
                </div>
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 p-1 rounded-end-4">
                    <table class="table table-borderless mb-0">
                        <?php foreach($referensi as $r) : ?>
                            <tr>
                                <td style="width: 94%;"><?= $r['content_referensi'] ?></td>
                                <td style="text-align: center;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#referensiEdit<?= $r['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                    <a href="<?= base_url() ?>preview/delR/<?= $preview['idi'] ?>/<?= $r['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                        <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="width: 100%; height: 1px; background-color: #4A1B9D; margin: auto;" ></div>
                                </td>
                            </tr>
                            <div class="modal fade modal-lg" id="referensiEdit<?= $r['id'] ?>" tabindex="-1" aria-labelledby="referensiEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="<?= base_url('preview/editReferensi') ?>" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3" id="ref">
                                            <div class="row p-0 m-auto align-items-start mb-3">
                                                <div class="col">
                                                    <input type="text" name="id" hidden value="<?= $r['id'] ?>">
                                                    <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                                    <label for="content_referensi">Edit Referensi</label>
                                                    <input class="w-100" type="text" name="content_referensi" id="content_referensi" value="<?= $r['content_referensi'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" name="editReferensi" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </table>
                </div>
                <a href=""  data-bs-toggle="modal" data-bs-target="#referensiTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>

                <div style="width: 15%; background-color: #4A1B9D; color: white;" class=" rounded-end-4 align-content-center py-1 ps-3 mb-2 mt-5" >
                    Rencana Pembelajaran
                </div>
                <table class="table table-bordered mb-0" style="font-size: .7rem; border: 2px solid #4A1B9D;">
                    <thead>
                        <tr class="text-center align-middle">
                            <th style="width: 10%;">Minggu/pertemuan</th>
                            <th style="width: 18%;">Kemampuan Akhir yang Diharapkan</th>
                            <th style="width: 14%;">Indikator</th>
                            <th style="width: 14%;">Topik & Sub Topik</th>
                            <th style="width: 14%;">Aktivitas dan Strategi Pembelajaran</th>
                            <th style="width: 10%;">Waktu</th>
                            <th style="width: 14%;">Penilaian</th>
                            <th style="width: 6%;">Apa?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rencana_pembelajaran as $rp) : ?>
                        <tr>
                            <td class="text-center"><?= $rp['minggu'] ?></td>
                            <td><?= $rp['rencana_kemampuan'] ?></td>
                            <td><?= $rp['rencana_indikator'] ?></td>
                            <td><?= $rp['topik'] ?></td>
                            <td><?= $rp['aktivitas'] ?></td>
                            <td class="text-center"><?= $rp['rencana_waktu'] ?></td>
                            <td><?= $rp['penilaian'] ?></td>
                            <td class="text-center" style="font-size: 1rem;">
                                <a href="" data-bs-toggle="modal" data-bs-target="#rencanaEdit<?= $rp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-pen fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                                <a href="<?= base_url() ?>preview/delRP/<?= $preview['idi'] ?>/<?= $rp['id'] ?>" style="letter-spacing: 2px; text-decoration: none;" >
                                    <i class="fas fa-trash fa-sm" style="color: #4A1B9D;"></i>
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade modal-lg" id="rencanaEdit<?= $rp['id'] ?>" tabindex="-1" aria-labelledby="rencanaEditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <form action="<?= base_url('preview/editRencana') ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Rencana Pemebelajaran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div style="border: 2px solid #4A1B9D;" class="w-100 m-auto p-3 rounded-end-4">
                                        <div class="row w-100 m-auto column-gap-2">
                                            <div class="col-1 p-0 ">
                                                <input type="text" name="id" hidden value="<?= $rp['id'] ?>">
                                                <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">    
                                                <label for="minggu">Minggu</label>
                                                <select class="w-100" name="minggu" id="minggu">
                                                    <option selected hidden value="<?= $rp['minggu'] ?>"><?= $rp['minggu'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                </select>
                                            </div>
                                            <div class="col-2 p-0 d-grid">
                                                <label for="rencana_waktu">Waktu</label>
                                                <input class="w-100" type="text" name="rencana_waktu" id="rencana_waktu" value="<?= $rp['rencana_waktu'] ?>">
                                            </div>    
                                            <div class="col p-0 d-grid">
                                                <label for="aktivitas">Aktivitas dan Strategi Pembelajaran</label>
                                                <input class="w-100" type="text" name="aktivitas" id="aktivitas" value="<?= $rp['aktivitas'] ?>">
                                            </div>    
                                            <div class="col-4 p-0 d-grid">
                                                <label for="penilaian">Penilaian</label>
                                                <input class="w-100" type="text" name="penilaian" id="penilaian" value="<?= $rp['penilaian'] ?>">
                                            </div>    
                                        </div>

                                        <div class="row w-100 m-auto column-gap-2">
                                            <div class="col-4 p-0 d-grid">
                                                <label for="rencana_kemampuan">Kemampuan Akhir yang Diharapkan</label>
                                                <textarea cols="30" rows="3" name="rencana_kemampuan" id="rencana_kemampuan"><?= $rp['rencana_kemampuan'] ?></textarea>
                                            </div>    
                                            <div class="col p-0 d-grid">
                                                <label for="rencana_indikator">indikator</label>
                                                <textarea cols="30" rows="3" name="rencana_indikator" id="rencana_indikator"><?= $rp['rencana_indikator'] ?></textarea>
                                            </div>    
                                            <div class="col-4 p-0 d-grid">
                                                <label for="topik">Topik & Sub Topik</label>
                                                <textarea cols="30" rows="3" name="topik" id="topik"><?= $rp['topik'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="editRencana" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href=""  data-bs-toggle="modal" data-bs-target="#rencanaTambah" class="amikom-btn btn btn-sm float-end me-3 mt-1" style="width: auto; font-size: .6rem;">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <!-- Modal Identitas -->
    <!-- <div class="modal fade modal-lg" id="identitas" tabindex="-1" aria-labelledby="identitasLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Identitas RPS</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-grid" action="" method="post">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 pb-3 rounded-end-4">
                        <div class="col-6 d-grid align-content-start">
                            <label class="" for="mata_kuliah">Mata Kuliah</label>
                            <select name="mata_kuliah" id="mata_kuliah">
                                <option value="1">Multimedia</option>
                                <option value="2">Fotografi</option>
                            </select>

                            <label class="" for="dosen_pengampu">Dosen Pengampu</label>
                            <select name="dosen_pengampu" id="dosen_pengampu">
                                <option value="1">Abyan Musyaffa</option>
                                <option value="2">Alif Aufa</option>
                            </select>
                            
                            <label for="nomor">Nomor</label>
                            <input type="text" name="nomor" id="nomor" placeholder="00/RPS/0000" required>

                            <label for="revisi">Revisi</label>
                            <input type="text" name="revisi" id="revisi">

                            <label>Detail Prosentasi Penilaian</label>
                            <div id="detail">
                                <label for="penilaian_presensi">Presensi</label>
                                <input type="text" name="penilaian_presensi" id="penilaian_presensi" placeholder="00%">
                                <br>
                                <label for="penilaian_mid">Ujian Mid</label>
                                <input type="text" name=penilaian_"mid" id="penilaian_mid" placeholder="00%">
                                <br>
                                <label for="penilaian_akhir">Ujian Akhir</label>
                                <input type="text" name="penilaian_akhir" id="penilaian_akhir" placeholder="00%">
                                <br>
                                <label for="penilaian_tugas">Tugas</label>
                                <input type="text" name="penilaian_tugas" id="penilaian_tugas" placeholder="00%">
                            </div>
                           
                            
                        </div>
                        <div class="col-6 d-grid align-content-start">
                            
                            <label for="tanggal_susun">Tanggal Disusun</label>
                            <input type="date" name="tanggal_susun" id="tanggal_susun" required>
                            
                            <label for="tanggal_berlaku">Tanggal Berlaku</label>
                            <input type="date" name="tanggal_berlaku" id="tanggal_berlaku" required>
                            
                            <label class="" for="dosen_dekan">Dekan</label>
                            <select name="dosen_dekan" id="dosen_dekan">
                                <option value="1">Abyan Musyaffa</option>
                                <option value="2">Alif Aufa</option>
                            </select>

                            <label class="" for="dosen_kaprodi">Kaprodi</label>
                            <select name="dosen_kaprodi" id="dosen_kaprodi">
                                <option value="1">Abyan Musyaffa</option>
                                <option value="2">Alif Aufa</option>
                            </select>

                            <label class="" for="dosen_sekretaris">Sekretaris Prodi</label>
                            <select name="dosen_sekretaris" id="dosen_sekretaris">
                                <option value="1">Abyan Musyaffa</option>
                                <option value="2">Alif Aufa</option>
                            </select>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
                </form>
        </div>
        </div>
    </div> -->

    <!-- Modal Gambaran -->
    <div class="modal fade modal-lg" id="gambaranTambah" tabindex="-1" aria-labelledby="gambaranTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahGambaran') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                    <div class="col d-grid mb-3" id="gambaran_umum">
                        <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                        <label for="content_gambaran">Tambah Gambaran Umum</label>
                        <textarea name="content_gambaran" id="content_gambaran" rows="2">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahGambaran" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Capaian -->
    <div class="modal fade modal-lg" id="capaianTambah" tabindex="-1" aria-labelledby="capaianTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahCapaian') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                        <div class="col d-grid mb-3" id="capaian_pembelajaran">
                            <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                            <label for="content_capaian">Tamabah Capaian Pembelajaran</label>
                            <textarea name="content_capaian" id="content_capaian" rows="2">
                            </textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahCapaian" class="btn btn-primary">Simpan</button>
            </div> 
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Prasyarat -->
    <div class="modal fade modal-lg" id="prasyaratTambah" tabindex="-1" aria-labelledby="prasyaratTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahPrasyarat') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                        <div class="col d-grid mb-3">
                            <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                            <label for="content_prasyarat">Tambah Prasyarat dan Pengetahuan Awal (Prior Knowledge)</label>
                            <textarea name="content_prasyarat" id="content_prasyarat" rows="3" required>
                            </textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahPrasyarat" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Unit -->
    <div class="modal fade modal-lg" id="unitTambah" tabindex="-1" aria-labelledby="unitTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahUnit') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Unit Pembelajaran</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                        <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                        <div class="col d-grid">
                            <label for="unit_kemampuan">Kemampuan Akhir yang Diharapakan</label>
                            <textarea name="unit_kemampuan" id="unit_kemampuan" rows="2">
                            </textarea>
                        </div>
                        <div class="col d-grid">
                            <label for="unit_indikator">Indikator</label>
                            <textarea name="unit_indikator" id="unit_indikator" rows="2">
                            </textarea>
                        </div>
                        <div class="row p-0 m-auto">
                            <div class="col">
                                <label for="bahan_kajian">Bahan Kajian</label>
                                <textarea class="w-100" name="bahan_kajian" id="bahan_kajian" rows="2">
                                </textarea>
                            </div>
                            <div class="col">
                                <label for="metode_pembelajaran">Metode Pembelajaran</label>
                                <textarea class="w-100" name="metode_pembelajaran" id="metode_pembelajaran" rows="2">
                                </textarea>
                            </div>
                        </div>
                        <div class="row p-0 m-auto align-items-start">
                            <div class="col">
                                <label for="metode_penilaian">Metode Penilaian</label>
                                <textarea class="w-100" name="metode_penilaian" id="metode_penilaian" rows="2">
                                </textarea>
                            </div>
                            <div class="col d-grid">
                                <label for="unit_waktu">Waktu</label>
                                <input class="w-100" type="text" name="unit_waktu" id="unit_waktu" placeholder="">
                            </div>
                            <div class="col">
                                <label for="bahan_ajar">Bahan Ajar</label>
                                <textarea class="w-100" name="bahan_ajar" id="bahan_ajar" rows="2">
                                </textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahUnit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Tugas -->
    <div class="modal fade modal-lg" id="tugasTambah" tabindex="-1" aria-labelledby="tugasTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahTugas') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tugas & Penilaian</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                        <div class="row p-0 m-auto align-items-start mb-3">
                            <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                            <div class="col">
                                <label for="tugas">Tugas/Aktivitas</label>
                                <input class="w-100" type="text" name="tugas" id="tugas">
                            </div>
                            <div class="col d-grid">
                                <label for="tugas_waktu">Waktu</label>
                                <input class="w-100" type="text" name="tugas_waktu" id="tugas_waktu">
                            </div>
                            <div class="col">
                                <label for="bobot">Bobot</label>
                                <input class="w-100" type="text" name="bobot" id="bobot">
                            </div>
                        </div>
                        <div class="col d-grid mb-3">
                            <label for="tugas_kemampuan">Kemampuan Akhir yang Diharapakan atau dievaluasi</label>
                            <textarea name="tugas_kemampuan" id="tugas_kemampuan" rows="2">
                            </textarea>
                        </div>
                        <div class="row p-0 m-auto">
                            <div class="col">
                                <label for="kriteria_penilaian">Kriteria Penilaian</label>
                                <textarea class="w-100" name="kriteria_penilaian" id="kriteria_penilaian" rows="2">
                                </textarea>
                            </div>
                            <div class="col">
                                <label for="tugas_indikator">Indikator Penilaian</label>
                                <textarea class="w-100" name="tugas_indikator" id="tugas_indikator" rows="2">
                                </textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahTugas" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Referensi -->
    <div class="modal fade modal-lg" id="referensiTambah" tabindex="-1" aria-labelledby="referensiTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahReferensi') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3" id="ref">
                        <div class="row p-0 m-auto align-items-start mb-3">
                            <div class="col">
                                <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">
                                <label for="content_referensi">Tamabah Referensi</label>
                                <input class="w-100" type="text" name="content_referensi" id="content_referensi">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahReferensi" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- Modal Rencana -->
    <div class="modal fade modal-lg" id="rencanaTambah" tabindex="-1" aria-labelledby="rencanaTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="<?= base_url('preview/tambahRencana') ?>" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Rencana Pemebelajaran</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="border: 2px solid #4A1B9D;" class="w-100 m-auto p-3 rounded-end-4">
                    <div class="row w-100 m-auto column-gap-2">
                        <div class="col-1 p-0 ">
                            <input type="text" name="idi" hidden value="<?= $preview['idi'] ?>">    
                            <label for="minggu">Minggu</label>
                            <select class="w-100" name="minggu" id="minggu">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </select>
                        </div>
                        <div class="col-2 p-0 d-grid">
                            <label for="rencana_waktu">Waktu</label>
                            <input class="w-100" type="text" name="rencana_waktu" id="rencana_waktu" value="100 Menit">
                        </div>    
                        <div class="col p-0 d-grid">
                            <label for="aktivitas">Aktivitas dan Strategi Pembelajaran</label>
                            <input class="w-100" type="text" name="aktivitas" id="aktivitas">
                        </div>    
                        <div class="col-4 p-0 d-grid">
                            <label for="penilaian">Penilaian</label>
                            <input class="w-100" type="text" name="penilaian" id="penilaian">
                        </div>    
                    </div>

                    <div class="row w-100 m-auto column-gap-2">
                        <div class="col-4 p-0 d-grid">
                            <label for="rencana_kemampuan">Kemampuan Akhir yang Diharapkan</label>
                            <textarea cols="30" rows="3" name="rencana_kemampuan" id="rencana_kemampuan"></textarea>
                        </div>    
                        <div class="col p-0 d-grid">
                            <label for="rencana_indikator">indikator</label>
                            <textarea cols="30" rows="3" name="rencana_indikator" id="rencana_indikator"></textarea>
                        </div>    
                        <div class="col-4 p-0 d-grid">
                            <label for="topik">Topik & Sub Topik</label>
                            <textarea cols="30" rows="3" name="topik" id="topik"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="tambahRencana" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    </div>
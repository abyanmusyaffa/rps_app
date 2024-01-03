
        <div style="height: 100vh;" class="row">
            <div class="col-2 amikom-bg p-4 position-fixed bottom-0 top-0" >
                <a class="ms-2" href="<?= base_url('auth/logout') ?>"><i class="fa-solid fa-power-off fa-xl" style="color: #ffffff;"></i></a>
                
                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-5  d-block" href="<?= base_url('dashboard') ?>">
                    <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i> Dashboard
                </a>

                <a class="btn aktif amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="">
                    <i class="fa-solid fa-folder-plus fa-sm" style="color: #ffffff;"></i> Buat RPS
                </a>

                <a class="btn amikom-btn-2 w-100 py-2 rounded-4 mt-3 d-block" href="<?= base_url('daftar') ?>">
                    <i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i> Daftar RPS
                </a>
            </div>



            <div class="col-10 p-4 px-5" style="margin-left: calc(16.66666667%);" >
            
                <div style="width: 100%; height: 2px; background-color: #4A1B9D; margin: auto;" ></div>
                
                <h5 class="my-3">Buat RPS</h5>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="font-size:0.8rem;">
                    <li class="nav-item" style="z-index: 10;" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#identitas" type="button" role="tab" aria-controls="identitas-tab-pane" aria-selected="true">Identitas RPS</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 9;" role="presentation">
                      <button id="gu" class="nav-link" data-bs-toggle="tab" data-bs-target="#gambaran" type="button" role="tab" aria-controls="gambaran-tab-pane" aria-selected="true">Gambaran Umum</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 8;" role="presentation">
                      <button id="cp" class="nav-link" data-bs-toggle="tab" data-bs-target="#capaian" type="button" role="tab" aria-controls="capaian-tab-pane" aria-selected="true">Capaian Pembelajaran</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 7;" role="presentation">
                      <button id="p" class="nav-link" data-bs-toggle="tab" data-bs-target="#prasyarat" type="button" role="tab" aria-controls="prasyarat-tab-pane" aria-selected="true">Prasyarat</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 6;" role="presentation">
                      <button id="up" class="nav-link" data-bs-toggle="tab" data-bs-target="#unit" type="button" role="tab" aria-controls="unit-tab-pane" aria-selected="true">Unit Pembelajaran</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 5;" role="presentation">
                      <button id="tp" class="nav-link" data-bs-toggle="tab" data-bs-target="#tugas" type="button" role="tab" aria-controls="tugas-tab-pane" aria-selected="true">Tugas & Penilaian</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 4;" role="presentation">
                      <button id="r" class="nav-link" data-bs-toggle="tab" data-bs-target="#referensi" type="button" role="tab" aria-controls="referensi-tab-pane" aria-selected="true">Referensi</button>
                    </li>
                    <li class="nav-item" style="margin-left: -18px; z-index: 3;" role="presentation">
                      <button id="rp" class="nav-link" data-bs-toggle="tab" data-bs-target="#rencana" type="button" role="tab" aria-controls="rencana-tab-pane" aria-selected="true">Rencana Pembelajaran</button>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahIdentitas') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto mt-2 pb-3 rounded-end-4">
                                <div class="col-6 d-grid align-content-start">
                                    <label class="" for="mata_kuliah">Mata Kuliah</label>
                                    <select name="mata_kuliah" id="mata_kuliah">
                                        <?php foreach($mata_kuliah as $mk) : ?>
                                            <option value="<?= $mk['id'] ?>"><?= $mk['nama_mata_kuliah'] ?></option>
                                        <?php endforeach ?>
                                    </select>
        
                                    <label class="" for="dosen_pengampu">Dosen Pengampu</label>
                                    <select name="dosen_pengampu" id="dosen_pengampu">
                                        <?php foreach($dosen_pengampu as $dp) : ?>
                                            <option value="<?= $dp['id'] ?>"><?= $dp['nama_dosen'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    
                                    <label for="nomor">Nomor</label>
                                    <input type="text" name="nomor" id="nomor" placeholder="00/RPS/0000">
        
                                    <label for="revisi">Revisi</label>
                                    <input type="text" name="revisi" id="revisi">
        
                                    <label>Detail Prosentasi Penilaian</label>
                                    <div id="detail">
                                        <label for="nilai_presensi">Presensi</label>
                                        <input type="text" name="nilai_presensi" id="nilai_presensi" placeholder="00%">
                                        <br>
                                        <label for="nilai_mid">Ujian Mid</label>
                                        <input type="text" name="nilai_mid" id="nilai_mid" placeholder="00%">
                                        <br>
                                        <label for="nilai_akhir">Ujian Akhir</label>
                                        <input type="text" name="nilai_akhir" id="nilai_akhir" placeholder="00%">
                                        <br>
                                        <label for="nilai_tugas">Tugas</label>
                                        <input type="text" name="nilai_tugas" id="nilai_tugas" placeholder="00%">
                                    </div>
                                   
                                    
                                </div>
                                <div class="col-6 d-grid align-content-start">
                                    
                                    <label for="tanggal_susun">Tanggal Disusun</label>
                                    <input type="date" name="tanggal_susun" id="tanggal_susun">
                                    
                                    <label for="tanggal_berlaku">Tanggal Berlaku</label>
                                    <input type="date" name="tanggal_berlaku" id="tanggal_berlaku">
                                    
                                    <label class="" for="dosen_dekan">Dekan</label>
                                    <select name="dosen_dekan" id="dosen_dekan">
                                        <?php foreach($dosen_dekan as $dd) : ?>
                                            <option value="<?= $dd['id'] ?>"><?= $dd['nama_dosen'] ?></option>
                                        <?php endforeach ?>
                                    </select>
        
                                    <label class="" for="dosen_kaprodi">Kaprodi</label>
                                    <select name="dosen_kaprodi" id="dosen_kaprodi">
                                        <?php foreach($dosen_kaprodi as $dk) : ?>
                                            <option value="<?= $dk['id'] ?>"><?= $dk['nama_dosen'] ?></option>
                                        <?php endforeach ?>
                                    </select>
        
                                    <label class="" for="dosen_sekretaris">Sekretaris Prodi</label>
                                    <select name="dosen_sekretaris" id="dosen_sekretaris">
                                        <?php foreach($dosen_sekretaris as $ds) : ?>
                                            <option value="<?= $ds['id'] ?>"><?= $ds['nama_dosen'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
        
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-end">
                                    <button type="submit" name="tambahIdentitas" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan & Selanjutnya
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="gambaran" role="tabpanel" aria-labelledby="gambaran" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahGambaran') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                <div class="col d-grid mb-3" id="gambaran_umum">
                                    <label for="content_gambaran">Gambaran Umum</label>
                                    <textarea name="content_gambaran" id="content_gambaran" rows="2">
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahGambaran" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="capaian" role="tabpanel" aria-labelledby="capaian" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahCapaian') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                <div class="col d-grid mb-3" id="capaian_pembelajaran">
                                    <label for="content_capaian">Capaian Pembelajaran</label>
                                    <textarea name="content_capaian" id="content_capaian" rows="2">
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahCapaian" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="prasyarat" role="tabpanel" aria-labelledby="prasyarat" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahPrasyarat') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                <div class="col d-grid mb-3">
                                    <label for="content_prasyarat">Prasyarat dan Pengetahuan Awal (Prior Knowledge)</label>
                                    <textarea name="content_prasyarat" id="content_prasyarat" rows="3">
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahPrasyarat" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="unit" role="tabpanel" aria-labelledby="unit" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahUnit') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
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
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahUnit" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="tugas" role="tabpanel" aria-labelledby="tugas" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahTugas') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3">
                                <div class="row p-0 m-auto align-items-start mb-3">
                                    <div class="col">
                                        <label for="tugas">Tugas/Aktivitas</label>
                                        <input class="w-100" type="text" name="tugas" id="tugas" placeholder="" required>
                                    </div>
                                    <div class="col d-grid">
                                        <label for="tugas_waktu">Waktu</label>
                                        <input class="w-100" type="text" name="tugas_waktu" id="tugas_waktu" placeholder="" required>
                                    </div>
                                    <div class="col">
                                        <label for="bobot">Bobot</label>
                                        <input class="w-100" type="text" name="bobot" id="bobot" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col d-grid mb-3">
                                    <label for="tugas_kemampuan">Kemampuan Akhir yang Diharapakan atau dievaluasi</label>
                                    <textarea name="tugas_kemampuan" id="tugas_kemampuan" rows="2" required>
                                    </textarea>
                                </div>
                                <div class="row p-0 m-auto">
                                    <div class="col">
                                        <label for="kriteria_penilaian">Kriteria Penilaian</label>
                                        <textarea class="w-100" name="kriteria_penilaian" id="kriteria_penilaian" rows="2" required>
                                        </textarea>
                                    </div>
                                    <div class="col">
                                        <label for="tugas_indikator">Indikator Penilaian</label>
                                        <textarea class="w-100" name="tugas_indikator" id="tugas_indikator" rows="2" required>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahTugas" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="referensi" role="tabpanel" aria-labelledby="referensi" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahReferensi') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="row w-100 m-auto d-grid pb-3 rounded-end-4 mb-3" id="ref">
                                <div class="row p-0 m-auto align-items-start mb-3">
                                    <div class="col">
                                        <label for="content_referensi">Referensi</label>
                                        <input class="w-100" type="text" name="content_referensi" id="content_referensi" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-center">
                                    <button type="submit" name="tambahReferensi" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="rencana" role="tabpanel" aria-labelledby="rencana" tabindex="0">
                        <form class="d-grid" action="<?= base_url('create/tambahRencana') ?>" method="post">
                            <div style="border: 2px solid #4A1B9D;" class="w-100 m-auto p-3 rounded-end-4">
                                <div class="row w-100 m-auto column-gap-2">
                                    <div class="col-1 p-0 d-grid">
                                        <label for="minggu">Minggu</label>
                                        <select name="minggu" id="minggu">
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
                                        <input type="text" name="rencana_waktu" id="rencana_waktu" value="100 Menit">
                                        
                                    </div>    
                                    <div class="col p-0 d-grid">
                                        
                                        <label for="aktivitas">Aktivitas dan Strategi Pembelajaran</label>
                                        <input type="text" name="aktivitas" id="aktivitas">
        
                                        
                                    </div>    
                                    <div class="col-4 p-0 d-grid">
                                        
                                        <label for="penilaian">Penilaian</label>
                                        <input type="text" name="penilaian" id="penilaian">
                                        
                                    </div>    
                                </div>
        
                                <div class="row w-100 m-auto column-gap-2">
                                    <div class="col-4 p-0 d-grid">
                                        
                                        <label for="rencana_kemampuan">Kemampuan Akhir yang Diharapkan</label>
                                        <textarea cols="30" rows="3" name="rencana_kemampuan" id="rencana_kemampuan"></textarea>
                                        
                                    </div>    
                                    <div class="col p-0 d-grid">
                                        
                                        <label for="rencana_indikator">Indikator</label>
                                        <textarea cols="30" rows="3" name="rencana_indikator" id="rencana_indikator"></textarea>
        
                                        
                                    </div>    
                                    <div class="col-4 p-0 d-grid">
                                        
                                        <label for="topik">Topik & Sub Topik</label>
                                        <textarea cols="30" rows="3" name="topik" id="topik"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid justify-content-end">
                                    <button type="submit" name="tambahRencana" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Simpan
                                    </button>
                                </div>
                                <div class="col d-grid justify-content-end">
                                    <a href="<?= base_url('daftar') ?>" class="mt-3 rounded-4 py-1 btn btn amikom-btn">
                                        Selesai
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
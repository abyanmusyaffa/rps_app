<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> <?= $identitas['nama_mata_kuliah'] ?> (<?= $identitas['kode'] ?>)</title>
    <link href="<?= base_url('assets') ?>/css/bootstrap.css" rel="stylesheet">
    <style>
        table tr td {
            padding: 0 7px 0 7px;
        }
        .gambaran ul li, .capaian ul li, .prasyarat ul li {
            font-style: italic;
        }
        td, p, li, .grey {
            font-size: .85rem;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 mx-auto" style="padding: 70px;">
                <!-- Pengesahan -->
                <div class="pengesahan text-center" style="font-family: 'Times New Roman', Times, serif;">
                    <h2 class="mb-0 fw-bold">RENCANA PEMBELAJARAN SEMESTER (RPS)</h2>
                    <div class="bg-black" style="height: 1px;"></div>
                    <p style="font-size: 12px;"><?= $identitas['nomor'] ?>/Rev.<?= $identitas['revisi'] ?>/<?= date('j F Y', strtotime($identitas['tanggal_susun'])) ?></p>
                    <img src="<?= base_url('assets') ?>/img/Logo Primer - Horizontal.png" width="260" alt="">
                    <div class="bg-black mt-5" style="height: 1px;"></div>
                    <h4 class="mb-0 fw-bold">MATA KULIAH: <?= strtoupper($identitas['nama_mata_kuliah']) ?> (<?= $identitas['kode'] ?>)</h4>
                    <div class="bg-black" style="height: 1px;"></div>
                    <h4 class="mb-0 fw-bold">Program Studi: <?= $identitas['program_studi'] ?></h4>
                    <table class="w-100 ">
                        <tr class="border-bottom border-1 border-black border-start-0 border-end-0">
                            <td style="width: 25%;">Nomor</td>
                            <td style="width: 25%;" class="border-1 border-black">Tgl. Berlaku Mulai</td>
                            <td style="width: 25%;" class="border-1 border-black">Tgl. Disusun</td>
                            <td>Revisi</td>
                        </tr>
                        <tr class="border-bottom border-1 border-black border-start-0 border-end-0">
                            <td><?= $identitas['nomor'] ?></td>
                            <td class="border-1 border-black"><?= date('j F Y', strtotime($identitas['tanggal_berlaku'])) ?></td>
                            <td class="border-1 border-black"><?= date('j F Y', strtotime($identitas['tanggal_susun'])) ?></td>
                            <td><?= $identitas['revisi'] ?></td>
                        </tr>
                    </table>
                    <table class="w-100 mt-4">
                        <tr class="border-bottom border-1 border-black border-start-0 border-end-0">
                            <td style="width: 25%;">Disetujui oleh,<br>Dekan Ilmu Komputer</td>
                            <td style="width: 25%;" class="border-1 border-black">Diperiksa oleh,<br>Kaprodi <?= $identitas['program_studi'] ?></td>
                            <td style="width: 25%;" class="border-1 border-black">Disusun oleh,</td>
                            <td>Dikendalikan oleh,<br>Sekretaris Prodi <?= $identitas['program_studi'] ?></td>
                        </tr>
                        <tr class="border-bottom border-1 border-black border-start-0 border-end-0">
                            <td class="pt-3">
                                <img src="<?= base_url('assets') ?>/img/ttd.png" width="100" alt=""> <br>
                                <p class="mb-0 mt-1 fw-bold"><?= $identitas['dekan'] ?></p>
                                <p class="mb-0 ">NIK. <?= $identitas['nik_dekan'] ?></p>
                            </td>
                            <td class="border-1 border-black pt-3">
                                <img src="<?= base_url('assets') ?>/img/ttd.png" width="100" alt="">
                                <p class="mb-0 mt-1 fw-bold"><?= $identitas['kaprodi'] ?></p>
                                <p class="mb-0 ">NIK. <?= $identitas['nik_kaprodi'] ?></p>
                            </td>
                            <td class="border-1 border-black pt-3">
                                <img src="<?= base_url('assets') ?>/img/ttd.png" width="100" alt="">
                                <p class="mb-0 mt-1 fw-bold"><?= $identitas['sekretaris'] ?></p>
                                <p class="mb-0 ">NIK. <?= $identitas['nik_sekretaris'] ?></p>
                            </td>
                            <td class="pt-3">
                                <img src="<?= base_url('assets') ?>/img/ttd.png" width="100" alt="">
                                <p class="mb-0 mt-1 fw-bold"><?= $identitas['pengampu'] ?></p>
                                <p class="mb-0 ">NIK. <?= $identitas['nik_pengampu'] ?></p>
                            </td>
                        </tr>
                    </table>
                    <h4 class="mb-0 mt-5 fw-bold">UNIVERSITAS AMIKOM YOGYAKARTA<br>YOGYAKARTA<br><?= date('Y', strtotime($identitas['tanggal_susun'])) ?></h4>
                </div>

                <!-- Header -->
                <div class="header text-center mt-5" style="font-family: 'Times New Roman', Times, serif;">
                    <table class="w-100">
                        <tr class="border-bottom-0 border-1 border-black">
                            <td style="width: 25%;" rowspan="4">
                                <img src="<?= base_url('assets') ?>/img/Logo Primer - Horizontal.png" width="160" alt="">
                            </td>
                            <td style="width: 50%;" class="border border-1 border-black" rowspan="4">
                                <h6 class="fw-bold mb-0">RENCANA PEMBELAJARAN SEMESTER<br>PROGRAM STUDI: <?= strtoupper($identitas['program_studi']) ?></h6>
                                <h5 class="fw-bold mb-0">MATAKULIAH <?= strtoupper($identitas['nama_mata_kuliah']) ?><br>(<?= $identitas['kode'] ?>)</h5>
                            </td>
                            <td style="width: 12.5%;" class="border-bottom-0 border-1 border-black fst-italic text-end">Nomor</td>
                            <td style="width: 12.5%;" class="fst-italic text-start">: <?= $identitas['nomor'] ?></td>
                        </tr>
                        <tr class="border-top-0 border-bottom-0 border-1 border-black">
                            <td class="border-bottom-0 border-top-0 border-1 border-black fst-italic text-end">Tgl. Disusun</td>
                            <td class="fst-italic text-start">: <?= $identitas['tanggal_susun'] ?></td>
                        </tr>
                        <tr class="border-top-0 border-bottom-0 border-1 border-black">
                            <td class="border-bottom-0 border-top-0 border-1 border-black fst-italic text-end">Revisi</td>
                            <td class="fst-italic text-start">: <?= $identitas['revisi'] ?></td>
                        </tr>
                        <tr class="border border-1 border-black">
                            <td class="border-1 border-black fst-italic text-end">Halaman</td>
                            <td class="fst-italic text-start">:</td>
                        </tr>
                    </table>
                </div>

                <!-- Identitas -->
                <div class="identitas text-center mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-3">
                        1. Identitas
                    </div>
                    <table class="w-100 border border-1 border-black text-start">
                        <tr class="">
                            <td style="width: 20%;" class="border border-1 border-black">Program Studi</td>
                            <td style="width: 30%;" class="border border-1 border-black" colspan="2"><?= $identitas['program_studi'] ?></td>
                            <td style="width: 10%;" class="border border-1 border-black">Semester</td>
                            <td style="width: 40%;" class="border border-1 border-black" colspan="5"><?php if($identitas['semester'] % 2 === 0 ) { echo 'Genap'; } else { echo 'Gasal'; }  ?> (<?= $identitas['semester'] ?>)</td>
                        </tr>
                        <tr>
                            <td class="border border-1 border-black">Nama & Kode Mata Kuliah</td>
                            <td class="border border-1 border-black" colspan="2"><?= $identitas['nama_mata_kuliah'] ?> (<?= $identitas['kode'] ?>)</td>
                            <td class="border border-1 border-black">Bobot SKS</td>
                            <td class="border border-1 border-black" colspan="5"><?= $identitas['bobot_sks'] ?></td>
                        </tr>
                        <tr>
                            <td class="border border-1 border-black align-top" rowspan="4">Detail Persentase Penilaian</td>
                            <td style="width: 20%;" class="border-end-0 border-bottom-0 border-1 border-black">&#9632; Presensi</td>
                            <td class="border-start-0 border-bottom-0 border-1 border-black"><?= $identitas['nilai_presensi'] ?>%</td>
                            <td class="border-bottom-0 border-1 border-black">Dosen</td>
                            <td class="border border-1 border-black align-top" colspan="5" rowspan="2"><?= $identitas['pengampu'] ?> | <?= $identitas['nik_pengampu'] ?></td>
                        </tr>
                        <tr>
                            <td class="border-end-0 border-top-0 border-bottom-0 border-1 border-black">&#9632; Ujian Mid Semester</td>
                            <td class="border-start-0 border-top-0 border-bottom-0  border-1 border-black"><?= $identitas['nilai_mid'] ?>%</td>
                            <td class="border-top-0 border-1 border-black">Pengampu</td>
                        </tr>
                        <tr>
                            <td class="border-top-0 border-bottom-0 border-end-0 border-1 border-black">&#9632; Ujian Akhir Semester</td>
                            <td class="border-top-0 border-bottom-0 border-start-0 border-1 border-black"><?= $identitas['nilai_akhir'] ?>%</td>
                            <td class="border-bottom-0 border-1 border-black">Klasifikasi</td>
                            <td class="border border-1 border-black text-center">&gt;80 </td>
                            <td class="border border-1 border-black text-center">&ge;60 & &lt;80 </td>
                            <td class="border border-1 border-black text-center">&ge;40 & &lt;60</td>
                            <td class="border border-1 border-black text-center">&ge;20 & &lt;40</td>
                            <td class="border border-1 border-black text-center">&lt;20</td>
                        </tr>
                        <tr>
                            <td class="border-top-0 border-end-0 border-1 border-black">&#9632; Tugas</td>
                            <td class="border-top-0 border-start-0 border-1 border-black"><?= $identitas['nilai_tugas'] ?>%</td>
                            <td class="border-top-0  border-1 border-black">Nilai</td>
                            <td class="border border-1 border-black text-center">A</td>
                            <td class="border border-1 border-black text-center">B</td>
                            <td class="border border-1 border-black text-center">C</td>
                            <td class="border border-1 border-black text-center">D</td>
                            <td class="border border-1 border-black text-center">E</td>
                        </tr>
                    </table>
                </div>

                <!-- Gambaran Umum -->
                <div class="gambaran mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-1">
                        2. Gambaran Umum
                    </div>
                    <ul>
                        <?php foreach($gambaran_umum as $gu) : ?>
                        <li><?= $gu['content_gambaran'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <!-- Capaian Pembelajaran-->
                <div class="capaian mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-1">
                        3. Capaian Pembelajaran
                    </div>
                    <ul>
                        <?php foreach($capaian_pembelajaran as $cp) : ?>
                        <li><?= $cp['content_capaian'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <!-- Prasyarat-->
                <div class="prasyarat mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-1">
                        4. Prasyarat dan Pengetahuan Awal (Prior Knowlegde)
                    </div>
                    <ul>
                        <?php foreach($prasyarat as $p) : ?>
                        <li><?= $p['content_prasyarat'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <!-- Unit Pembelajaran-->
                <div class="prasyarat mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-3">
                        5. Unit-Unit Pembelajaran secara Spesifik
                    </div>
                    <table class="w-100 border border-1 border-black">
                        <tr class="bg-info text-center fw-bold">
                            <td style="width: 18%;">Kemampuan Akhir yang Diharapkan</td>
                            <td style="width: 14%;" class="border border-1 border-black">Indikator</td>
                            <td style="width: 18%;">Bahan Kajian</td>
                            <td style="width: 13%;" class="border border-1 border-black">Metode Pembelajaran</td>
                            <td style="width: 10%;">Waktu</td>
                            <td style="width: 14%;" class="border border-1 border-black">Metode Penilaian</td>
                            <td style="width: 13%;">Bahan Ajar</td>
                        </tr>
                        <?php foreach($unit_pembelajaran as $up) : ?>
                        <tr>
                            <td class="border border-1 border-black"><?= $up['unit_kemampuan'] ?></td>
                            <td class="border border-1 border-black"><?= $up['unit_indikator'] ?></td>
                            <td class="border border-1 border-black"><?= $up['bahan_kajian'] ?></td>
                            <td class="border border-1 border-black"><?= $up['metode_pembelajaran'] ?></td>
                            <td class="border border-1 border-black text-center"><?= $up['unit_waktu'] ?></td>
                            <td class="border border-1 border-black"><?= $up['metode_penilaian'] ?></td>
                            <td class="border border-1 border-black"><?= $up['bahan_ajar'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>

                <!-- Tugas/Aktivitas-->
                <div class="prasyarat mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-3">
                        6. Tugas/Aktivitas dan Penilaian
                    </div>
                    <table class="w-100 border border-1 border-black">
                        <tr class="bg-info text-center fw-bold">
                            <td style="width: 16%;">Tugas/Aktivitas </td>
                            <td style="width: 18%;" class="border border-1 border-black">Kemampuan akhir yang diharapkan atau dievaluasi </td>
                            <td style="width: 13%;">Waktu</td>
                            <td style="width: 13%;" class="border border-1 border-black">Bobot</td>
                            <td style="width: 20%;">Kriteria Penilaian</td>
                            <td style="width: 20%;" class="border border-1 border-black">Indikator Penilaian</td>
                        </tr>
                        <?php foreach($tugas_penilaian as $tp) : ?>
                        <tr>
                            <td class="border border-1 border-black"><?= $tp['tugas'] ?></td>
                            <td class="border border-1 border-black"><?= $tp['tugas_kemampuan'] ?></td>
                            <td class="border border-1 border-black text-center"><?= $tp['tugas_waktu'] ?></td>
                            <td class="text-center border border-1 border-black"><?= $tp['bobot'] ?></td>
                            <td class="border border-1 border-black"><?= $tp['kriteria_penilaian'] ?></td>
                            <td class="border border-1 border-black"><?= $tp['tugas_indikator'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>

                <!-- Referensi-->
                <div class="prasyarat mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-1">
                        7. Referensi
                    </div>
                    <ul>
                        <?php foreach($referensi as $r) : ?>
                        <li><?= $r['content_referensi'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <!-- Rencana Pembelajaran-->
                <div class="prasyarat mt-4" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="grey text-start fw-semibold bg-secondary ps-1 mb-3">
                        8. Rencana Pelaksanaan Pembelajaran
                    </div>
                    <table class="w-100 border border-1 border-black">
                        <tr class="bg-info text-center fw-bold">
                            <td style="width: 8%;">Minggu/<br>pertemuan</td>
                            <td style="width: 20%;" class="border border-1 border-black">Kemampuan Akhir yang Diharapkan </td>
                            <td style="width: 15%;">Indikator</td>
                            <td style="width: 14%;" class="border border-1 border-black">Topik & Sub Topik </td>
                            <td style="width: 15%;">Aktivitas dan Strategi Pembelajaran</td>
                            <td style="width: 10%;" class="border border-1 border-black">Waktu</td>
                            <td style="width: 20%;">Penilaian</td>
                        </tr>
                        <?php foreach($rencana_pembelajaran as $rp) : ?> 
                        <tr>
                            <td class="border border-1 border-black text-center"><?= $rp['minggu'] ?></td>
                            <td class="border border-1 border-black"><?= $rp['rencana_kemampuan'] ?></td>
                            <td class="border border-1 border-black"><?= $rp['rencana_indikator'] ?></td>
                            <td class="border border-1 border-black"><?= $rp['topik'] ?></td>
                            <td class="border border-1 border-black text-center"><?= $rp['aktivitas'] ?></td>
                            <td class="border border-1 border-black text-center"><?= $rp['rencana_waktu'] ?></td>
                            <td class="border border-1 border-black"><?= $rp['penilaian'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src="<?= base_url('assets') ?>/js/bootstrap.js"></script>
  </body>
</html>
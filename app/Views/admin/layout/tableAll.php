<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets-template/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets-template/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            color: #000;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid rgba(0, 0, 0, 0.5);
        }

        th {
            background-color: #4d94ff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #e6f7ff;
        }

        .border-primary {
            border-color: #5c3c8b !important;
        }
    </style>

    </style>
</head>

<body id="page-top">
    <?php if (!isset($isPDF)) : ?>
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?= $this->include('admin/layout/sidebar')  ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?= $this->include('admin/layout/navbar')  ?>
                    <section class="container-fluid">
                        <div class="starter-template  mt-5 mb-5">
                        <?php endif; ?>

                        <!-- Decition START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku Keputusan camat/Lurah</h1>
                            <?php if (!isset($isPDF)) : ?>
                                <a href="<?= base_url('generateAll-pdf'); ?>" class="btn btn-primary mb-3">Create PDF</a>
                            <?php endif; ?>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th colspan="2">Tanggal dan Nomor Keputusan</th>
                                    <th rowspan="2">Tentang</th>
                                    <th rowspan="2">Uraian Singkat</th>
                                    <th colspan="2">Dilaporkan</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                </tr>
                                <?php foreach ($decision as $i => $d) : ?>
                                    <tr>

                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['No']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Tanggal_Keputusan']; ?></td>
                                        <td><?= $d['Nomor_Keputusan']; ?></td>
                                        <td><?= $d['Tentang']; ?></td>
                                        <td><?= $d['Uraian_Singkat']; ?></td>
                                        <td><?= $d['Tanggal_Dilaporkan']; ?></td>
                                        <td><?= $d['Nomor_Dilaporkan']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- Decition END -->

                        <!-- Inventarisasi START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku inventarisasi</h1>
                            <div>
                            </div>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Jenis Barang/Bangunan</th>
                                    <th colspan="3">Asal Barang</th>
                                    <th colspan="2">Keadaan Barang Awal Tahun</th>
                                    <th colspan="4">Penghapusan</th>
                                    <th colspan="2">Keadaan Barang Akhir Tahun</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Dibeli Sendiri</th>
                                    <th>Bantuan Pemerintah</th>
                                    <th>Sumbangan</th>
                                    <th>Baik</th>
                                    <th>Rusak</th>
                                    <th>Rusak</th>
                                    <th>Dijual</th>
                                    <th>Disumbangkan</th>
                                    <th>Tanggal Penghapusan</th>
                                    <th>Baik</th>
                                    <th>Rusak</th>
                                </tr>
                                <?php foreach ($inventarisasi as $i => $d) : ?>
                                    <tr>

                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['id']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Jenis_Barang']; ?></td>
                                        <td><?= $d['Dibeli_Sendiri']; ?></td>
                                        <td><?= $d['Bantuan_Pemerintah']; ?></td>
                                        <td><?= $d['Sumbangan']; ?></td>
                                        <td><?= $d['Baik_Awal']; ?></td>
                                        <td><?= $d['Rusak_Awal']; ?></td>
                                        <td><?= $d['Rusak_P']; ?></td>
                                        <td><?= $d['Dijual_P']; ?></td>
                                        <td><?= $d['Disumbangkan_P']; ?></td>
                                        <td><?= $d['Tanggal_Penghapusan']; ?></td>
                                        <td><?= $d['Baik_Akhir']; ?></td>
                                        <td><?= $d['Rusak_Akhir']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- Inventarisasi END -->


                        <!-- APARAT SECTION START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku Data Aparat</h1>
                            <div>
                            </div>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama Lengkap</th>
                                    <th rowspan="2">NIAP</th>
                                    <th rowspan="2">NIP</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th colspan="2">Tempat dan Tanggal Lahir</th>
                                    <th rowspan="2">Agama</th>
                                    <th rowspan="2">Pangkat Golongan</th>
                                    <th rowspan="2">Jabatan</th>
                                    <th rowspan="2">Pendidikan Terakhir</th>
                                    <th colspan="2">Keputusan Pengangkatan</th>
                                    <th colspan="2">Keputusan Pemberhentian</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Tempat</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                </tr>
                                <?php foreach ($aparat as $i => $d) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['No']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Nama_Lengkap']; ?></td>
                                        <td><?= $d['NIAP']; ?></td>
                                        <td><?= $d['NIP']; ?></td>
                                        <td><?= $d['Jenis_Kelamin']; ?></td>
                                        <td><?= $d['Tempat']; ?></td>
                                        <td><?= $d['Tanggal']; ?></td>
                                        <td><?= $d['Agama']; ?></td>
                                        <td><?= $d['Pangkat_Golongan']; ?></td>
                                        <td><?= $d['Jabatan']; ?></td>
                                        <td><?= $d['Pendidikan_Terakhir']; ?></td>
                                        <td><?= $d['Tanggal_Pengangkatan']; ?></td>
                                        <td><?= $d['Nomor_Pengangkatan']; ?></td>
                                        <td><?= $d['Tanggal_Pemberhentian']; ?></td>
                                        <td><?= $d['Nomor_Pemberhentian']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- APARAT SECTION END -->

                        <!-- TANAH SECTION START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku Data Tanah</h1>
                            <div>
                            </div>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th colspan="2">Nama</th>
                                    <th rowspan="2">Luas (M2)</th>
                                    <th colspan="8">Status Tanah</th>
                                    <th colspan="2">Bersertifikat</th>
                                    <th colspan="6">Penggunaan Tanah</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Perorangan</th>
                                    <th>Badan Hukum</th>
                                    <th>HM</th>
                                    <th>HGB</th>
                                    <th>HP</th>
                                    <th>HGU</th>
                                    <th>HPL</th>
                                    <th>MA</th>
                                    <th>VP</th>
                                    <th>TN</th>
                                    <th>Sudah</th>
                                    <th>Belum</th>
                                    <th>Perumahan</th>
                                    <th>Perdagangan</th>
                                    <th>Perkantoran</th>
                                    <th>Industri</th>
                                    <th>Fasilitas_Umum</th>
                                    <th>Lain-Lain</th>
                                </tr>
                                <?php foreach ($tanah as $i => $d) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['No']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Perorangan']; ?></td>
                                        <td><?= $d['Badan_Hukum']; ?></td>
                                        <td><?= $d['Luas']; ?></td>
                                        <td><?= $d['HM']; ?></td>
                                        <td><?= $d['HGB']; ?></td>
                                        <td><?= $d['HP']; ?></td>
                                        <td><?= $d['HGU']; ?></td>
                                        <td><?= $d['HPL']; ?></td>
                                        <td><?= $d['MA']; ?></td>
                                        <td><?= $d['VP']; ?></td>
                                        <td><?= $d['TN']; ?></td>
                                        <td><?= $d['Sudah']; ?></td>
                                        <td><?= $d['Belum']; ?></td>
                                        <td><?= $d['Perumahan']; ?></td>
                                        <td><?= $d['Perdagangan']; ?></td>
                                        <td><?= $d['Perkantoran']; ?></td>
                                        <td><?= $d['Industri']; ?></td>
                                        <td><?= $d['Fasilitas_Umum']; ?></td>
                                        <td><?= $d['Lain_Lain']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- TANAH SECTION END -->


                        <!-- AGENDA MASUK SECTION START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku Agenda Surat Masuk</h1>
                            <div>
                            </div>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama Instansi Yang Mengirim/Asal Surat</th>
                                    <th colspan="2">Nomor Surat dan Tanggal</th>
                                    <th rowspan="2">Perihal</th>
                                    <th rowspan="2">Penanggung jawab Pengelola</th>
                                    <th rowspan="2">Tanggal Penerimaan</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                </tr>
                                <?php foreach ($agendam as $i => $d) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['No']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Asal_Surat']; ?></td>
                                        <td><?= $d['Nomor']; ?></td>
                                        <td><?= $d['Tanggal']; ?></td>
                                        <td><?= $d['Perihal']; ?></td>
                                        <td><?= $d['Pj_Pengelola']; ?></td>
                                        <td><?= $d['T_Penerimaan']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- AGENDA MASUK SECTION END -->




                        <!-- AGENDA KELUAR START -->
                        <section class="container-fluid mt-5 mb-5">
                            <h1 style="text-align: center;" class="text-dark">Buku Agenda Surat Keluar</h1>
                            <div>
                            </div>
                            <table>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama Instansi Yang Dituju</th>
                                    <th colspan="2">Nomor Surat dan Tanggal</th>
                                    <th rowspan="2">Perihal</th>
                                    <th rowspan="2">Penanggung jawab Pengelola</th>
                                    <th rowspan="2">Tanggal Pengiriman</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                </tr>
                                <?php foreach ($agendak as $i => $d) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <?php if (!isset($isPDF)) : ?>
                                            <input type="hidden" <?= $d['No']; ?>>
                                        <?php endif; ?>
                                        <td><?= $d['Nama_Instansi']; ?></td>
                                        <td><?= $d['Nomor']; ?></td>
                                        <td><?= $d['Tanggal']; ?></td>
                                        <td><?= $d['Perihal']; ?></td>
                                        <td><?= $d['Pj_Pengelola']; ?></td>
                                        <td><?= $d['T_Pengiriman']; ?></td>
                                        <td><?= $d['Keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!-- AGENDA KELUAR END -->


                        <?php if (!isset($isPDF)) : ?>
                        </div>
                        <!-- End of Main Content -->
                        <?= $this->include('admin/layout/footer')  ?>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->




            <?= $this->include('admin/layout/alert')  ?>
        <?php endif; ?>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets-template/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets-template/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets-template/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets-template/js/sb-admin-2.min.js'); ?>"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url('assets-template/vendor/chart.js/Chart.min.js'); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url('assets-template/js/demo/chart-area-demo.js'); ?>"></script>
        <script src="<?= base_url('assets-template/js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>
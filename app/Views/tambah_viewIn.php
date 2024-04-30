<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Datas Inventarisasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // JavaScript function to show a popup notification
        function showAlert(message) {
            alert(message);
        }

        // Check if there is an error message in the session and show the popup
        <?php if (session()->has('error')) : ?>
            window.onload = function() {
                showAlert("<?= session('error') ?>");
            };
        <?php endif; ?>
    </script>
</head>

<body>
    <!-- Navbar Section START -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url('/'); ?>" class="nav-link px-2">Home</a></li>
                <li><a href="<?= base_url(); ?>tambahIn" class="nav-link px-2 link-secondary">CreateInventarisasi</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fitur
                    </a>
                    <ul class="dropdown-menu carddd">
                        <li><a class="dropdown-item" href="<?= base_url('decision'); ?>">Decition</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('inventarisasi'); ?>">Inventarisasi</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('aparat'); ?>">aparat</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('tanah'); ?>">tanah</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('agendam'); ?>">Agenda Masuk</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('agendak'); ?>">Agenda Keluar</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="<?= base_url(); ?>admin" role="button" class="btn btn-primary">AdminDatas</a>
            </div>
        </header>
    </div>
    <!-- Navbar Section END -->

    <section class="container">
        <h1 class="mt-5 mb-4 text-center">Tambah Datas Inventarisasi</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="/inventarisasi/create" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>

                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang/Bangunan</label>
                        <input type="text" id="jenis_barang" name="jenis_barang" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-xl-12 mb-4">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5>Asal Barang</h5>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="dibeli_sendiri" class="form-label">Dibeli Sendiri</label>
                                        <input type="number" id="dibeli_sendiri" name="dibeli_sendiri" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="bantuan_pemerintah" class="form-label">Bantuan Pemerintah</label>
                                        <input type="number" id="bantuan_pemerintah" name="bantuan_pemerintah" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="sumbangan" class="form-label">sumbangan:</label>
                                        <input type="number" id="sumbangan" name="sumbangan" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 mb-4">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5>Keadaan Barang Awal Tahun</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="baik_awal" class="form-label">Baik</label>
                                                    <input type="number" id="baik_awal" name="baik_awal" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="rusak_awal" class="form-label">Rusak</label>
                                                    <input type="number" id="rusak_awal" name="rusak_awal" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-md-6">


                <div class="row">
                    <div class="col-xl-12 mb-4">
                        <div class="row">
                            <div class="col text-center">
                                <h5>Penghapusan</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="rusak_p" class="form-label">Rusak</label>
                                    <input type="number" id="rusak_p" name="rusak_p" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="dijual_p" class="form-label">Dijual</label>
                                    <input type="number" id="dijual_p" name="dijual_p" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="disumbangkan_p" class="form-label">Disumbangkan</label>
                                    <input type="number" id="disumbangkan_p" name="disumbangkan_p" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal_penghapusan" class="form-label">Tanggal Penghapusan </label>
                                    <input type="date" id="tanggal_penghapusan" name="tanggal_penghapusan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5>Keadaan Barang Akhir Tahun</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="baik_akhir" class="form-label">Baik</label>
                                    <input type="number" id="baik_akhir" name="baik_akhir" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="rusak_akhir" class="form-label">Rusak</label>
                                    <input type="number" id="rusak_akhir" name="rusak_akhir" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="form-control " rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Tambah Inventarisasi" class="btn btn-primary">
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
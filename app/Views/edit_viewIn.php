<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <li><a href="<?= base_url(); ?>editIn" class="nav-link px-2 link-secondary">UpdateInventarisasi</a></li>
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Edit Datas</h2>
                <form action="/inventarisasi/update" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="id" name="id" value="<?= $inventarisasi['id'] ?>">
                    <div class="mb-3">
                        <input type="hidden" id="jenis_barang" name="jenis_barang" value="<?= $inventarisasi['Jenis_Barang'] ?>" class="form-control">
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
                                        <input type="number" id="dibeli_sendiri" value="<?= $inventarisasi['Dibeli_Sendiri'] ?>" name="dibeli_sendiri" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="bantuan_pemerintah" class="form-label">Bantuan Pemerintah</label>
                                        <input type="number" id="bantuan_pemerintah" value="<?= $inventarisasi['Bantuan_Pemerintah'] ?>" name="bantuan_pemerintah" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="sumbangan" class="form-label">sumbangan:</label>
                                        <input type="number" id="sumbangan" name="sumbangan" value="<?= $inventarisasi['Sumbangan'] ?>" class="form-control">
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
                                                    <input type="number" id="baik_awal" name="baik_awal" value="<?= $inventarisasi['Baik_Awal'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="rusak_awal" class="form-label">Rusak</label>
                                                    <input type="number" id="rusak_awal" name="rusak_awal" value="<?= $inventarisasi['Rusak_Awal'] ?>" class="form-control">
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
                                    <input type="number" id="rusak_p" name="rusak_p" value="<?= $inventarisasi['Rusak_P'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="dijual_p" class="form-label">Dijual</label>
                                    <input type="number" id="dijual_p" name="dijual_p" value="<?= $inventarisasi['Dijual_P'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="disumbangkan_p" class="form-label">Disumbangkan</label>
                                    <input type="number" id="disumbangkan_p" name="disumbangkan_p" value="<?= $inventarisasi['Disumbangkan_P'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal_penghapusan" class="form-label">Tanggal Penghapusan </label>
                                    <input type="date" id="tanggal_penghapusan" name="tanggal_penghapusan" value="<?= $inventarisasi['Tanggal_Penghapusan'] ?>" class="form-control">
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
                                    <input type="number" id="baik_akhir" name="baik_akhir" value="<?= $inventarisasi['Baik_Akhir'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="rusak_akhir" class="form-label">Rusak</label>
                                    <input type="number" id="rusak_akhir" name="rusak_akhir" value="<?= $inventarisasi['Rusak_Akhir'] ?>" class="form-control">
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
                            <textarea id="keterangan" name="keterangan" class="form-control " rows="4"><?= $inventarisasi['Keterangan'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Tambah Inventarisasi" class="btn btn-primary">
        </form>
    </section>


</body>

</html>
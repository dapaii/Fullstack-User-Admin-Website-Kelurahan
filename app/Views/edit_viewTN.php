<!DOCTYPE html>
<html>

<head>
    <title>Edit Tanah</title>
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
                <li><a href="<?= base_url(); ?>editTN" class="nav-link px-2 link-secondary">UpdateTanah</a></li>
                <li class="nav-item dropdown">
                        <a class="nav-link link-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1 class="mt-5 mb-4 text-center">Edit Tanah</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/tanah/update" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="no" name="no" value="<?= $tanah['No'] ?>">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-12 mt-4 text-center">
                                    <h5>Nama</h5>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="perorangan" class="form-label">Perorangan</label>
                                        <input type="text" id="perorangan" name="perorangan" value="<?= $tanah['Perorangan'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="badan_hukum" class="form-label">Badan Hukum</label>
                                        <input type="text" id="badan_hukum" name="badan_hukum" value="<?= $tanah['Badan_Hukum'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="luas" class="form-label">Luas</label>
                        <input type="text" id="luas" name="luas" value="<?= $tanah['Luas'] ?>" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-12 mt-4 text-center">
                                    <h5>Status Tanah</h5>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <input type="hidden" id="hm" name="hm" value="<?= $tanah['HM'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <label for="hgb" class="form-label">Hak Guna Bangunan</label>
                                        <input type="text" id="hgb" name="hgb" value="<?= $tanah['HGB'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="hp" class="form-label">Hak Pakai</label>
                                        <input type="text" id="hp" name="hp" value="<?= $tanah['HP'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="hgu" class="form-label">Hak Guna Usaha</label>
                                        <input type="text" id="hgu" name="hgu" value="<?= $tanah['HGU'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="hpl" class="form-label">Hak Pengelolaan</label>
                                        <input type="text" id="hpl" name="hpl" value="<?= $tanah['HPL'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="ma" class="form-label">Hak Milik Adat</label>
                                        <input type="text" id="ma" name="ma" value="<?= $tanah['MA'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="vp" class="form-label">Verponding Indonesia</label>
                                        <input type="text" id="vp" name="vp" value="<?= $tanah['VP'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="tn" class="form-label">Tanah Negara</label>
                                        <input type="text" id="tn" name="tn" value="<?= $tanah['TN'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12 mt-4 text-center">
                                <h5>Bersertifikat</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="sudah" class="form-label">Sudah</label>
                                    <input type="text" type="text" id="sudah" name="sudah" value="<?= $tanah['Sudah'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="belum" class="form-label">Belum</label>
                                    <input type="text" id="belum" name="belum" value="<?= $tanah['Belum'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <h5>Penggunaan Tanah</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="perumahan" class="form-label">Perumahan</label>
                                    <input type="text" id="perumahan" name="perumahan" value="<?= $tanah['Perumahan'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="perdagangan" class="form-label">Perdagangan</label>
                                    <input type="text" id="perdagangan" name="perdagangan" value="<?= $tanah['Perdagangan'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="perkantoran" class="form-label">Perkantoran</label>
                                    <input type="text" id="perkantoran" name="perkantoran" value="<?= $tanah['Perkantoran'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="industri" class="form-label">Industri</label>
                                    <input type="text" id="industri" name="industri" value="<?= $tanah['Industri'] ?>" class="form-control"> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="fasilitas_umum" class="form-label">Fasilitas Umum</label>
                                    <input type="text" id="fasilitas_umum" name="fasilitas_umum" value="<?= $tanah['Fasilitas_Umum'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="lain_lain" class="form-label">Lain - Lain</label>
                                    <input type="text" id="lain_lain" name="lain_lain" value="<?= $tanah['Lain_Lain'] ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Keterangan" class="form-label">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" class="form-control" rows="4"><?= $tanah['Keterangan'] ?></textarea>
                </div>
                <input type="submit" value="Update Tanah" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
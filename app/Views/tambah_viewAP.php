<!DOCTYPE html>
<html>

<head>
    <title>Tambah Aparat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script>
        // JavaScript function to show a popup notification
        function showAlert(message) {
            alert(message);
        }

        // Check if there is an error message in the session and show the popup
        <?php if (session()->has('error')) : ?>
            window.onload = function () {
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
                <li><a href="<?= base_url(); ?>tambahAP" class="nav-link px-2 link-secondary">CreateAparat</a></li>
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
        <h1 class="mt-5 mb-4 text-center">Tambah Aparat</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/aparat/create" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="no" name="no">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="niap" class="form-label">NIAP</label>
                        <input type="number" id="niap" name="niap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" id="nip" name="nip" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-12 mt-4 text-center">
                                    <h5>Tempat dan Tanggal Lahir</h5>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="tempat" class="form-label">Tempat</label>
                                        <input type="text" id="tempat" name="tempat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="Date" id="tanggal" name="tanggal" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-6">

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" id="agama" name="agama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pangkat_golongan" class="form-label">Pangkat Golongan</label>
                    <input type="text" id="pangkat_golongan" name="pangkat_golongan" class="form-control">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                    <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12 mt-4 text-center">
                                <h5>Keputusan Pengangkatan</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal_pengangkatan" class="form-label">Tanggal</label>
                                    <input type="date" id="tanggal_pengangkatan" name="tanggal_pengangkatan" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="nomor_pengangkatan" class="form-label">Nomor</label>
                                    <input type="number" id="nomor_pengangkatan" name="nomor_pengangkatan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12 mt-4 text-center">
                                <h5>Keputusan Pemberhentian</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tanggal_pemberhentian" class="form-label">Tanggal</label>
                                    <input type="date" id="tanggal_pemberhentian" name="tanggal_pemberhentian" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="nomor_pemberhentian" class="form-label">Nomor</label>
                                    <input type="number" id="nomor_pemberhentian" name="nomor_pemberhentian" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
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
        <input type="submit" value="Tambah Aparat" class="btn btn-primary">
        </form>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
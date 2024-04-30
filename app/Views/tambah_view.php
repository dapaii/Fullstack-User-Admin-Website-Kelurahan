<!DOCTYPE html>
<html>

<head>
    <title>Tambah Decision</title>
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
                <li><a href="<?= base_url(); ?>tambah" class="nav-link px-2 link-secondary">CreateDecision</a></li>
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
        <h1 class="mt-5 mb-4 text-center">Tambah Decision</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/decision/create" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="no" name="no">
                    <div class="mb-3">
                        <label for="tanggal_keputusan" class="form-label">Tanggal Keputusan:</label>
                        <input type="date" id="tanggal_keputusan" name="tanggal_keputusan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_keputusan" class="form-label">Nomor Keputusan:</label>
                        <input type="number" id="nomor_keputusan" name="nomor_keputusan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tentang" class="form-label">Tentang:</label>
                        <input type="text" id="tentang" name="tentang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="uraian_singkat" class="form-label">Uraian Singkat:</label>
                        <textarea id="uraian_singkat" name="uraian_singkat" class="form-control" rows="4"></textarea>
                    </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-4">
                    <label for="tanggal_dilaporkan" class="form-label">Tanggal Dilaporkan:</label>
                    <input type="date" id="tanggal_dilaporkan" name="tanggal_dilaporkan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nomor_dilaporkan" class="form-label">Nomor Dilaporkan:</label>
                    <input type="number" id="nomor_dilaporkan" name="nomor_dilaporkan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan:</label>
                    <textarea id="keterangan" name="keterangan" class="form-control" rows="4"></textarea>
                </div>
                <input type="submit" value="Tambah Decision" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
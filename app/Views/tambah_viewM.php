<!DOCTYPE html>
<html>

<head>
    <title>Tambah Agenda Masuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
                <li><a href="<?= base_url(); ?>tambah" class="nav-link px-2 link-secondary">CreateDecision</a></li>
                <li><a href="<?= base_url(); ?>decision" class="nav-link px-2">Decision</a></li>
                <li><a href="<?= base_url(); ?>decision" class="nav-link px-2">Decision</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="<?= base_url(); ?>admin" role="button" class="btn btn-primary">AdminDatas</a>
            </div>
        </header>
    </div>
    <!-- Navbar Section END -->



    <section class="container">
        <h1 class="mt-5 mb-4 text-center">Tambah Agenda Masuk</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/agendam/create" method="post" class="card p-4 shadow rounded" style="background-color: #f9f9f9;">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="no" name="no">
                    <div class="mb-3">
                        <label for="asal_surat" class="form-label">Nama Instansi Yang Mengirim/Asal Surat</label>
                        <input type="text" id="asal_surat" name="asal_surat" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-12 mt-4 text-center">
                                    <h5>Nomor Surat dan Tanggal</h5>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nomor" class="form-label">Nomor</label>
                                        <input type="number" id="nomor" name="nomor" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="perihal" class="form-label">Perihal</label>
                        <textarea id="perihal" name="perihal" class="form-control" rows="4"></textarea>
                    </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-4">
                    <label for="pj_pengelola" class="form-label">Penanggung Jawab Pengelola</label>
                    <input type="text" id="pj_pengelola" name="pj_pengelola" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="t_penerimaan" class="form-label">Tanggal Penerima</label>
                    <input type="date" id="t_penerimaan" name="t_penerimaan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" class="form-control" rows="4"></textarea>
                </div>
                <input type="submit" value="Tambah Agenda Masuk" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
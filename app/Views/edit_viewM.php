<!DOCTYPE html>
<html>

<head>
    <title>Edit Agenda Masuk</title>
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
                <li><a href="<?= base_url(); ?>edit" class="nav-link px-2 link-secondary">UpdateDecision</a></li>
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
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Edit Datas</h2>
                <form class="row g-3" action="/agendam/update" method="post">
                    <?= csrf_field(); ?>
                    <div class="col-md-12">
                        <input type="hidden" id="no" name="no" value="<?= $agendam['No'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="asal_surat" class="form-label">Asal Surat</label>
                        <input type="text" id="asal_surat" name="asal_surat" value="<?= $agendam['Asal_Surat'] ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" value="<?= $agendam['Tanggal'] ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" id="nomor" name="nomor" value="<?= $agendam['Nomor'] ?>" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="perihal" class="form-label">Perihal</label>
                        <textarea id="perihal" name="perihal" class="form-control" style="height: 200px;"><?= $agendam['Perihal'] ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="pj_pengelola" class="form-label">Penanggung jawab Pengelola</label>
                        <input type="text" id="pj_pengelola" name="pj_pengelola" value="<?= $agendam['Pj_Pengelola'] ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="t_penerimaan" class="form-label">Tanggal Penerimaan</label>
                        <input type="date" id="t_penerimaan" name="t_penerimaan" value="<?= $agendam['T_Penerimaan'] ?>" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea type="text" id="keterangan" name="keterangan" class="form-control" style="height: 270px;"><?= $agendam['Keterangan'] ?></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" value="Update AgendaK" class="btn btn-primary">Update Agenda Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
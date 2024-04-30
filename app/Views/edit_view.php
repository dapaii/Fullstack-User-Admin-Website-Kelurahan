<!DOCTYPE html>
<html>

<head>
    <title>Edit Decision</title>
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
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Edit Datas</h2>
                <form class="row g-3" action="/decision/update" method="post">
                    <?= csrf_field(); ?>
                    <div class="col-md-12">
                        <input type="hidden" id="no" name="no" value="<?= $decision['No'] ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="tanggal_keputusan" class="form-label">Tgl Keputusan</label>
                        <input type="date" id="tanggal_keputusan" name="tanggal_keputusan" value="<?= $decision['Tanggal_Keputusan'] ?>" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" id="nomor_keputusan" name="nomor_keputusan" value="<?= $decision['Nomor_Keputusan'] ?>" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <label for="tentang" class="form-label">Tentang</label>
                        <textarea type="text" id="tentang" name="tentang" class="form-control" style="height: 200px;"><?= $decision['Tentang'] ?></textarea>
                    </div>
                    <div class="col-md-7">
                        <label for="uraian_singkat" class="form-label">Uraian Singkat</label>
                        <textarea id="uraian_singkat" name="uraian_singkat" class="form-control" style="height: 200px;"><?= $decision['Uraian_Singkat'] ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_dilaporkan" class="form-label">Tanggal Dilaporkan</label>
                        <input type="date" id="tanggal_dilaporkan" name="tanggal_dilaporkan" value="<?= $decision['Tanggal_Dilaporkan'] ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nomor_dilaporkan" class="form-label">No Dilaporkan</label>
                        <input type="number" id="nomor_dilaporkan" name="nomor_dilaporkan" value="<?= $decision['Nomor_Dilaporkan'] ?>" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea type="text" id="keterangan" name="keterangan" class="form-control" style="height: 270px;"><?= $decision['Keterangan'] ?></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" value="Update Decision" class="btn btn-primary">Update Decision</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
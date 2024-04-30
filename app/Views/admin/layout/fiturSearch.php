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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?= $this->include('admin/layout/sidebar')  ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?= $this->include('admin/layout/navbar')  ?>
                <section class="container">
                    <div class="starter-template text-center mt-5 mb-5">
                        <h2>Halo, <?= session()->get('name'); ?>!</h2>
                        <p class="lead">Selamat datang di Halaman Admin</p>
                    </div>

                    <section>
                        <a href="tambah" class="btn btn-success mb-4">Tambah Decision</a>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="/decision/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor_keputusan" class="form-label">No. (of the decision to edit):</label>
                                        <input type="number" id="nomor_keputusan" name="nomor_keputusan" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Decision" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/decision/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor_keputusan" class="form-label">No. (of the decision to delete):</label>
                                        <input type="number" id="nomor_keputusan" name="nomor_keputusan" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Decision" class="btn btn-danger">
                                </form>
                            </div>
                        </div>




                        <a href="tambahIn" class="btn btn-success mb-4 mt-5">Tambah Inventarisasi</a>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="/inventarisasi/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="jenis_barang" class="form-label">Name. (of the inventarisasi to edit):</label>
                                        <input type="text" id="jenis_barang" name="jenis_barang" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Inventarisasi" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/inventarisasi/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="jenis_barang" class="form-label">Name. (of the inventarisasi to delete):</label>
                                        <input type="text" id="jenis_barang" name="jenis_barang" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Inventarisasi" class="btn btn-danger">
                                </form>
                            </div>
                        </div>


                        <a href="tambahAP" class="btn btn-success mb-4 mt-5">Tambah Aparat</a>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/aparat/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="niap" class="form-label">Name. (of the aparat to edit):</label>
                                        <input type="text" id="niap" name="niap" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Aparat" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/aparat/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="niap" class="form-label">Name. (of the aparat to delete):</label>
                                        <input type="text" id="niap" name="niap" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Aparat" class="btn btn-danger">
                                </form>
                            </div>
                        </div>





                        <a href="tambahTN" class="btn btn-success mb-4 mt-5">Tambah Tanah</a>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/tanah/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="hm" class="form-label">Name. (of the tanah to edit):</label>
                                        <input type="text" id="hm" name="hm" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Tanah" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/tanah/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="hm" class="form-label">Name. (of the tanah to delete):</label>
                                        <input type="text" id="hm" name="hm" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Tanah" class="btn btn-danger">
                                </form>
                            </div>
                        </div>



                        <a href="tambahM" class="btn btn-success mb-4 mt-5">Tambah Agenda Masuk</a>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/agendam/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor" class="form-label">Name. (of the Agenda Masuk to edit):</label>
                                        <input type="text" id="nomor" name="nomor" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Agenda Masuk" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/agendam/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor" class="form-label">Name. (of the Agenda Masuk to delete):</label>
                                        <input type="text" id="nomor" name="nomor" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Agenda Masuk" class="btn btn-danger">
                                </form>
                            </div>
                        </div>





                        <a href="tambahK" class="btn btn-success mb-4 mt-5">Tambah Agenda Keluar</a>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/agendak/edit" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor" class="form-label">Name. (of the Agenda Keluar to edit):</label>
                                        <input type="text" id="nomor" name="nomor" class="form-control">
                                    </div>
                                    <input type="submit" value="Edit Agenda Keluar" class="btn btn-primary">
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="/agendak/delete" method="post" class="card p-4">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nomor" class="form-label">Name. (of the Agenda Keluar to delete):</label>
                                        <input type="text" id="nomor" name="nomor" class="form-control">
                                    </div>
                                    <input type="submit" value="Delete Agenda Keluar" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </section>
            </div>


            <!-- End of Main Content -->
            <?= $this->include('admin/layout/footer')  ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->




    <?= $this->include('admin/layout/alert')  ?>


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
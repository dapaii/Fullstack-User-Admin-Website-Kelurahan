<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Starter Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        body {
            background: linear-gradient(135deg, #6c8dff, #ffffff, #af60ff);
            color: #000;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .navbar-brand,
        .nav-link {
            color: rgba(0, 0, 0, 0.8) !important;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        .content {
            background: linear-gradient(135deg, #6c8dff, #ffffff, #af60ff);
            color: #000;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .carddd {
            background: linear-gradient(135deg, #af60ff, #6c8dff);
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #5c3c8b;
            border-color: #5c3c8b;
        }

        .btn-primary:hover {
            background-color: #6c7dff;
            border-color: #6c7dff;
        }

        .starter-template {
            padding: 5rem 1.5rem;
            text-align: center;
        }

        .border-primary {
            border-color: #5c3c8b !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Section Start -->
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom border-primary">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url('/'); ?>" class="nav-link px-2 link-light">Home</a></li>
                <li><a href="<?= base_url(); ?>#decition" class="nav-link px-2 link-light">Decision</a></li>
                <li><a href="<?= base_url(); ?>#inventarisasi" class="nav-link px-2 link-light">Inventarisasi</a></li>
                <li><a href="<?= base_url(); ?>#aparat" class="nav-link px-2 link-light">Aparat</a></li>
                <li><a href="<?= base_url(); ?>#tanah" class="nav-link px-2 link-light">Tanah</a></li>
                <li><a href="<?= base_url(); ?>#agendaMasuk" class="nav-link px-2 link-light">Agenda Masuk</a></li>
                <li><a href="<?= base_url(); ?>#agendaKeluar" class="nav-link px-2 link-light">Agenda Keluar</a></li>

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
                <a href="<?= base_url(); ?>/login" role="button" class="btn btn-outline-light me-2">Login</a>
                <a href="<?= base_url(); ?>/register" role="button" class="btn btn-primary">Sign-up</a>
            </div>
        </header>
    </div>
    <!-- Navbar Section END -->


    <section class="container mt-3 carddd">
        <h1>Hai ! <?= session()->get('name'); ?></h1>
    </section>


    <section class="container content mt-5" id="decition">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 mt-5">
                        <div class="col-xl-12">
                            <h1>Buku Keputusan Camat/Lurah</h1>
                        </div>
                        <div class="col-xl mt-4">
                            <p>Untuk melihat Datas Tabel Buku Keputusan Camat / Lurah, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <a href="<?= base_url('decision') ?>" class="btn btn-primary d-grid gap-2">Buku Keputusan camat</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <img src="<?= base_url('assets/camera.png'); ?>" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row carddd mt-4 ">
            <div class="col-xl-12 ">
                <div class="row">
                    <div class="col-xl-4 ">
                        <h3></h3>
                    </div>
                    <div class="col-xl-4 ">
                        <h3></h3>
                    </div>
                    <div class="col-xl-4 ">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content mt-4 " id="inventarisasi">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 carddd">
                        <img src="<?= base_url('assets/pohon.png') ?>" width="70%" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 mt-5">
                                <h1>Buku Inventarisasi</h1>
                                <p>Untuk melihat Datas Tabel Buku Inventarisasi, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                            </div>
                            <div class="col-xl-4 mt-3">
                                <a href="<?= base_url('inventarisasi') ?>" class="btn btn-primary d-grid gap-2">inventarisasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content mt-4 " id="aparat">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 carddd">
                        <img src="<?= base_url('assets/pohon.png') ?>" width="70%" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 mt-5">
                                <h1>Buku Data Aparat</h1>
                                <p>Untuk melihat Datas Tabel Buku Data Aparat, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                            </div>
                            <div class="col-xl-4 mt-3">
                                <a href="<?= base_url('aparat') ?>" class="btn btn-primary d-grid gap-2">Aparat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content mt-4 " id="tanah">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 carddd">
                        <img src="<?= base_url('assets/pohon.png') ?>" width="70%" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 mt-5">
                                <h1>Buku Data Tanah</h1>
                                <p>Untuk melihat Datas Tabel Buku Data Tanah, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                            </div>
                            <div class="col-xl-4 mt-3">
                                <a href="<?= base_url('tanah') ?>" class="btn btn-primary d-grid gap-2">Buku Tanah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content mt-4 " id="agendaMasuk">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 carddd">
                        <img src="<?= base_url('assets/pohon.png') ?>" width="70%" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 mt-5">
                                <h1>Buku Agenda Surat Masuk</h1>
                                <p>Untuk melihat Datas Tabel Buku Agenda Surat Masuk, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                            </div>
                            <div class="col-xl-4 mt-3">
                                <a href="<?= base_url('agendam') ?>" class="btn btn-primary d-grid gap-2">Agenda Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content mt-4 " id="agendaKeluar">
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 carddd">
                        <img src="<?= base_url('assets/pohon.png') ?>" width="70%" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 mt-5">
                                <h1>Agenda Keluar</h1>
                                <p>Untuk melihat Datas Tabel Buku Agenda Surat Keluar, Dimohon Untuk Click Button dibawah Sini 👇👇👇</p>
                            </div>
                            <div class="col-xl-4 mt-3">
                                <a href="<?= base_url('agendak') ?>" class="btn btn-primary d-grid gap-2">Agenda Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer START -->
    <div class="container-fluid mt-5" style="background-color: #1700FF;">
        <footer class="py-5">
            <div class="row text-white justify-content-center ">
                <div class="col-3 offset-md-1 mb-3 ">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-danger" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top text-white">
                <div class="col text-center">
                    <p>© 2024 Kelompok 3, Web Desa.</p>
                </div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Footer END -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
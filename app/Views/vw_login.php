<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .form-signin {
            width: 100%;
            max-width: 360px;
            padding: 15px;
            margin: auto;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.1);
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            margin-bottom: 15px;
            border-radius: 5px;
            padding: 10px;
        }

        .form-signin button {
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .form-signin button:hover {
            transform: translateY(-3px);
        }

        .form-signin p {
            margin-top: 20px;
            font-size: 14px;
        }

        .form-signin h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-signin .btn-primary {
            background-color: #764ba2;
            border-color: #764ba2;
        }

        .form-signin .btn-primary:hover {
            background-color: #5c3c8b;
            border-color: #5c3c8b;
        }

        .form-signin .text-muted {
            color: #aaa;
        }
    </style>
</head>

<body>

    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <h1 class="h3">Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
            <p class="mt-3 text-muted">&copy; Kelompok 3</p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

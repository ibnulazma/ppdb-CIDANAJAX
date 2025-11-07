<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE/dist/css/adminlte.min.css?v=3.2.0') ?>">

</head>

<style>
    body.swal2-shown {
        overflow: visible !important;
        padding-right: 0 !important;
    }
</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h5><b>SPMB</b>INKATA</h5>
            </div>
            <div class="card-body">





                <form action="<?= base_url('auth/cek_loginuser') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> " placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <small>
                                <?= $validation->getError('email'); ?>
                            </small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="Password" name="password" id="Show">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <small>
                                <?= $validation->getError('password'); ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-grup mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" id="exampleCheck1" onclick="myFunction()">
                                <label class="form-check-label  show-pass" for="flexCheckDefault">
                                    Tampilkan Kata Sandi
                                </label>
                            </div>
                            <p class="forgot"><a href="">Lupa Password??</a></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <div class="form text-center">
                        <a href="<?= base_url('auth/register') ?>">Belum punya akun????</a>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <?php
    $errors = session()->getFlashdata('errors');
    $pesan  = session()->getFlashdata('pesan');
    $error  = session()->getFlashdata('error');
    ?>

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('AdminLTE/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
    <!-- Bootstrap 4 -->

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"2437d112162f4ec4b63c3ca0eb38fb20","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        <?php if ($pesan) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                backdrop: false,
                text: '<?= esc($pesan) ?>',
                showConfirmButton: false,
                timer: 2000
            });
        <?php elseif ($error) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '<?= esc($error) ?>',
                backdrop: false,
                showConfirmButton: true
            });
        <?php endif; ?>

        <?php if ($errors) : ?>
            Swal.fire({
                icon: 'warning',
                title: 'Validasi Gagal!',
                backdrop: false,
                html: `
                <ul style="text-align:left;">
                    <?php foreach ($errors as $err) : ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            `,
                confirmButtonText: 'Ok'
            });
        <?php endif; ?>

        function myFunction() {
            var show = document.getElementById('Show');
            if (show.type == 'password') {
                show.type = 'text';
            } else {
                show.type = 'password';
            }
        }
    </script>

















</body>

</html>
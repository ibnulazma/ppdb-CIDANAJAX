<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();

$tahun = $db->table('tbl_ta')

    ->get()->getRowArray();
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PPDB SMP INSAN KAMIL Legok-Tangerang">

    <title><?= $title ?> SMP INSAN KAMIL| <?= $subtitle ?> </title>

    <link rel="icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/solid.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/dropzone/min/dropzone.min.css">
    <!-- iCheck for checkboxes and radio inputs -->


    <style>
        /* Jumbotron */






        .wa_btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: rgb(35, 243, 16);
            padding: 10px 20px;
            border-radius: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }


        .wa_btn i {
            font-size: 20px;
            padding: 10px 10px;
            background-color: rgb(35, 243, 16);
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            color: #fff;


        }

        .wa_btn .info {
            display: none;
        }

        .judul {
            display: none;
        }

        /* RESPONSIVE */
        @media (min-width: 992px) {


            .wa_btn {
                position: fixed;
                bottom: 30px;
                right: 30px;
                background-color: rgb(35, 243, 16);
                padding: 10px 20px;
                border-radius: 13px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
            }

            .wa_btn i {
                font-size: 40px;
                padding: 5px 5px;
                background-color: rgb(35, 243, 16);
                border-radius: 50%;
                height: 60px;
                width: 60px;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                right: 115px;
                color: #fff;
            }

            .wa_btn .info {
                display: contents;
            }

            .card-pricing.popular {
                z-index: 1;
                border: 3px solid #007bff;
            }

            .card-pricing .list-unstyled li {
                padding: .5rem 0;
                color: #6c757d;
            }

        }
    </style>

</head>

<body class="hold-transition layout-top-nav" style="background-color: rgb(240, 239, 239);">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url() ?>" class="navbar-brand">
                    <img src="<?= base_url() ?>/foto/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">PPDB SMP INSAN KAMIL</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth') ?>" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- /.navbar -->

        <div class="container text-center">
            <img src="<?= base_url() ?>/foto/logo.png" alt="" width="100px">
            <h6 style="font-size: 30px;font-weight:700; margin-top:20px">Formulir Pendaftaran Peserta Didik Baru</h6>
            <h6 style="font-size: 30px;font-weight:700">SMP INSAN KAMIL</h6>
            <h6 class="lead" style="font-weight: bold;">Tahun Pelajaran <?= $ta['ta'] ?></h6>
        </div>


        <div class="container text-center">

        </div>
        <div class="container mb-5 mt-5">
            <form onsubmit="sendpesan()">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nama" class="">Nama Orang Tua</label>
                                    <input type="text" class="form-control" id="orangtua" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nama">Telepon/WA</label>
                                    <input type="text" class="form-control" id="telepon" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nama" class="">Alamat Lengkap</label>
                                    <input type="text" id="alamat" class="form-control" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>



    <!-- ./wrapper -->
    <a href="https://wa.me/6285179541472?text=Daftar%20PPDB" target="_blank" class="wa_btn"><i class="fab fa-whatsapp"></i>
        <div class="info">
            Hubungi Kami
        </div>
    </a>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url() ?>/AdminLTE/dist/js/demo.js"></script> -->





</body>

</html>
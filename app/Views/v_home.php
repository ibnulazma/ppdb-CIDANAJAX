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


        .jumbotron {

            padding-top: 1rem;
        }



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

<body class="hold-transition layout-top-nav">
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
        <section class="jumbotron text-center">
            <div class="container">
                <img src="<?= base_url() ?>/foto/logo.png" alt="" width="100px">
                <h6 style="font-size: 30px;font-weight:700; margin-top:20px">SELAMAT DATANG DI WEBSITE SPMB </h6>
                <h6 class="lead" style="font-weight: bold;">SMP | SMA | SMK INSAN KAMIL TARTILA</h6>
                <h6 class="lead" style="font-weight: bold;">Tahun Pelajaran <?= $ta['ta'] ?></h6>

            </div>
        </section>

        <div class="container text-center">
            <h1><b> PERSYARATAN PPDB SMP | SMA | SMK INSAN KAMIL TARTILA</h1></b>
        </div>
        <div class="container mb-5 mt-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">

                <div class="card card-primary ">
                    <div class="card-header text-center">
                        SMP INSAN KAMIL <?= $ta['ta'] ?>
                    </div>
                    <div class="card-body pt-0">
                        <p style="text-align: center; ">Persyaratan Pendaftaran :</p>
                        <ul style="list-style: none;">

                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Membayar Uang Formulir
                            </li>
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Mengisi Formulir
                            </li>
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Membawa Berkas :
                                <ol>
                                    <li>Fotocopy Kartu Keluarga</li>
                                    <li>Fotocopy Akte</li>
                                    <li>Fotocopy KTP Orang Tua</li>
                                    <li>Fotocopy Lampiran Surat Kematian (Jika calon peserta didik Yatim)</li>
                                    <li>Fotocopy KIP (Kartu Indonesia Pintar)</li>
                                    <li>Fotocopy Buku Tabungan PIP (kalau punya)</li>
                                    <li>Fotocopy SKL / PRINT NISN di WEB NISN</li>
                                </ol>
                            </li>
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Menerima Bukti Pendaftaran Dari Panitia PPDB
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card card-success ">
                    <div class="card-header text-center">
                        SMA INSAN KAMIL TARTILA <?= $ta['ta'] ?>
                    </div>
                    <div class="card-body pt-0">
                        <p style="text-align: center; ">Persyaratan Pendaftaran :</p>
                        <ul style="list-style: none;">
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Membawa Berkas :
                                <ol>
                                    <li>Fotocopy Kartu Keluarga</li>
                                    <li>Fotocopy Akte</li>
                                    <li>Fotocopy KTP Orang Tua</li>
                                    <li>Fotocopy Lampiran Surat Kematian (Jika calon peserta didik Yatim)</li>
                                    <li>Fotocopy KIP (Kartu Indonesia Pintar)</li>
                                    <li>Fotocopy Buku Tabungan PIP</li>
                                    <li>Fotocopy SKL / PRINT NISN di WEB NISN</li>
                                </ol>
                            </li>
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Menerima Bukti Pendaftaran Dari Panitia PPDB
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card card-info ">
                    <div class="card-header text-center">
                        SMK INSAN KAMIL TARTILA <?= $ta['ta'] ?>
                    </div>
                    <div class="card-body pt-0">
                        <p style="text-align: center; ">Persyaratan Pendaftaran :</p>
                        <ul style="list-style: none;">
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Membawa Berkas :
                                <ol>
                                    <li>Fotocopy Kartu Keluarga</li>
                                    <li>Fotocopy Akte</li>
                                    <li>Fotocopy KTP Orang Tua</li>
                                    <li>Fotocopy Lampiran Surat Kematian (Jika calon peserta didik Yatim)</li>
                                    <li>Fotocopy KIP (Kartu Indonesia Pintar)</li>
                                    <li>Fotocopy Buku Tabungan PIP</li>
                                    <li>Fotocopy SKL / PRINT NISN di WEB NISN</li>
                                </ol>
                            </li>
                            <li>
                                <i class="fa-solid fa-square-check" style="color: #63E6BE;"></i>
                                Menerima Bukti Pendaftaran Dari Panitia PPDB
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
        <div class=" container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h5 class="text-center">CARA PENDAFTARAN</h5>
                        </div>
                        <div class="container">
                            <div class="card-body">
                                <div class="nomorsatu ">
                                    <div class="satu mr-4  float-left" style=" background-color: rgb(35, 243, 16);width:40px;height:40px;
                                                            border-radius: 50%; display: flex;justify-content: center;align-items: center;color: #fff;">
                                        1
                                    </div>

                                    <p><b>Offline.</b> Datang langsung ke Kantor TU SMP INSAN KAMIL.Buka Setiap Hari Senin-Sabtu Pukul 08:00-14:00 WIB</p>
                                </div>
                                <div class="nomorsatu ">
                                    <div class="satu mr-4  float-left" style=" background-color: rgb(35, 243, 16);width:40px;height:40px;
                                                            border-radius: 50%; display: flex;justify-content: center;align-items: center;color: #fff;">
                                        2
                                    </div>

                                    <p><b>Online.</b> Silahkan klik <a href="<?= base_url('daftar') ?>" class="badge-primary btn-sm">disini</a> !!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5 class="text-center">CARA PEMBAYARAN PENDAFTARAN</h5>
                        </div>
                        <div class="card-body">
                            Apabila melakukan pendaftaran secara online, maka sebelum klik tombol pendaftaran diatas silahkan untuk melakukan pembayaran melalui No.Rek BRI 114501007054534 a.n Sunan Sukmanagara, kemuadian simpan bukti transfer dan upload bukti transfernya ketika melakukan pengisian formulir.
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h5 class="text-center">PENDAFTAR SEMENTARA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-center"><b> SMP: <?= $total_daftar ?></b></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="text-center"><b> SMA: <?= $total_daftar ?></b></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="text-center"><b> SMK: <?= $total_daftar ?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h5 class="text-center">QUOTA PENDAFTAR</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><b>TIDAK TERBATAS</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




    <!-- ./wrapper -->
    <a href="https://wa.me/+6285179541472?text=Daftar%20PPDB" target="_blank" class="wa_btn"><i class="fab fa-whatsapp"></i>
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

</html>
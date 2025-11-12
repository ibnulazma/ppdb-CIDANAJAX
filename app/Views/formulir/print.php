<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 30px;
            padding: 0;


        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 5px;
        }

        @page {
            /* hilangkan margin bawaan */
            size: 'Legal';
            margin: 0;
        }



        /* Sembunyikan elemen yang tidak perlu saat print */
        @media print {
            body {
                -webkit-print-color-adjust: exact !important;
                font-family: 'Poppins', sans-serif;
                /* Pastikan tetap aktif */
            }


            .no-print,
            header,
            footer,
            nav {
                display: none !important;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }



            img {
                width: 70px;
            }

            .judul {
                font-family: 'Poppins', sans-serif;
                text-align: right;
                font-weight: 600;
            }


            .kode {
                border: 1px solid #000;
                padding: 10px;
                text-align: end;
                margin-top: 10px;


            }

            .isi {
                margin-top: 20px;
            }

            .catatan {
                margin-top: 20px;
                background-color: #e7e9ecff;
                padding: 10px;
                font-weight: 700;
            }

            .tanggal {
                text-align: end;
            }

            .ttd {
                display: flex;
                justify-content: space-around;
            }

            .garis {
                border: none;
                border-top: 2px dashed #000;
                /* jenis dashed atau dotted */
                margin: 20px 0;
            }

            .mantap {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 20px;
                background-color: #e7e9ecff;
                padding: 10px;
                font-weight: 700;

            }

            .psg {
                font-size: 20px;
                border: 1px solid #000;
                padding: 5px;
            }

            .sekolah {
                display: flex;
                justify-content: space-between;
                background-color: #e0f1a1ff;
                font-size: 20px;
                padding: 5px;

            }

            .isisekolah {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top: 10px;
            }

            .qr_code {
                width: 100px;
            }

        }
    </style>


</head>

<body>

    <div class="header">
        <img src="<?= base_url('AdminLTE/dist/img/logo2.png') ?>" alt="" width="20px">
        <div class="judul">
            <span>BUKTI PENDAFTARAN <br>
                SPMB INKATA TAHUN 2026-2027</span>
        </div>
    </div>
    <div class="mantap">
        <div class="buktipendaftaran">
            <span>Biodata Calon Peserta Didik</span>
        </div>
        <?php if ($data['program'] == null) { ?>
        <?php   } else if ($data['program'] !== null) { ?>

            <div class="psg">
                <span><?= $data['program'] ?></span>
            </div>
        <?php } ?>
    </div>
    <div class="isi">
        <table width="100%">
            <tr>
                <td width="30%">Kode Pendaftaran</td>
                <td width="5%">:</td>
                <td><strong><?= $data['kode_pendaftaran'] ?></strong></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $data['nama_siswa'] ?></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><?= $data['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?= $data['tempat_lahir'] ?>, <?= $data['tanggal_lahir'] ?></td>
            </tr>
            <tr>
                <td>Daftar Ke</td>
                <td>:</td>
                <td><?= $data['ke_jenjang'] ?></td>
            </tr>
            <?php if ($data['jurusan'] == null) { ?>
            <?php   } else if ($data['jurusan'] !== null) { ?>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?= $data['jurusan'] ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td>Yatim</td>
                <td>:</td>
                <td><?= $data['anakyatim'] ?></td>
            </tr>
            <tr>
                <td>Pondok</td>
                <td>:</td>
                <td><?= $data['pondok'] ?></td>
            </tr>
        </table>
    </div>


    <div class="catatan"> Catatan</div>
    <div class="isicatatan">
        <ol style="margin-top:20px">
            <li>Tanda bukti pendaftaran ini jangan sampai hilang sampai proses pembelajaran di masing masing jenjang</li>
            <li>Khusus bagi jenjang SMA/SMK, tidak boleh pindah jurusan atau jenjang</li>
            <li><strong>Biaya pendaftaran yang sudah dibayarkan tidak bisa diambil kembali</strong></li>
            <li>Segala informasi dapat didapatkan lewat grup WA</li>
        </ol>

    </div>
    <div class="tanggal">
        <span>Tangerang, <?= $data['tanggal'] ?></span>
    </div>
    <div class="ttd">
        <div class="panitia">
            <span><strong>Panitia</strong></span>
            <br>
            <br>
            <br>
            <span><?= session()->get('nama_user') ?></span>
        </div>
        <div class="ortu">
            <span><strong>Orang Tua</strong></span>
            <br>
            <br>
            <br>
            <span>.................................</span>
        </div>
    </div>

    <div class="garis"></div>


    <div class="sekolah">
        <div class="judulsekolah">
            Bukti Pendaftaran
        </div>
        <div class="judulsekolah2">
            Orang Tua
        </div>
    </div>
    <div class="isisekolah">
        <div class="apasaja">
            <table>
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><strong><?= $data['kode_pendaftaran'] ?></strong></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $data['nama_siswa'] ?></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $data['tempat_lahir'] ?>, <?= $data['tanggal_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Daftar Ke</td>
                    <td>:</td>
                    <td><?= $data['ke_jenjang'] ?></td>
                </tr>
                <?php if ($data['jurusan'] == null) { ?>
                <?php   } else if ($data['jurusan'] !== null) { ?>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?= $data['jurusan'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="qr">
            <?php if (!empty($data['qr_code'])): ?>
                <img src="<?= base_url($data['qr_code']) ?>" alt="QR Code" class="qr_code">
            <?php else: ?>
                <p><em>QR Code belum tersedia.</em></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="tanggal">
        <span>Tangerang, <?= $data['tanggal'] ?></span>
    </div>
    <div class="ttd">
        <div class="panitia">
            <span><strong>Panitia</strong></span>
            <br>
            <br>
            <span>.................................</span>
        </div>
        <div class="ortu">
            <span><strong>Orang Tua</strong></span>
            <br>
            <br>
            <span>.................................</span>
        </div>
    </div>












    <script>
        // Saat halaman selesai dimuat
        window.addEventListener('load', function() {
            // Buka dialog print browser
            window.print();
        });

        // Setelah print selesai (OK atau Cancel)
        window.addEventListener('afterprint', function() {
            // Kirim sinyal ke opener (halaman data)
            if (window.opener) {
                window.opener.location.reload(); // reload halaman data
            }

            // Tutup tab print


            setTimeout(function() {
                window.location.href = '<?= site_url('formulir') ?>'; // Redirect to the form page
            }, 1000); // 1 second delay to allow printing to start
        });
    </script>
</body>

</html>
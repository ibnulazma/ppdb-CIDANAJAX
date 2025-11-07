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

            margin: 0;
        }



        /* Sembunyikan elemen yang tidak perlu saat print */
        @media print {
            body {
                -webkit-print-color-adjust: exact !important;
                font-family: 'Poppins', sans-serif;
                font-size: 13px;
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




            .judul {
                font-family: 'Poppins', sans-serif;
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
                display: flex;
                justify-content: space-between;
            }

            .catatan {
                margin-top: 20px;
                background-color: #e7e9ecff;
                padding: 10px;
                font-weight: 700;
            }

            .tanggal {

                float: right;
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
                font-size: 25px;
                border: 1px solid #000;
                padding: 5px;
            }

            table {
                width: 100%;
                /* Mengatur tabel mengisi lebar parent-nya */
            }




        }
    </style>


</head>

<body>

    <div class="header">

        <div class="judul">
            <span>BUKTI PEMBAYARAN <br>
                SPMB INKATA TAHUN 2026-2027</span>
        </div>
    </div>
    <div class="isi">

        <div class="ket">
            <table>
                <tr>
                    <td width="0px">No. Pendaftaran</td>
                    <td>:</td>
                    <td><strong><?= $data['kode_pendaftaran'] ?></strong></td>
                </tr>
                <tr>
                    <td width="0px">Nama Siswa</td>
                    <td>:</td>
                    <td><strong><?= $data['nama_siswa'] ?></strong></td>
                </tr>
                <tr>
                    <td width="0px">Jenjang</td>
                    <td>:</td>
                    <td><strong><?= $data['jenjang'] ?></strong></td>
                </tr>
            </table>
        </div>
        <div class=" tanggal float-right">
            <table>
                <tr>
                    <td width="0px">Tanggal</td>
                    <td>:</td>
                    <td><strong><?= date('d-m-Y', strtotime($data['tanggal_transaksi'])) ?></strong></td>
                </tr>
                <tr>
                    <td width="0px">Petugas</td>
                    <td>:</td>
                    <td><strong><?= session()->get('nama_user') ?></strong></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="garis"></div>













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
                window.location.href = '<?= site_url('transaksi') ?>'; // Redirect to the form page
            }, 1000); // 1 second delay to allow printing to start
        });
    </script>
</body>

</html>
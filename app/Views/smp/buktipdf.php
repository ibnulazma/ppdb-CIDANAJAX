<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<style>
    body {
        margin: 0;
        padding: 0;

    }

    .gambar {
        float: left;
        margin-left: 10px;



    }

    .smp {
        margin-top: 10px;
    }


    .bukti {
        text-align: center;
        font-weight: 900;
        margin-top: 30px;
    }



    .tabel1 {
        width: 100%;
        border-collapse: collapse;
    }

    .tabel2 {
        width: 10%;
        border-collapse: collapse;
    }

    .tabel {
        border: none;
    }

    .kop {
        margin-left: 10px;
    }

    .sip {
        margin-bottom: 30px;
    }

    .tabel1,
    th,
    td {
        border: 1px solid black;
        padding: 8px 20px;
    }

    .tabel2 {
        border: 1px solid black;
        padding: 8px 20px;
    }

    .tabel3,
    th,
    td {
        border: none;

    }

    .smp {
        font-size: 25px;
    }

    .rincian {
        margin-top: 50px;
        text-align: center;
    }

    .garis {
        border: 2px solid black;
    }

    .garis2 {
        border: none;
        border-top: 3px dotted #f00;
        color: #fff;
        background-color: #fff;
        height: 1px;
        width: 100%;
    }


    .ttd {
        float: left;
    }

    .ortu {
        margin-left: 100px;
    }

    .catatan {
        font-size: 10px;
    }


    .isian {
        font-size: 12px;
        font-weight: bold;
    }

    .field {
        font-size: 10px;
    }

    .akhir {
        float: left;

    }
</style>

<body>

    <div class="container sip">
        <div class="gambar">
            <?= $image_url ?>
        </div>

        <div class="kop" style="margin-top: 20px;text-align:center;">
            <span class="smp" style="font-size: 20px;">SMP INSAN KAMIL </span><br>
            <span>PANITIA SPMB <?= $siswa['ta'] ?></span><br>
            <span>Jalan Raya Legok Km 06 No 89 Legok-Tangerang</span>
        </div>
    </div>

    <hr class="garis">
    <div class="container bukti">
        <span>BUKTI PENDAFTARAN PESERTA DIDIK </span><br>
        <span>SMP INSAN KAMIL</span><br>
        <span>TAHUN AJARAN <?= $siswa['ta'] ?></span><br>


    </div>

    <br>

    <div class="container">

        <table class="tabel1">
            <tr>
                <th colspan="2">
                    <p>NO PENDAFTARAN <br>
                        SMP-6592627-001 </p>
                </th>
            </tr>
            <tr>
                <td>
                    <p class="field">Nama Lengkap <br>
                        <span class="isian"><?= $siswa['nama_lengkap'] ?></span>
                    </p>
                </td>
                <td>
                    <p class="field">Jenis Kelamin <br>
                        <span class="isian"> <?= $siswa['jenis_kelamin'] ?></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="field">NISN <br>
                        <span class="isian"><?= $siswa['nisn'] ?></span>
                    </p>
                </td>
                <td>
                    <p class="field">Asal Sekolah <br>
                        <span class="isian"><?= $siswa['sekolah'] ?></span>
                    </p>
                </td>
            </tr>
        </table>

    </div>
    <p style="font-size: 10px;">Catatan :</p>
    <div class="akhir">
        <ol class="catatan">
            <li>Biaya yang sudah dibayarkan tidak bisa dikembalikan</li>
            <li>Segala informasi akan di share di grup</li>
            <li>Apabila ada kekeliruan dalam pengisian biodata harap hubungi admin</li>
        </ol>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis ad aliquam dolore explicabo alias deleniti harum quam maiores aperiam!
        </p>
    </div>




</body>

</html>
<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<style>
    @media print {
        .no-print {
            display: none;
        }
    }

    .noname {
        font-size: 22px;
    }

    .isi {
        font-size: 25px;
        font-weight: 700;
    }
</style>


<div class="container mb-5">

    <div class="judul">
        <h5 style="font-weight: 600;">SMP INSAN KAMIL</h5>
        <h5 style="font-weight: 600;">PANITIA SPMB TAHUN PELAJARAN <?= $ta['ta'] ?></h5>
        <h5 style="margin-top:20px;text-align:center">BUKTI PENDAFTARAN</h5>
        <div class="row d-flex justify-content-around">
            <div class="baris1">
                <span class="noname">Nama Lengkap</span><br>
                <span class="isi"><?= $siswa['nama_lengkap'] ?></span><br>
                <span class="noname">Jenis Kelamin</span><br>
                <span class="isi"><?= $siswa['jenis_kelamin'] ?></span><br>
                <span class="noname">NIK </span><br>
                <span class="isi"><?= $siswa['nik'] ?></span><br>
            </div>
            <div class="baris2">

                <span class="noname">NISN</span><br>
                <span class="isi"> <?= $siswa['nisn'] ?></span><br>
                <span class="noname">No Telp </span><br>
                <span class="isi"><?= $siswa['no_telp'] ?></span><br>
                <span class="noname"> Asal Sekolah</span><br>
                <span class="isi"><?= $siswa['sekolah'] ?></span>

            </div>
        </div>

    </div>
    <div class="catatan">
        <strong>Catatan:</strong><br>
        <ol>
            <li>Pembayaran yang sudah lunas tidak bisa diambil kembali</li>
            <li>Informasi selanjutnya silahkan gabung grup dengan kode QR</li>
            <li>Apabila ada kekeliruan dalam penginputan biodata silahkan hubungi admin</li>
        </ol>
    </div>
    <button onclick=" printPage()" class="no-print">Cetak Halaman</button>
    <?= session()->get('nama_user') ?>

</div>













<script>
    function printPage() {
        window.print();
    }
</script>

<?= $this->endSection() ?>
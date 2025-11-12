<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>





<style>
    tr.selected {
        background-color: #cce5ff !important;
    }
</style>
<div class="col-md-12">


    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Daftar SPMB INKATA 2026-2027</h5>
            <div class="tombol float-right ">
                <a href="<?= base_url('formulir/tambah') ?>" class="btn btn-sm btn-success rounded-0"><i class="fas fa-plus"></i> Tambah</a>
                <button class="btn btn-sm btn-primary rounded-0 " id="btnEdit"><i class="fas fa-pencil-alt"></i> Ubah</button>
                <button class="btn btn-sm btn-info rounded-0 " id="btnDetail"><i class="fas fa-user"></i> Detail</button>
                <button class="btn btn-sm btn-danger rounded-0 " id="btnDelete"><i class="fas fa-user"></i> Hapus</button>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabelSiswa" class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pendaftaran</th>
                            <th>Nama Peserta Didik</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Orang Tua</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary rounded-0">unduh data</button>
            <button class="btn btn-sm btn-info rounded-0">tarik data</button>
            <button class="btn btn-sm btn-danger rounded-0">delete all</button>

        </div>
    </div>
</div>

<?php
$errors = session()->getFlashdata('errors');
$pesan  = session()->getFlashdata('pesan');
$error  = session()->getFlashdata('error');
?>



<script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>
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








<script>
    function validateWA() {
        var input = document.getElementById("no-wa").value;
        var errorMessage = document.getElementById("wa-error");
        var regex = /^(\+62|62|0)8[1-9][0-9]{6,9}$/; // Regex untuk format WA Indonesia

        // Menyembunyikan pesan error jika format valid
        if (regex.test(input)) {
            errorMessage.style.display = "none";
        } else {
            errorMessage.style.display = "block";
        }
    }
</script>



<?= $this->endSection() ?>
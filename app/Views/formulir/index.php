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
                <button class="btn btn-sm btn-info rounded-0 " id="btnDetail" disabled><i class="fas fa-user"></i> Detail</button>
                <button class="btn btn-sm btn-danger rounded-0 " id="btnDelete" disabled><i class="fas fa-user"></i> Hapus</button>
            </div>

        </div>
        <div class="card-body">
            <table id="tabelSiswa" class="table table-bordered table-striped">
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
        <div class="card-footer">
            <button class="btn btn-sm btn-primary rounded-0">unduh data</button>
            <button class="btn btn-sm btn-info rounded-0">tarik data</button>
            <button class="btn btn-sm btn-danger rounded-0">delete all</button>

        </div>
    </div>
</div>












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

    <?php if (session()->getFlashdata('pesan')): ?>
        Swal.fire({
            title: 'Berhasil!',
            text: '<?= session()->getFlashdata('pesan') ?>',
            icon: 'success',
            showCancelButton: true,
            confirmButtonText: 'Cetak',
            cancelButtonText: 'Tutup',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the print page using the id_formulir from flashdata
                window.location.href = '<?= site_url('formulir/cetak/' . session()->getFlashdata('id_formulir')) ?>';
            }
        });
    <?php endif; ?>
</script>



<?= $this->endSection() ?>
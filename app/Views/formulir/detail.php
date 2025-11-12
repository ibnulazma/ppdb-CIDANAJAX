<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>



<style>
    select:disabled {
        background-color: #f2f2f2;
        color: #777;
        cursor: not-allowed;
    }
</style>

<div class="col-lg-12">

    <div class="row">
        <div class="col-lg-3">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="form-group">
                        <label>Foto Siswa</label><br>

                        <?php
                        // path folder tempat gambar disimpan
                        $path = FCPATH . 'uploads/siswa/';
                        $fotoFile = $siswa['foto_siswa'] ?? '';

                        // tentukan foto yang akan ditampilkan
                        if (!empty($fotoFile) && file_exists($path . $fotoFile)) {
                            $fotoUrl = base_url('uploads/siswa/' . $fotoFile);
                        } else {
                            // tampilkan foto default kalau kosong atau tidak ditemukan
                            $fotoUrl = base_url('uploads/logo.png');
                        }
                        ?>
                        <img src="<?= $fotoUrl ?>"
                            alt="Foto <?= esc($siswa['nama_siswa']) ?>"
                            class="img-thumbnail mb-2"
                            style="width: 130px; height: 130px; object-fit: cover; align-items:center; text-align:center">

                        <div>
                            <input type="file" name="foto" class="form-control form-control-sm mt-2">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="<?= base_url('formulir') ?>" class="btn btn-success btn-sm float-right">Kembali</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <strong><i class="fas fa-book mr-1"></i> Nama Siswa</strong>

                            <p class="text-muted">
                                <?= $siswa['nama_siswa'] ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-birthday-cake"></i> Tempat, Tanggal Lahir</strong>

                            <p class="text-muted"><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tanggal_lahir'] ?></p>

                            <hr>

                            <strong><i class="fa-solid fa-mars-and-venus"></i> Jenis kelamin</strong>

                            <p class="text-muted">
                                <?= $siswa['jenis_kelamin'] ?> </p>
                        </div>
                        <div class="col-lg-4">
                            <strong><i class="fas fa-book mr-1"></i> Jenjang</strong>

                            <p class="text-muted">
                                <?= $siswa['ke_jenjang'] ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-school"></i> Asal Sekolah</strong>

                            <p class="text-muted"><?= $siswa['nama_sekolah'] ?></p>

                            <hr>

                            <strong><i class="fa-solid fa-location-pin"></i> Alamat</strong>

                            <p class="text-muted">
                                <?= $siswa['alamat'] ?> </p>
                        </div>
                        <div class="col-lg-4">
                            <strong><i class="fas fa-user-friends"></i> Orang Tua</strong>

                            <p class="text-muted">
                                <?= $siswa['orangtua'] ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-school"></i> Asal Sekolah</strong>

                            <p class="text-muted"><?= $siswa['nama_sekolah'] ?></p>

                            <hr>

                            <strong><i class="fa-solid fa-mobile-screen-button"></i> No Hp</strong>

                            <p class="text-muted">
                                <?= $siswa['no_telp'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>




<script>
    document.querySelector('input[name="foto"]').addEventListener('change', function(e) {
        const [file] = e.target.files;
        if (file) {
            const preview = e.target.closest('.form-group').querySelector('img');
            preview.src = URL.createObjectURL(file);
        }
    });
</script>








<?= $this->endSection() ?>
<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>




<div class="card">
    <div class="card-body">
        <?= form_open('web/tambahdata') ?>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="keterangan" placeholder="Di isi dengan gelombang">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="periode" placeholder="periode">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="warna" placeholder="contoh:bg-xxxx">
        </div>

        <textarea id="summernote" name="rincian"></textarea>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?= form_close() ?>
    </div>
</div>












<?= $this->endSection() ?>
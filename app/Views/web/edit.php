<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>

<div class="card">
    <div class="card-body">
        <?= form_open('web/update') ?>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="keterangan" value="<?= $user['keterangan'] ?>">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="periode" value="<?= $user['periode'] ?>">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="warna" value="<?= $user['warna'] ?>">
        </div>

        <textarea id="summernote" name="rincian"><?= $user['rincian'] ?></textarea>
        <input type="hidden" name="id_rincian" value="<?= $user['id_rincian'] ?>">
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?= form_close() ?>
    </div>
</div>

<?= $this->endSection() ?>
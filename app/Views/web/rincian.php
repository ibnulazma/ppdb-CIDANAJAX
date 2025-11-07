<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>



<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>

<div class="col-md-12">
    <?php
    $errors = session()->getFlashdata('errors');


    if (!empty($errors)) { ?>

        <div class="alert alert-success" role="alert">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success" role="alert">';
        echo session()->getFlashdata('pesan');
        echo ' </div>';
    } ?>
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Peserta Didik Baru <?= $ta['ta'] ?></h3>
            <a class="btn btn-primary btn-xs float-right" href="<?= base_url('web/tambah') ?>"> <i class="fas fa-plus"></i> Tambah</a>

        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover ">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Gel</th>
                        <th>Periode</th>
                        <th>Rician Biaya</th>
                        <th>Tahun Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($rincian as $key => $value) { ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['keterangan'] ?></td>
                            <td><?= $value['periode'] ?></td>
                            <td><?= $value['rincian'] ?></td>
                            <td><?= $value['ta'] ?></td>
                            <td>
                                <a href="<?= base_url('web/detail/' . $value['id_rincian']) ?>" class="btn btn-success btn-sm">ubah</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>















<?= $this->endSection() ?>
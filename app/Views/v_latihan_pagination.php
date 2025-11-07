<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>



<div class="row">
    <div class="col-md-8 offset-md-2">
        <form action="" method="post">
            <div class="input-group">
                <input type="search" class="form-control form-control-lg" name="cari" placeholder="Ketikkan Nama Peserta Didik">
                <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row justify-center mt-5">
    <?php foreach ($siswa as $key => $value) { ?>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead"><b><?= $value['nama_lengkap'] ?></b></h2>
                            <p class="text-muted text-sm"><b>Kelas: </b> <?= $value['nama_kelas'] ?></p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <?= $value['alamat'] ?></li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #<?= $value['no_telp'] ?></li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-user"></i> View Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
<?= $pager->links('tbl_daftar', 'siswa_pagination'); ?>













<?= $this->endSection() ?>
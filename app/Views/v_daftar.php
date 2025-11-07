<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>



<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>
<?php if ($ta['status'] <> 1) { ?>

    <div class="col-12">
        <div class="alert alert-danger">
            <div style=" text-align: center;">
                <i class="fa-solid fa-circle-xmark fa-10x fa-beat"></i>
                <h2> Daftar Ulang belum dibuka, silahkan menunggu !!!</h2>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="row">
        <div class="col-md-7">
            <h5 class="ml-3 mt-3">Pendataan Peserta Didik Tahun Pelajaran <?= $ta['ta'] ?></h5>
            <div class="card-body ">
                <img src="<?= base_url() ?>/AdminLTE/dist/img/photo8.png" height="400px">
            </div>
        </div>

        <div class="col-md-5 mb-3">
            <div class="card card-primary card-outline">
                <div class="card-body login-card-body">
                    <p class="login-box-msg"><b>Form Pendaftaran </b> </p>
                    <?php
                    $errors = session()->getFlashdata('errors');

                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
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
                    <?= form_open('daftar/simpanDaftar') ?>

                    <div class="mb-4">
                        <label for="validationCustom03" class="form-label">NIK</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="validationCustom03" placeholder="NIK harus sesuai dengan yang di KK" name="nik" value="<?= old('nik') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nik'); ?>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="">NISN <small>(Nomor Induk Siswa Nasional)</small></label>
                        <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Induk Kependudukan" name="nisn" value="<?= old('nisn') ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('nisn'); ?>
                        </div>
                    </div>
                    <div class=" mb-4">
                        <label for="">Nama Lengkap <small>(Nama di Ijazah sama di KK harus sama)</small></label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('nama_lengkap'); ?>
                        </div>
                    </div>
                    <div class=" mb-4">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ?>">
                        <div class=" invalid-feedback">
                            <?= $validation->getError('tempat_lahir'); ?>
                        </div>
                    </div>
                    <div class=" mb-4">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class=" invalid-feedback">
                            <?= $validation->getError('jenis_kelamin'); ?>
                        </div>
                    </div>
                    <div class=" mb-4">
                        <div class="row">
                            <div class="col-4">
                                <label for="">Tanggal Lahir</label>
                                <select name="tanggal" id="" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggal') ?>">
                                    <option value="">--Hari--</option>
                                    <option value=" 01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('tanggal'); ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="">Bulan Lahir</label>
                                <select name="bulan" id="" class="form-control <?= ($validation->hasError('bulan')) ? 'is-invalid' : ''; ?>" value="<?= old('bulan') ?>">
                                    <option value="">--Bulan--</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('bulan'); ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="">Tahun Lahir</label>
                                <select name="tahun" id="" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" value="<?= old('tahun') ?>">
                                    <option value="">--Tahun --</option>
                                    <?php $now = date('Y');
                                    for ($i = 1991; $i <= $now; $i++) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>'
                                    <?php } ?>
                                </select>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('tahun'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4"><i class="fas fa-floppy-disk"></i> Daftar</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endSection() ?>
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
            <a class="btn btn-primary btn-xs float-right" href="<?= base_url('smp/tambahSiswa') ?>"> <i class="fas fa-plus"></i> Tambah</a>
            <a class="btn btn-success btn-xs float-right mr-2" href="<?= base_url('ppdb/cetak') ?>" target="_blank"> <i class="fas fa-print"></i> Cetak Laporan</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover ">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ibu</th>
                        <th>No Telp</th>
                        <th>Sekolah</th>
                        <th>Tgl Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($ppdb as $key => $value) { ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nisn'] ?></td>
                            <td><?= strtoupper($value['nama_lengkap']) ?></td>
                            <td><?= $value['jenis_kelamin'] ?></td>

                            <td><?= $value['tempat_lahir'] ?></td>
                            <td><?= $value['tanggal_lahir'] ?></td>
                            <td><?= $value['nama_ibu'] ?></td>
                            <td><a href="https://wa.me/<?= gantiformat($value['no_telp']) ?>" target="_blank"><?= $value['no_telp'] ?></td>
                            <td><?= $value['sekolah'] ?></td>
                            <td><?= $value['tgl_pendaftaran'] ?></td>

                            <td>
                                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail<?= $value['id'] ?>"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning btn-xs"><i class=" fas fa-pencil-alt" data-toggle="modal" data-target="#edit<?= $value['id'] ?>"></i></button>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus<?= $value['id'] ?>"><i class="fas fa-trash"></i></button>
                                <a href="<?= base_url('smp/buktidaftar/' . $value['id']) ?>" class="btn btn-info btn-xs" target="_blank"><i class="fas fa-print"></i></a>


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Edit -->

<?php foreach ($ppdb as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <?php echo form_open('ppdb/edit/' . $value['id']); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control " id="validationCustom03" name="nama_lengkap" value="<?= $value['nama_lengkap'] ?>">

                            </div>
                            <div class="mb-2">
                                <label for="">NISN</label>
                                <input type="text" class="form-control" name="nisn" value="<?= $value['nisn'] ?>">

                            </div>

                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?= $value['jenis_kelamin'] ?>"><?= $value['jenis_kelamin'] ?></option>
                                    <option value="Laki-laki"> Laki-laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" id="validationCustom03" name="tempat_lahir" value="<?= $value['tempat_lahir'] ?>">

                            </div>
                            <div class="mb-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="validationCustom03" name="tanggal_lahir" value="<?= $value['tanggal_lahir'] ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $value['alamat'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" value="<?= $value['nama_ibu'] ?>">
                            </div>
                            <div class=" mb-2">
                                <label for="">No Telp</label>
                                <input type="text" class="form-control" name="no_telp" value="<?= $value['no_telp'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="">Nama Sekolah</label>
                                <select name="id_sekolah" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?= $value['id_sekolah'] ?>" selected="selected"><?= $value['sekolah'] ?></option>
                                    <?php foreach ($sekolah as $key => $value) { ?>
                                        <option value="<?= $value['id_sekolah'] ?>"><?= $value['sekolah'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
<?php } ?>


<!-- detail -->
<?php foreach ($ppdb as $key => $value) { ?>
    <div class="modal fade" id="detail<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Calon PPDB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5><?= $value['nama_lengkap'] ?></h5>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <strong> NISN</strong>
                            <p class="text-muted">
                                <i class="fa-solid fa-id-card-clip mr-2"></i> <?= $value['nisn'] ?>
                            </p>
                            <strong></i> Jenis Kelamin</strong>
                            <p class="text-muted">
                                <?php if ($value['jenis_kelamin'] == 'Perempuan') {
                                    $jk = '<i class="fas fa-female mr-2"></i>';
                                } elseif ($value['jenis_kelamin'] == 'Laki-laki') {
                                    $jk = '<i class="fas fa-male mr-2"></i>';
                                }
                                ?>
                                <?= $jk ?> <?= $value['jenis_kelamin'] ?>
                            </p>
                            <strong> Tempat Lahir</strong>
                            <p class="text-muted">
                                <i class="fas fa-place-of-worship mr-2"></i> <?= $value['tempat_lahir'] ?>
                            </p>
                            <strong> Tanggal Lahir</strong>
                            <p class="text-muted">
                                <i class="fas fa-calendar-day mr-2"></i><?= $value['tanggal_lahir'] ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <strong></i> Alamat</strong>
                            <p class="text-muted">
                                <i class="fas fa-map-marker-alt mr-2"> </i> <?= $value['alamat']  ?>
                            </p>
                            <strong> Telp/Hp</strong>
                            <p class="text-muted">
                                <i class="fas fa-mobile-alt mr-2"></i> <?= $value['no_telp'] ?>
                            </p>
                            <strong> Asal Sekolah</strong>
                            <p class="text-muted">
                                <i class="fas fa-university mr-2"></i> <?= $value['sekolah'] ?>
                            </p>
                            <strong> Nama Ibu</strong>
                            <p class="text-muted">
                                <i class="fa-solid fa-person-dress"></i> <?= $value['nama_ibu'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                </div>
            </div>

        </div>
    </div>

<?php } ?>


<!-- hapus -->

<?php foreach ($ppdb as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Calon PPDB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Apakah anda Yakin akan menghapus data a.n
                        <?= ucwords($value['nama_lengkap']) ?> ?
                    </p>
                </div>
                <div class=" modal-footer">
                    <a href="<?= base_url('ppdb/delete/' . $value['id']) ?>" type="submit" class="btn btn-danger">Delete</a>

                </div>
            </div>

        </div>
    </div>

<?php } ?>

<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#jenjang").change(function() {
            var id_sekolah = $("#jenjang").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Ppdb/dataAsalSekolah') ?>/' + id_sekolah,
                success: function(html) {
                    $("#asal_sekolah").html(html);
                }
            });
        });
    });
</script>




<?= $this->endSection() ?>
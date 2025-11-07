<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="col-lg-12">

    <div class="card">
        <h5 class="card-header">
            Daftar User SPMB V.2
        </h5>
        <div class="card-body">

            <?php if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo ' </div>';
            } elseif (session()->getFlashdata('error')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('pesan');
                echo ' </div>';
            }
            ?>
            <table class="table table-bordered" id="example2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Level</th>
                        <th>Ubah Level</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;


                    foreach ($user as $data) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_user'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['level'] ?></td>
                            <!-- Status AKtif  -->
                            <td>
                                <?php if ($data['status_aktif'] == '0') { ?>
                                    <span class="badge badge-danger btn-sm">belum aktif</span>
                                <?php } else if ($data['status_aktif'] == '1') { ?>
                                    <span class="badge badge-success btn-sm">aktif</span>
                                <?php } ?>



                                <?php if ($data['status_aktif'] == '0') { ?>
                                    <a href="<?= base_url('admin/statusAktif/' . $data['id_user']) ?>" class="badge badge-info btn-sm">aktifkan</a>
                                <?php } else if ($data['status_aktif'] == '1') { ?>
                                    <a href="<?= base_url('admin/statusNonAktif/' . $data['id_user']) ?>" class="badge badge-info btn-danger btn-sm">nonaktifkan</a>
                                <?php } ?>

                            </td>

                            <td>
                                <form action="<?= base_url('admin/ubahlevel/' . $data['id_user']) ?>" method="POST">
                                    <select name="level" id="" class="form-control form-control-sm">
                                        <option value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
                                        <option value="">Pilih</option>
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                        <option value="bendahara">bendahara</option>
                                        <option value="kasir">kasir</option>
                                    </select>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-outline-primary btn-sm btn-block">Ubah</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>







<?= $this->endSection() ?>
<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="col-6">
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


    <div class="card">
        <div class="card-body">

            <?= form_open_multipart('web/add') ?>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-gorup mb-3">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?= form_close() ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($banner as $key => $data) { ?>
                        <tr>
                            <td>#</td>
                            <td><img src="<?= base_url('foto/' . $data['foto']) ?> " alt="" width="100px"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>



<?= $this->endSection() ?>
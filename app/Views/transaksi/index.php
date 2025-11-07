<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<style>
    .jumlah_transaksi {
        display: flex;
        justify-content: space-between;
    }

    .jumlah_nominal {
        display: flex;
        justify-content: space-between;
    }

    .petugas {
        display: flex;
        justify-content: space-between;
    }
</style>
<div class="col-lg-12">
    <div class="card">
        <h5 class="card-header">
            Transaksi Pembayaran SPMB SMA-SMK
        </h5>

        <div class=" card-body">
            <div class="transaksi">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="<?= base_url('transaksi/bayar') ?>" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <select name="id_formulir" id="" class="form-control select2bs4" style="width:100%">
                                        <option value="">Pilih</option>
                                        <?php foreach ($siswa as $data) { ?>
                                            <option value="<?= $data['id_formulir'] ?>"><?= $data['kode_pendaftaran'] ?>|<?= $data['nama_siswa'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Pembayaran</label>
                                <div class="col-sm-10">
                                    <input type="text" id="pembayaran" class="form-control">
                                    <input type="hidden" name="jumlah" id="jumlah_hidden">
                                    <input type="hidden" name="tanggal_transaksi" value="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="keterangan" id="" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-sm float-right">Bayar</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="small-box bg-pink col-6 float-right p-3">
                            <div class="jumlah_transaksi">
                                <h5>Transaksi Hari Ini</h5>
                                <h5> <?= $rekap->jumlah_transaksi ?></h5>
                            </div>
                            <div class="jumlah_nominal">
                                <p>Total</p>
                                <p id="totalNominal" data-nilai="<?= $rekap->total_nominal ?>"> </p>
                            </div>
                            <div class="jumlah_nominal">
                                <p>Tanggal</p>
                                <p><?= date('Y-m-d') ?> </p>
                            </div>

                            <div class="petugas">
                                <p>Petugas</p>
                                <p> <?= session()->get('nama_user') ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="forAction mb-3">
        <form id="filterForm" method="get" action="<?= base_url('transaksi') ?>">
            <label for="tanggal">Filter Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" value="<?= esc($tanggal) ?>" class="form-control w-auto d-inline-block">

            <label for="search">Cari Nama:</label>
            <input type="text" name="search" id="search" value="<?= esc($search) ?>" class="form-control w-auto d-inline-block">

            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
            <a href="<?= base_url('transaksi') ?>" class="btn btn-secondary btn-sm">Reset</a>

            <a href="<?= base_url('transaksi/print?tanggal=' . urlencode($tanggal ?? '') . '&search=' . urlencode($search ?? '')) ?>"
                target="_blank" class="btn btn-success btn-sm rounded-0">
                <i class="fas fa-print"></i> Print
            </a>
        </form>
    </div>

    <div class="transaksi2">
        <div class="card">
            <div class="card-body">

                <?php if (empty($rekapdata)): ?>
                    <div class="alert alert-warning text-center">
                        Maaf, data transaksi di tanggal ini tidak ada.
                    </div>
                <?php else: ?>
                    <table class="table table-bordered" id="tableTransaksi">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Total Transaksi (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($rekapdata as $row): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($row['nama_siswa']) ?></td>
                                    <td class="rupiah" data-nilai="<?= $row['total_transaksi'] ?>"></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=" 2" class="text-right">Total Semua</th>
                                <th class="rupiah" data-nilai="<?= $total ?>"></th>
                            </tr>
                        </tfoot>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
















<?= $this->endSection() ?>
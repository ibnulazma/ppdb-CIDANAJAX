<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="col-md-12">


    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for=""> Cari </label>
                <input type="text" id="kode_registrasi" class="form-control" placeholder="Scan / Masukkan Kode Registrasi">
            </div>

            <div id="data-siswa" class="mb-3"></div>
            <table class="table table-bordered" id="tabel-item" style="display:none;">
                <thead>
                    <tr>
                        <th>Nama Item</th>
                        <th>Harga</th>
                        <th>Sudah Bayar</th>
                        <th>Sisa</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <div id="riwayat-bayar"></div>
        </div>
    </div>

</div>
<!-- Modal -->
<!-- <div class="modal fade" id="modalBayar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pembayaran</h5>
            </div>
            <div class="modal-body">
                <form id="formBayar">
                    <input type="hidden" name="kode_pendaftaran" id="kodeBayar">
                    <div class="mb-2">
                        <label>Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" id="totalHarga" readonly>
                    </div>
                    <div class="mb-2">
                        <label>Nominal Bayar</label>
                        <input type="number" class="form-control" name="dibayar" id="dibayar">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnSimpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div> -->


<div id="formPembayaran" style="display:none; margin-top:20px;">
    <h5>Item yang Akan Dibayar</h5>
    <form id="formBayar">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Item</th>
                    <th>Nominal Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="daftarBayar"></tbody>
        </table>
        <div class="text-end">
            <h6>Total Bayar: <span id="totalBayar">0</span></h6>
            <button type="submit" id="btnSimpan" class="btn btn-primary">Simpan Pembayaran</button>
        </div>
    </form>
</div>








<?= $this->endSection() ?>
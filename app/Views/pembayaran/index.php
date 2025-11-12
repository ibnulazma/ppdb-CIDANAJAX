<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="card mb-3">
    <div class="card-body">
        <label for="kode_pendaftaran" class="form-label fw-bold">Kode Pendaftaran</label>
        <input type="text" id="kode_pendaftaran" class="form-control mb-2" placeholder="Masukkan / Scan kode pendaftaran...">
        <button id="btnCari" class="btn btn-primary">Cari</button>
    </div>
</div>

<!-- 🧾 Data Siswa -->
<div class="card mb-3" id="card-siswa" style="display:none;">
    <div class="card-body">
        <h5>Data Siswa</h5>
        <div id="info-siswa"></div>
    </div>
</div>

<!-- 👕 Daftar Item Seragam -->
<div class="card mb-3" id="card-item" style="display:none;">
    <div class="card-body">
        <h5>Daftar Item Seragam</h5>
        <table class="table table-bordered" id="tabel-item">
            <thead>
                <tr>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<!-- 💳 Form Pembayaran -->
<div class="card mb-3" id="formPembayaran" style="display:none;">
    <div class="card-body">
        <form id="formBayar">
            <input type="hidden" id="kode_pendaftaran" name="kode_pendaftaran">

            <h5>Item yang Akan Dibayar</h5>
            <table class="table table-sm" id="daftarBayar">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Nominal Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <div class="fw-bold">
                Total Bayar: Rp <span id="totalBayar">0</span>
            </div>

            <button id="btnSimpan" type="button" class="btn btn-success mt-2">Simpan Pembayaran</button>
        </form>
    </div>
</div>

<!-- 📜 Riwayat Pembayaran -->
<div class="card" id="card-riwayat" style="display:none;">
    <div class="card-body">
        <div id="riwayat-bayar"></div>
    </div>
</div>









<?= $this->endSection() ?>
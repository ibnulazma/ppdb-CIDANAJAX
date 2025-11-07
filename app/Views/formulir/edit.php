<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>



<style>
    select:disabled {
        background-color: #f2f2f2;
        color: #777;
        cursor: not-allowed;
    }
</style>

<div class="col-lg-12">
    <div class="card rounded-0">
        <h5 class=" card-header">
            Edit Biodata : <strong> <?= $siswa['nama_siswa'] ?></strong>
        </h5>
        <?= form_open('formulir/add') ?>
        <div class="card-body">


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Calon PD</label>
                        <input type="text" id="nama" class="form-control" placeholder="Nama Calon Siswa" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>" oninput="capitalizeInput()">
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                            type="radio"
                            name="jenis_kelamin"
                            value="L"
                            id="jkL"
                            <?= $siswa['jenis_kelamin'] == 'Laki-laki' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="jkL">Laki-laki</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                            type="radio"
                            name="jenis_kelamin"
                            value="P"
                            id="jkP"
                            <?= $siswa['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="jkP">Perempuan</label>
                    </div>

                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?= date('Y-m-d', strtotime($siswa['tanggal_lahir'])) ?>">
                    </div>

                    <div class="form-group">
                        <label for="ke_jenjang">Daftar Ke ??</label>
                        <select name="ke_jenjang" id="ke_jenjang" class="form-control">
                            <option value="">-- Mau Daftar Ke? --</option>
                            <option value="SMP" <?= $siswa['ke_jenjang'] == 'SMP' ? 'selected' : '' ?>>SMP</option>
                            <option value="SMA" <?= $siswa['ke_jenjang'] == 'SMA' ? 'selected' : '' ?>>SMA</option>
                            <option value="SMK" <?= $siswa['ke_jenjang'] == 'SMK' ? 'selected' : '' ?>>SMK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" class="form-control" name="jurusan">
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="TKJ" <?= $siswa['jurusan'] == 'TKJ' ? 'selected' : '' ?>>TKJ</option>
                            <option value="MPLB" <?= $siswa['jurusan'] == 'MPLB' ? 'selected' : '' ?>>MPLB</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="program">Program</label>
                        <select id="program" class="form-control" name="program">
                            <option value="">-- Pilih Program --</option>
                            <option value="PSG" <?= $siswa['program'] == 'PSG' ? 'selected' : '' ?>>PSG</option>
                            <option value="NON PSG" <?= $siswa['program'] == 'NON PSG' ? 'selected' : '' ?>>NON PSG</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <select name="jenjang" id="jenjang" class="form-control">
                            <option value="">Pilih Jenjang</option>
                            <?php foreach ($jenjang as $data): ?>
                                <option value="<?= $data['id_jenjang'] ?>"
                                    <?= $data['id_jenjang'] == $siswa['id_jenjang'] ? 'selected' : '' ?>>
                                    <?= $data['jenjang'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Sekolah</label>
                        <select name="nama_sekolah" class="form-control select2bs4" style="width: 100%;" id="asal_sekolah">
                            <option value="">-Pilih Sekolah-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Yatim/Non Yatim</label>
                        <select id="anakyatim" class="form-control" name="anakyatim">
                            <option value="">-- Pilih Program --</option>
                            <option value="Yatim" <?= $siswa['anakyatim'] == 'Yatim' ? 'selected' : '' ?>>Yatim</option>
                            <option value="Non Yatim" <?= $siswa['anakyatim'] == 'Non Yatim' ? 'selected' : '' ?>>Non Yatim</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pondok/Non Pondok</label>
                        <select name="pondok" id="" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Pondok" <?= $siswa['pondok'] == 'Pondok' ? 'selected' : '' ?>>Pondok</option>
                            <option value="Non Pondok" <?= $siswa['pondok'] == 'Non Pondok' ? 'selected' : '' ?>>Non Pondok</option>
                        </select>
                    </div>

                    <div class=" form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="No Telp" id="nomor" name="no_telp" value="<?= $siswa['no_telp'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ibu</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="orangtua" value="<?= $siswa['orangtua'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="alamat" value="<?= $siswa['alamat'] ?>">
                    </div>
                    <input type="hidden" class="form-control" name="id_ta" value="">
                </div>

            </div>
            <div class=" form-group">
                <label for="">Catatan</label>
                <textarea name="catatan" id="" rows="5" class="form-control"><?= $siswa['catatan'] ?></textarea>
            </div>
            <?= form_close() ?>

        </div>
        <div class="card-footer">
            <div class="form-group float-right">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>

</div>





<script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>


<script>
    $(document).ready(function() {

        function updateSelectState(jenjang) {
            // Reset dulu (semuanya aktif)
            $('#jurusan').prop('disabled', false);
            $('#program').prop('disabled', false);

            if (jenjang === 'SMP' || jenjang === '') {
                // SMP → disable dua-duanya
                $('#jurusan').prop('disabled', true);
                $('#program').prop('disabled', true);
            } else if (jenjang === 'SMA') {
                // SMA → jurusan disable, program aktif
                $('#jurusan').prop('disabled', true);
                $('#program').prop('disabled', false);
            } else if (jenjang === 'SMK') {
                // SMK → dua-duanya aktif
                $('#jurusan').prop('disabled', false);
                $('#program').prop('disabled', false);
            }
        }

        // Jalankan pertama kali saat form edit dibuka
        updateSelectState('<?= $siswa['ke_jenjang'] ?>');

        // Jalankan lagi kalau user ubah dropdown
        $('#ke_jenjang').on('change', function() {
            updateSelectState($(this).val());
        });
    });
</script>

<script>
    $(document).ready(function() {
        const base_url = '<?= base_url('') ?>';
        const selectedJenjang = '<?= $siswa['id_jenjang'] ?>';
        const selectedSekolah = '<?= $siswa['nama_sekolah'] ?>';

        function loadSekolah(idJenjang, selected = '') {
            if (!idJenjang) {
                $('#asal_sekolah').html('<option value="">-Pilih Sekolah-</option>');
                return;
            }

            $.ajax({
                url: base_url + '/formulir/getSekolahByJenjang/' + idJenjang,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log('Data sekolah:', data); // Debug
                    let html = '<option value="">-Pilih Sekolah-</option>';
                    $.each(data, function(i, item) {
                        html += `<option value="${item.nama_sekolah}" 
                              ${item.nama_sekolah === selected ? 'selected' : ''}>
                                ${item.nama_sekolah}
                              </option>`;
                    });
                    $('#asal_sekolah').html(html);
                },
                error: function(xhr, status, error) {
                    console.error('Gagal load sekolah:', error);
                }
            });
        }

        // Jalankan otomatis saat edit
        if (selectedJenjang) {
            loadSekolah(selectedJenjang, selectedSekolah);
        }

        // Event kalau jenjang diubah
        $('#jenjang').on('change', function() {
            loadSekolah($(this).val());
        });
    });
</script>




<?= $this->endSection() ?>
<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<div class="col-12">

    <div class="card rounded-0">
        <h5 class=" card-header">
            FORM TAMBAH CALON PESERTA DIDIK
        </h5>
        <?= form_open('formulir/add') ?>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kode Registrasi</label>
                        <input type="text" class="form-control" name="kode_pendaftaran" value="<?= $kode ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Calon PD</label>
                        <input type="text" id="nama" class="form-control" placeholder="Nama Calon Siswa" name="nama_siswa" oninput="capitalizeInput()">
                    </div>

                    <div class="form-check form-check-inline mt-3 mb-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>

                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
                    </div>

                    <div class="form-group">
                        <label for="">Daftar Ke ??</label>
                        <select name="ke_jenjang" id="ke_jenjang" class="form-control">
                            <option value="">--Mau Daftar Ke?--</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="form-group" id="jurusan-group" style="display: none;">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" class="form-control" name="jurusan">
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MPLB">MPLB</option>
                        </select>
                    </div>
                    <div class="form-group" id="program-group" style="display: none;">
                        <label for="program">Program</label>
                        <select id="program" class="form-control" name="program">
                            <option value="">-- Pilih Program --</option>
                            <option value="PSG">PSG</option>
                            <option value="NON PSG">NON PSG</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <select name="jenjang" id="jenjang" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach ($jenjang as $data) { ?>
                                <option value="<?= $data['id_jenjang'] ?>"><?= $data['jenjang'] ?></option>
                            <?php } ?>
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
                        <select name="anakyatim" id="" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Yatim">Yatim</option>
                            <option value="Non Yatim">Non Yatim</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pondok/Non Pondok</label>
                        <select name="pondok" id="" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Pondok">Pondok</option>
                            <option value="Non Pondok">Non Pondok</option>
                        </select>
                    </div>

                    <div class=" form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="No Telp" id="nomor" name="no_telp">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ibu</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="orangtua">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="alamat">
                    </div>
                    <input type="hidden" class="form-control" name="id_ta" value="<?= $ta['id_ta'] ?>">
                </div>

            </div>
            <div class=" form-group">
                <label for="">Catatan</label>
                <textarea name="catatan" id="" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="card-footer">
            <div class="form-group float-right">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>






<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#nomor').on('input', function() {
            var value = $(this).val();

            // Hapus semua karakter yang bukan angka
            value = value.replace(/\D/g, '');

            // Format nomor telepon Indonesia (62) dengan format: 08XXXXXXXX -> 628XXXXXXXX
            if (value.length > 1 && value.charAt(0) === '0') {
                value = '62' + value.substring(1);
            }

            // Perbarui nilai input dengan format yang benar (tanpa spasi)
            $(this).val(value);
        });
    });

    function capitalizeWords(str) {
        return str.replace(/\b\w/g, function(match) {
            return match.toUpperCase();
        });
    }

    function capitalizeInput() {
        let inputField = document.getElementById("nama");
        inputField.value = capitalizeWords(inputField.value);
    }

    $(document).ready(function() {
        $("#jenjang").change(function() {
            var id_sekolah = $("#jenjang").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Formulir/dataAsalSekolah') ?>/' + id_sekolah,
                success: function(html) {
                    $("#asal_sekolah").html(html);
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>
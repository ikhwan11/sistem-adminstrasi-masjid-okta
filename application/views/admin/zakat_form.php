<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah zakat fitrah</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('ramadhan/input_zakat'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi">
                                <?php echo form_error('tanggal_transaksi', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="merk_beras">Merk Beras : </label>
                                <select class="form-control" id="merk_beras" name="merk_beras">
                                    <option value="">== Pilih Merk Beras ==</option>
                                    <option value="1">Beras Cap Topi Koki</option>
                                    <option value="2">Beras Cap Sumo</option>
                                    <option value="3">Beras Cap Hotel</option>
                                    <option value="4">Beras Merk Finna</option>
                                    <option value="5">Beras Cap Anak Raja</option>
                                </select>
                                <?php echo form_error('merk_beras', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="pemberi">Nama Pemberi :</label>
                                <input type="text" class="form-control" id="pemberi" name="pemberi" value="<?= set_value('pemberi'); ?>">
                                <?php echo form_error('pemberi', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="zakat_untuk">Anggota Zakat :</label>
                                <input type="number" class="form-control" id="anggota" name="anggota">
                                <?php echo form_error('anggota', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <input type="button" class="btn bg-gradient-orange text-white" id="cek" value="Hitung"><br><br>
                    <p></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="total_harga">Total :</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga">
                                <?php echo form_error('total_harga', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Submit</button>
                    <a href="<?= base_url('ramadhan/zakat'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol submit untuk menyimpan transaksi</small></span>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var buttonCek = document.getElementById("cek");
    buttonCek.addEventListener("click", function cek(e) {
        e.preventDefault()
        var anggota = document.getElementById("anggota").value
        var berat = anggota * 2.5

        var beras = document.getElementById("merk_beras").value

        switch (beras) {
            case '1':
                var harga = 13500
                break;
            case '2':
                var harga = 13000
                break;
            case '3':
                var harga = 12500
                break;
            case '4':
                var harga = 12000
                break;
            default:
                var harga = 11000
                break;
        }

        var jumlah = berat * harga
        document.getElementById("total_harga").value = jumlah

    })
</script>
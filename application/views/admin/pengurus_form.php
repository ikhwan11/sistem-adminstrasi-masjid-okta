<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah pengurus</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url(''); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama'); ?>" autofocus>
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Jenis Kelamin :</label>
                                <select type="text" class="form-control" id="jk" name="jk">
                                    <option value="">== Pilih jenis kelamin ==</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jk', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal lahir :</label>
                                <input type="date" class="form-control" id="tl" name="tl">
                                <?php echo form_error('tl', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">No Hp :</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" autocomplete="off" value="<?= set_value('no_hp'); ?>">
                                <?php echo form_error('no_hp', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Jabatan :</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                                <?php echo form_error('jabatan', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Alamat :</label>
                                <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                                <?php echo form_error('alamat', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Tambah</button>
                    <a href="<?= base_url('user/pengurus'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol tambah untuk menyimpan Data</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
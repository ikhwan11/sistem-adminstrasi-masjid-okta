<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah donatur</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('donatur/tambah_aksi'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Nama :</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama'); ?>" autofocus>
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                                <?php echo form_error('tanggal', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Alamat :</label>
                                <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                                <?php echo form_error('alamat', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Total Donatur :</label>
                                <input type="number" class="form-control" id="total" name="total" value="<?= set_value('total'); ?>">
                                <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                                <?php echo form_error('total', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Submit</button>
                    <a href="<?= base_url('donatur/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol submit untuk menyimpan Data</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
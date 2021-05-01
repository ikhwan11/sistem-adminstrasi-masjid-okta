<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Form Pengeluaran Ramadhan</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('ramadhan/pengeluaran_aksi'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?= set_value('tanggal_transaksi'); ?>">
                                <?php echo form_error('tanggal_transaksi', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Ramadhan ke :</label>
                                <input type="number" class="form-control" id="hijriah" name="hijriah" value="<?= set_value('hijriah'); ?>">
                                <?php echo form_error('hijriah', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Keterangan :</label>
                                <textarea type="text" class="form-control" id="ket" name="ket" rows="3"><?= set_value('ket'); ?></textarea>
                                <?php echo form_error('ket', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tipe_transaksi"></label>
                            <small class="form-text text-muted text-white">Masukkan keterangan transaksi dengan singkat dan jelas. contoh :
                                <p><small><i>"biaya pembelian takjil"</i></small></p>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Total Transaksi :</label>
                                <input type="number" class="form-control" id="total_transaksi" name="total_transaksi" value="<?= set_value('total_transaksi'); ?>">
                                <?php echo form_error('total_transaksi', '<span class=" text-small text-danger">', '</span>') ?>
                                <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Submit</button>
                    <a href="<?= base_url('ramadhan/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol submit untuk menyimpan transaksi</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
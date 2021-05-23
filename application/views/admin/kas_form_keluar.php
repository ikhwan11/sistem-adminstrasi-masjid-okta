<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From pengeluaran kas</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('kas_masjid/transaksi_keluar_aksi'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi">
                                <?php echo form_error('tanggal_transaksi', '<span class=" text-small text-danger">', '</span>') ?>
                                <input type="hidden" class="form-control" id="jenis_transaksi" name="jenis_transaksi" value="Pengeluaran">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Keterangan :</label>
                                <textarea type="text" class="form-control" id="ket" name="ket" rows="3"></textarea>
                                <?php echo form_error('ket', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tipe_transaksi"></label>
                            <small class="form-text text-muted text-white">Masukkan keterangan transaksi dengan singkat dan jelas. contoh :
                                <p><small><i>"pembelian karpet"</i></small></p>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Total Transaksi :</label>
                                <input type="number" class="form-control" id="total_transaksi" name="total_transaksi">
                                <?php echo form_error('total_transaksi', '<span class=" text-small text-danger">', '</span>') ?>
                                <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Submit</button>
                    <a href="<?= base_url('kas_masjid/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol submit untuk menyimpan transaksi</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
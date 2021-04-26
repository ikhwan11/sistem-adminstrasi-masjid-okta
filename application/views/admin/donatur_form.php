<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah donatur</h6>
                </div>
            </div>
            <div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Nama :</label>
                                <input type="text" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" autocomplete="off" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="text" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?= date('d - m - Y'); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Alamat :</label>
                                <textarea type="text" class="form-control" id="ket" name="ket" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Total Donatur :</label>
                                <input type="number" class="form-control" id="total_transaksi" name="total_transaksi">
                                <input type="hidden" class="form-control" id="admin" name="admin">
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
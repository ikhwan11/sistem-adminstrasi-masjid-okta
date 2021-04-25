<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah transaksi kas</h6>
                </div>
            </div>
            <div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Transaksi : </label>
                                <select class="form-control" id="tipe_transaksi" name="tipe_transaksi">
                                    <option value="">== Pilih jenis transaksi ==</option>
                                    <option value="Pemasukan">Pemasukan</option>
                                    <option value="Pengeluaran">Pengeluaran</option>
                                </select>
                            </div>
                        </div>
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
                                <label for="tipe_transaksi">Keterangan :</label>
                                <textarea type="text" class="form-control" id="ket" name="ket" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tipe_transaksi"></label>
                            <small class="form-text text-muted text-white">Masukkan keterangan transaksi dengan singkat dan jelas. contoh :
                                <p><small><i>"infaq jum'at"</i></small></p>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Total Transaksi :</label>
                                <input type="number" class="form-control" id="total_transaksi" name="total_transaksi">
                                <input type="hidden" class="form-control" id="admin" name="admin">
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
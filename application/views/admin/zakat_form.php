<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah zakat fitrah</h6>
                </div>
            </div>
            <div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal :</label>
                                <input type="text" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?= date('d - m - Y'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="merk_beras">Merk Beras : </label>
                                <select class="form-control" id="merk_beras" name="merk_beras">
                                    <option value="">== Pilih Merk Beras ==</option>
                                    <option value="Pemasukan">Topi Koki</option>
                                    <option value="Pengeluaran">Anak Ajaib</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="pemberi">Pemberi zakat :</label>
                                <input type="number" class="form-control" id="pemberi" name="pemberi">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="zakat_untuk">Zakat untuk :</label>
                                <input type="number" class="form-control" id="zakat_untuk" name="zakat_untuk">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="berat_beras">Berat Beras : </label>
                                <select class="form-control" id="berat_beras" name="berat_beras">
                                    <option value="">== Pilih Berat Beras ==</option>
                                    <option value="2,5">2,5 Kg</option>
                                    <option value="5">5 Kg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="total_harga">Total Harga :</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga">
                                <input type="hidden" class="form-control" id="admin" name="admin">
                            </div>
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
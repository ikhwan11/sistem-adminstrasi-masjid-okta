<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah acara</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('acara/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Judul acara :</label>
                                <textarea type="text" class="form-control" id="judul" name="judul" rows="3" autofocus required><?= set_value('judul'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Rangka Peringatan :</label>
                                <input type="text" class="form-control" id="rangka" name="rangka" autocomplete="off" value="<?= set_value('rangka'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tanggal Acara :</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Waktu Mulai :</label>
                                <input type="time" class="form-control" id="mulai" name="mulai" value="<?= set_value('mulai'); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Waktu Selesai :</label>
                                <input type="time" class="form-control" id="selesai" name="selesai" value="<?= set_value('selesai'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Pengisi Acara :</label>
                                <input type="text" class="form-control" id="pengisi" name="pengisi" value="<?= set_value('pengisi'); ?>" required><span><small class="text-muted text-yellow"> * isi jika ada</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Upload banner acara :</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label for="tipe_transaksi">Tempat Acara :</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" value="<?= set_value('tempat'); ?>" required>
                                <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-green text-white">Submit</button>
                    <a href="<?= base_url('acara/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol submit untuk menyimpan Data</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
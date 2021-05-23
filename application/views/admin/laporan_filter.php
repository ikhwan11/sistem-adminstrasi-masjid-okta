<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Filter laporan</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('laporan/'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Dari tanggal :</label>
                                <input type="date" class="form-control" id="dari" name="dari">
                                <?php echo form_error('dari', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Sampai Tanggal:</label>
                                <input type="date" class="form-control" id="sampai" name="sampai">
                                <?php echo form_error('sampai', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-gradient-green text-white">Filter</button>
                    <a href="<?= base_url('admin/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                    <span><small class="text-muted text-white"> * Tekan tombol filter untuk menampilkan data</small></span>
                </form>
            </div>
        </div>
    </div>
</div>
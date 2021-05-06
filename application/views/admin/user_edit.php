<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From Edit user</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url('user/edit_user_aksi'); ?>" method="POST">
                    <?php foreach ($user as $p) : ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-white">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $p['id_user']; ?>">

                                    <label for="tipe_transaksi">Username :</label>
                                    <input type="text" class="form-control" id="username" name="username" required autofocus value="<?= $p['username']; ?>">

                                    <label for="tipe_transaksi">Password baru :</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-green text-white">Update</button>
                        <a href="<?= base_url('user/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                        <span><small class="text-muted text-white"> * Tekan tombol update untuk menyimpan Data</small></span>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
</div>
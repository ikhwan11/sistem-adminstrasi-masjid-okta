<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> From tambah pengurus masjid Asy-syuhada</h6>
                </div>
            </div>
            <div>
                <form action="<?= base_url(''); ?>" method="POST">
                    <h2 class="text-white"><u>Informasi diri :</u></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama'); ?>" autofocus>
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Nama Panggilan :</label>
                                <input type="text" class="form-control" id="nama_s" name="nama_s" autocomplete="off" value="<?= set_value('nama_s'); ?>" autofocus>
                                <?php echo form_error('nama_s', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>Jenis Kelamin :</label>
                                <select type="text" class="form-control" id="jk1" name="jk1">
                                    <option value="">== Pilih jenis kelamin ==</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jk1', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>Tanggal lahir :</label>
                                <input type="date" class="form-control" id="tl" name="tl">
                                <?php echo form_error('tl', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>No Hp :</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" autocomplete="off" value="<?= set_value('no_hp'); ?>">
                                <?php echo form_error('no_hp', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>Email :</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="<?= set_value('email'); ?>">
                                <?php echo form_error('email', '<span class=" text-small text-danger">', '</span>') ?>
                                <span><small class="text-muted text-yellow"> * isi jika ada</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Jabatan :</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>">
                                <?php echo form_error('jabatan', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Alamat domisili:</label>
                                <textarea type="text" class="form-control" id="alamat1" name="alamat1" rows="3"><?= set_value('alamat1'); ?></textarea>
                                <?php echo form_error('alamat1', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Alamat asal:</label>
                                <textarea type="text" class="form-control" id="alamat2" name="alamat2" rows="3"><?= set_value('alamat2'); ?></textarea>
                                <?php echo form_error('alamat2', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- keluarga -->
                    <h2 class="text-white"><u>Informasi data keluarga :</u></h2>
                    <p class="text-yellow">silakan isi jika ada</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Nama lengkap :</label>
                                <input type="text" class="form-control" id="pasangan" name="pasangan" value="<?= set_value('pasangan'); ?>">
                                <?php echo form_error('pasangan', '<span class=" text-small text-danger">', '</span>') ?>
                                <span><small class="text-muted text-yellow"> * Nama lengkap pasangan</small></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>Hubungan :</label>
                                <select type="text" class="form-control" id="hub" name="hub">
                                    <option value="">== Pilih Hubungan ==</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Istri">Istri</option>
                                </select>
                                <?php echo form_error('hub', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-white">
                                <label>Anak Pertama :</label>
                                <input type="text" class="form-control" id="pasangan" name="pasangan" value="<?= set_value('pasangan'); ?>">
                                <?php echo form_error('pasangan', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>Jenis Kelamin :</label>
                                <select type="text" class="form-control" id="jk2" name="jk2">
                                    <option value="">== Pilih jenis kelamin ==</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jk2', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group text-white">
                                <label>No yang bisa dihubungi :</label>
                                <input type="number" class="form-control" id="no_hub" name="no_hub" autocomplete="off" value="<?= set_value('no_hub'); ?>">
                                <?php echo form_error('no_hub', '<span class=" text-small text-danger">', '</span>') ?>
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
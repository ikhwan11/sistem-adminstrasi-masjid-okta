<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Detail Pengurus/staff</h6>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <?php foreach ($pengurus as $p) : ?>
                                <div class="card-header border-0">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <?php if ($p['foto'] == !null) { ?>
                                                <img src="<?= base_url('assets/foto_staff/') . $p['foto']; ?>" class="rounded float-left" width="300">
                                            <?php } else if ($p['jenis_kelamin'] == 'Laki-laki') { ?>
                                                <img src="<?= base_url('assets/foto_staff/default_male.jpg'); ?>" class="rounded float-left" width="300">
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/foto_staff/default_female.jpg'); ?>" class="rounded float-left" width="300">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <h1 class="mb-0"><?= $p['nama_lengkap']; ?></h1>
                                            <span><?= $p['jabatan']; ?></span>
                                        </div>
                                    </div>
                                    <div class="container mt-3">
                                        <div class="row">
                                            <a href="" class="btn btn-sm bg-gradient-green text-white" data-toggle="modal" data-target="#Foto"><i class="fas fa-camera"></i> Ganti foto</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>

                                            <?php if ($p['jenis_kelamin'] == 'Laki-laki') { ?>
                                                <tr>
                                                    <td>
                                                        <h4>Panggilan </h4>
                                                    </td>
                                                    <td> : </td>
                                                    <td>Bpk. <?= $p['panggilan']; ?></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>
                                                        <h4>Panggilan </h4>
                                                    </td>
                                                    <td> : </td>
                                                    <td>Ibu. <?= $p['panggilan']; ?></td>
                                                </tr>
                                            <?php } ?>

                                            <tr>
                                                <td>
                                                    <h4>Jenis Kelamin </h4>
                                                </td>
                                                <td> : </td>
                                                <td><?= $p['jenis_kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Tanggal Lahir </h4>
                                                </td>
                                                <td> : </td>
                                                <td><?= $p['tanggal_lahir']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>No hp </h4>
                                                </td>
                                                <td> : </td>
                                                <td><?= $p['no_hp']; ?></td>
                                            </tr>

                                            <?php if ($p['email'] != null) { ?>
                                                <tr>
                                                    <td>
                                                        <h4>Email </h4>
                                                    </td>
                                                    <td> : </td>
                                                    <td><?= $p['email']; ?></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>
                                                        <h4>Email </h4>
                                                    </td>
                                                    <td> : </td>
                                                    <td>-</td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>
                                                    <h4>Alamat domisili</h4>
                                                </td>
                                                <td> : </td>
                                                <td><?= $p['alamat_domisili']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Alamat asal</h4>
                                                </td>
                                                <td> : </td>
                                                <td><?= $p['alamat_asal']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="container mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <a href="<?= base_url('user/tambah_user/') . $p['id_staff']; ?>" class="btn bg-gradient-purple text-white">Buat user</a>
                                            <a href="<?= base_url('user/edit_pengurus/') . $p['id_staff']; ?>" class="btn bg-gradient-pink text-white">Edit</a>
                                            <a href="" class="btn bg-gradient-red text-white" data-toggle="modal" data-target="#ModalHapus">Hapus</a>
                                            <a href="<?= base_url('user/pengurus'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                                            <small class="text-dark text-left">* tekan tombol buat user untuk membuat hak akses sistem pada staff ini</small>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-red" id="exampleModalLabel">Konfirmasi !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/hapus_pengurus/') . $p['id_staff']; ?>" method="POST">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data <?= $p['nama_lengkap']; ?>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="Foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Ganti foto profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/update_foto'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Unggah foto baru :</label>
                    <input type="file" class="form-control" name="foto">
                    <input type="hidden" class="form-control" name="id" value="<?= $p['id_staff']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Unggah</button>
                </div>
            </form>
        </div>
    </div>
</div>
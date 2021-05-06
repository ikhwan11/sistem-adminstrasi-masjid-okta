<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-book"></i> User Masjid Asy-syuhada</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data User</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">username</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($user as $u) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td>
                                            <a href="<?= base_url('user/edit_user/') . $u['id_user']; ?>" class="btn btn-sm bg-gradient-green text-white">Edit</a>
                                            <a onclick="confirm('Apakah anda yakin?')" href="<?= base_url('user/hapus_user/') . $u['id_user']; ?>" class="btn btn-sm bg-gradient-red text-white">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
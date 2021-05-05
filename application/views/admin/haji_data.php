<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-book"></i> Data Nasabah Haji</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data Nasabah</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?= base_url('idul_adha/tambah_nasabah_haji'); ?>" class="btn bg-gradient-green text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Tambah Nasabah</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama nasabah</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal lahir</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($haji as $n) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>

                                        <?php if ($n['jenis_kelamin'] == 'Laki-laki') { ?>
                                            <td>Bpk. <?= $n['nama']; ?></td>
                                        <?php } else { ?>
                                            <td>Ibu. <?= $n['nama']; ?></td>
                                        <?php } ?>

                                        <td><?= $n['alamat']; ?></td>
                                        <td><?= $n['tanggal_lahir']; ?></td>
                                        <td>
                                            <a href="<?= base_url('idul_adha/detail_nasabah_haji/') . $n['id_nasabah']; ?>" class="btn btn-sm bg-gradient-yellow text-white">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                        <div class="col">
                            <?= $this->pagination->create_links();; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
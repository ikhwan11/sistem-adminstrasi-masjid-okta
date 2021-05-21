<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-hand-holding-usd"></i> Data acara</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data Acara</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <a href="<?= base_url('acara/tambah'); ?>" class="btn bg-gradient-pink text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Tambah Acara</a>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Judul acara</th>
                                    <th scope="col">Waktu Pelaksanaan</th>
                                    <th scope="col">Pengisi acara</th>
                                    <th scope="col">status</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-sm bg-gradient-red text-white">Hapus</a>
                                        <a href="#" class="btn btn-sm bg-gradient-blue text-white">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
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
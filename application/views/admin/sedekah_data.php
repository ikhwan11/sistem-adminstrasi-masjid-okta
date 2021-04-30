<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-hand-holding-usd"></i> Data dana sedekah untuk anak yatim dan Duafa Masjid Asy-syuhada</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data dana sedekah anak yatim dan duafa</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?= base_url('sedekah/kelola_dana_masuk'); ?>" class="btn bg-gradient-pink text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Kelola Dana Pemasukan</a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?= base_url('sedekah/kelola_dana_keluar'); ?>" class="btn bg-gradient-orange text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Kelola Dana Pengeluaran</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Tipe Dana</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <?php foreach ($dana as $kas) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $kas['nama_admin']; ?></td>
                                        <td><?= $kas['tanggal']; ?></td>
                                        <td><?= $kas['jenis_transaksi']; ?></td>
                                        <td><?= $kas['keterangan']; ?></td>
                                        <?php if ($kas['jenis_transaksi'] == 'Pemasukan') { ?>
                                            <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp. <?= number_format($kas['total'], 0, ',', '.'); ?></td>
                                        <?php } else { ?>
                                            <td><i class="fas fa-arrow-down text-danger mr-3"></i> Rp. <?= number_format($kas['total'], 0, ',', '.'); ?></td>
                                        <?php } ?>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Saldo Dana Sedekah yatim & duafa</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            <?php
                                            $hasil = $pemasukan->total_kas - $pengeluaran->total;
                                            echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="fas fa-sign-in-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Dana Sedekah Keluar</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp. <?= number_format($pengeluaran->total, 0, ',', '.'); ?></span></span>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
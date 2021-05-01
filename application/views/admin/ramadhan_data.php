<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-hand-holding-usd"></i> Data keuangan ramadhan masjid Asy-syuhada</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data Keuangan Ramadhan</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?= base_url('ramadhan/pemasukan'); ?>" class="btn bg-gradient-green text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Pemasukan Ramadhan</a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?= base_url('ramadhan/pengeluaran'); ?>" class="btn bg-gradient-red text-white btn-block text-left mb-2"><i class="fas fa-minus"></i> Pengeluaran Ramadhan</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Ramadhan ke</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <?php foreach ($ramadhan as $ra) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $ra['tanggal']; ?></td>
                                        <td><?= $ra['admin']; ?></td>
                                        <td><?= $ra['jenis']; ?></td>
                                        <td><?= $ra['ramadhan']; ?> Ramadhan</td>
                                        <td><?= $ra['keterangan']; ?></td>
                                        <?php if ($ra['jenis'] == 'Pemasukan') { ?>
                                            <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp. <?= number_format($ra['total'], 0, ',', '.'); ?></td>
                                        <?php } else { ?>
                                            <td><i class="fas fa-arrow-down text-danger mr-3"></i> Rp. <?= number_format($ra['total'], 0, ',', '.'); ?></td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total sisa Keuangan Ramadhan</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            <?php
                                            $hasil = $pemasukan->total - $pengeluaran->total;
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Keuangan Ramadhan keluar</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp. <?= number_format($pengeluaran->total, 0, ',', '.'); ?></span>
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
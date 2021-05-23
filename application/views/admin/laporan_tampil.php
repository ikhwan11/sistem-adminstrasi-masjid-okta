<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class=" d-print-none row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Filter laporan</h6>
                </div>
            </div>
            <div class="d-print-none">
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

            <h1 class="text-center d-none d-print-block mt-3">Laporan Bulanan tanggal <?= date('d-M-Y'); ?></h1>
            <hr class="d-none d-print-block">
            <h1 class="d-none d-print-block mt-3">1. Laporan kas masjid</h1>
            <hr class="d-none d-print-block">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                                    <span class="h2 font-weight-bold mb-0">
                                        <?php
                                        $hasil = $total_kas_keseluruhan->total_kas - $total_kas_pengeluaran->total;
                                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-green">Kas masuk</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-yellow">total : Rp. <?= number_format($total_kas_masuk->total, 0, ',', '.'); ?></h4>
                        </div>
                        <table class="table align-items-center table-flush table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($kas_masuk as $masuk) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $masuk['tanggal']; ?></td>
                                        <td><?= $masuk['keterangan']; ?></td>
                                        <td>Rp. <?= number_format($masuk['total'], 0, ',', '.'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-red">Kas keluar :</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-yellow">total : Rp. <?= number_format($total_kas_keluar->total, 0, ',', '.'); ?></h4>
                        </div>
                        <table class="table align-items-center table-flush table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($kas_keluar as $keluar) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $keluar['tanggal']; ?></td>
                                        <td><?= $keluar['keterangan']; ?></td>
                                        <td>Rp. <?= number_format($keluar['total'], 0, ',', '.'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <!-- yatim & duafa -->

            <h1 class="d-none d-print-block mt-3">2. Laporan kotak infaq yatim dan duafa</h1>
            <hr class="d-none d-print-block">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                                    <span class="h2 font-weight-bold mb-0">
                                        <?php
                                        $hasil = $total_sedekah_keseluruhan->total_kas - $total_sedekah_pengeluaran->total;
                                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-green">Sedekah masuk</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-yellow">total : Rp. <?= number_format($total_sedekah_masuk->total, 0, ',', '.'); ?></h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                <tbody>
                                    <?php foreach ($sedekah_masuk as $sm) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $sm['tanggal']; ?></td>
                                            <td><?= $sm['keterangan']; ?></td>
                                            <td>Rp. <?= number_format($sm['total'], 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-red">Sedekah keluar :</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-yellow">total : Rp. <?= number_format($total_sedekah_keluar->total, 0, ',', '.'); ?></h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                <tbody>
                                    <?php foreach ($sedekah_keluar as $sk) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $sk['tanggal']; ?></td>
                                            <td><?= $sk['keterangan']; ?></td>
                                            <td>Rp. <?= number_format($sk['total'], 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- donatur -->
            <h1 class="d-none d-print-block mt-3">1. Daftar donatur</h1>
            <hr class="d-none d-print-block">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-green"> Daftar Donatur bulan ini</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-yellow">total : Rp. <?= number_format($total_uang_donatur->total, 0, ',', '.'); ?></h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                <tbody>
                                    <?php foreach ($donatur_baru as $dn) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dn['nama']; ?></td>
                                            <td><?= $dn['alamat']; ?></td>
                                            <td><?= $dn['tanggal']; ?></td>
                                            <td>Rp. <?= number_format($dn['total'], 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
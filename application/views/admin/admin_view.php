<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Dashboard</h6>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6 ">
                    <div class="card card-stats ">
                        <!-- Card body -->
                        <div class="card-body ">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0 n">Saldo kas tersisa</h5>
                                    <span class="h4 font-weight-bold mb-0 text-green">
                                        <?php
                                        $hasil = $kas_masuk->total_kas - $kas_keluar->total;
                                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0 ">saldo anak yatim & duafa</h5>
                                    <span class="h4 font-weight-bold mb-0 text-orange">
                                        <?php
                                        $hasil = $sedekah_masuk->total_kas - $sedekah_keluar->total;
                                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Donatur pembangunan</h5>
                                    <span class="h4 font-weight-bold mb-0 text-pink">Rp. <?= number_format($donatur->total, 0, ',', '.'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Staff/pengurus masjid</h5>
                                    <span class="h4 font-weight-bold mb-0"><?= $total_org; ?> orang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Aliran kas</h3>
                        </div>
                        <div class="col text-right">
                            <a href="<?= base_url('kas_masjid/'); ?>" class="btn btn-sm btn-primary">Lihat semua</a>
                        </div>
                    </div>

                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Tipe kas</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <?php foreach ($arus_kas as $kas) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $kas->jenis_transaksi; ?></td>
                                    <td><?= $kas->keterangan; ?></td>
                                    <?php if ($kas->jenis_transaksi == 'Pemasukan') { ?>
                                        <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp. <?= number_format($kas->total, 0, ',', '.'); ?></td>
                                    <?php } else { ?>
                                        <td><i class="fas fa-arrow-down text-danger mr-3"></i> Rp. <?= number_format($kas->total, 0, ',', '.'); ?></td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Data organisasi</h3>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <?php foreach ($organisasi as $or) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $or['nama_lengkap']; ?></td>
                                    <td><?= $or['jabatan']; ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
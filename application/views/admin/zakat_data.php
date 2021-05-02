<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-hand-holding-usd"></i> Data zakat ramadhan masjid Asy-syuhada</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data Zakat fitrah</h3>
                                <?php echo $this->session->flashdata('pesan') ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <a href="<?= base_url('ramadhan/transaksi_zakat'); ?>" class="btn bg-gradient-pink text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Tambah zakat</a>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Pemberi</th>
                                    <th scope="col">Zakat untuk</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Merk Beras</th>
                                    <th scope="col">Total harga</th>
                                </tr>
                            </thead>
                            <?php foreach ($zakat as $z) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $z['admin']; ?></td>
                                        <td><?= $z['nama_pemberi']; ?></td>
                                        <td><?= $z['jumlah_anggota']; ?> Orang</td>
                                        <td><?= $z['tanggal']; ?></td>

                                        <?php if ($z['merk_beras'] == '1') { ?>
                                            <td>Beras Cap Topi Koki</td>
                                        <?php } elseif ($z['merk_beras'] == '2') { ?>
                                            <td>Beras Cap Sumo</td>
                                        <?php  } elseif ($z['merk_beras'] == '3') { ?>
                                            <td>Beras Cap Hotel</td>
                                        <?php  } elseif ($z['merk_beras'] == '4') { ?>
                                            <td>Beras Merk Finna</td>
                                        <?php } else { ?>
                                            <td>Beras Cap Anak Raja</td>
                                        <?php } ?>

                                        <td>Rp. <?= number_format($z['total_harga'], 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-stats">\
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total zakat</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp.356.000</span>
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
                </div>
            </div> -->
        </div>
    </div>
</div>
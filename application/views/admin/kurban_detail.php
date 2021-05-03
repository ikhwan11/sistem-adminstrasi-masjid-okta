<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-home"></i> Detail Nasabah</h6>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <?php foreach ($nasabah as $nab) : ?>
                                        <div class="col">
                                            <h1 class="mb-0"><?= $nab['nama']; ?></h1>
                                            <span><?= $nab['alamat']; ?> (<?= $nab['no_hp']; ?>)</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Riwayat tabungan</h5>
                                <a href="" class="btn btn-sm bg-gradient-green text-white" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Tabungan</a>
                                <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">admin</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1;
                                        foreach ($tabungan as $tab) : ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $tab['admin']; ?></td>
                                                    <td><?= $tab['tanggal']; ?></td>
                                                    <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp. <?= number_format($tab['total'], 0, ',', '.'); ?></td>
                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="width: 18rem;">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Tabungan</h5>
                                            <span class="h2 font-weight-bold mb-0">Rp. <?= number_format($jumlah->total, 0, ',', '.'); ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-pink text-white rounded-circle shadow">
                                                <i class="fas fa-money-check-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <?php foreach ($hewan as $h) : ?>
                                            <span class="text-success mr-2">Harga <?= $h['kurban']; ?> : </span>
                                            <span class="text-nowrap text-danger">
                                                <?php if ($h['kurban'] == 'Kambing') { ?>
                                                    Rp. 2000.000
                                                <?php } else { ?>
                                                    Rp. 18.000.000
                                                <?php } ?>
                                            </span><br>
                                            <span class="text-success mr-2">sisa target : </span>
                                            <span class="text-nowrap text-danger">
                                                <?php
                                                switch ($h['kurban']) {
                                                    case 'Kambing':
                                                        $harga = 2000000;
                                                        break;

                                                    default:
                                                        $harga = 18000000;
                                                        break;
                                                }

                                                $hasil = $jumlah->total - $harga;
                                                echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                                ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn bg-gradient-red text-white">Target tercapai</button>
                        <a href="<?= base_url('idul_adha/'); ?>" class="btn bg-gradient-yellow text-white">Kembali</a>
                        <small class="text-white text-left">* tekan tombol ini jika target sudah terpenuhi</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah tabungan -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah tabungan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('idul_adha/kurban_tambah'); ?>" method="POST">
                <div class="modal-body">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal :</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                            <input type="hidden" class="form-control" id="id_nasabah" name="id_nasabah" value="<?= $nab['id_nasabah']; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Total :</label>
                            <input type="number" class="form-control" id="total" name="total">
                            <input type="hidden" class="form-control" id="admin" name="admin" value="<?= $this->session->userdata('nama'); ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
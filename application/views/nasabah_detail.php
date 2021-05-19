<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ol>
                        <li><a href="<?= base_url('beranda/'); ?>">Home</a></li>
                        <li>Info kas masjid</li>
                    </ol>
                    <h2>Detail nasabah</h2>
                </div>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="container mt-2">
        <div class="card">
            <div class="row">
                <?php foreach ($nasabah as $ns) : ?>
                    <div class="col-md-4">
                        <div class="card-body">
                            <?php if ($ns['jenis_kelamin'] == 'Laki-laki') { ?>
                                <h2 class="card-title">Bpk. <?= $ns['nama']; ?></h2>
                            <?php } else { ?>
                                <h2 class="card-title">Ibu. <?= $ns['nama']; ?></h2>
                            <?php } ?>
                            <h4 class="card-subtitle mb-2 text-muted"><?= $ns['alamat']; ?></h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">

                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <td>Jenis tabungan</td>
                                        <td>:</td>
                                        <td><?= $ns['jenis']; ?></td>
                                    </tr>

                                    <?php if ($ns['jenis'] == 'Kurban') { ?>
                                        <tr>
                                            <td>Jenis Hewan</td>
                                            <td>:</td>
                                            <td><?= $ns['kurban']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>
                                                <?php if ($ns['kurban'] == 'Kambing') { ?>
                                                    Rp. 2000.0000
                                                <?php } else { ?>
                                                    Rp. 18.000.0000
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td>Ongkos/Biaya</td>
                                            <td>:</td>
                                            <td>
                                                Rp. 44.000.000
                                            </td>
                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-md-4">
                    <div class="card-body">

                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td>Total tabungan</td>
                                    <td>:</td>
                                    <td class="text-success">Rp. <?= number_format($banyak->total, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Sisa bayar</td>
                                    <td>:</td>
                                    <td class="text-danger">
                                        <?php if ($ns['jenis'] == 'Kurban') { ?>
                                            <?php
                                            switch ($ns['kurban']) {
                                                case 'Kambing':
                                                    $harga = 2000000;
                                                    break;

                                                default:
                                                    $harga = 18000000;
                                                    break;
                                            }

                                            $hasil = $banyak->total - $harga;
                                            echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                            ?>
                                        <?php } else { ?>
                                            <?php
                                            $hasil = $banyak->total - 44000000;
                                            echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                                            ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-3">
        <a href="<?= base_url('kas_info/'); ?>" class="btn btn-info">Kembali</a>
    </div>
    <div class="container">
        <span>
            <h3>Riwayat tabungan :</h3>
        </span>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tabungan as $tb) : ?>
                    <tr>
                        <th scope="row"><?= $tb['tanggal']; ?></th>
                        <td>Rp. <?= number_format($tb['total'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main><!-- End #main -->
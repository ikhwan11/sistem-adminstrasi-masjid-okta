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
                    <h2>Info kas masjid Asy-Syuhada</h2>
                </div>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container-fluid">

            <div class="row counters">
                <div class="col-md-6 text-center">
                    <h3>Slado kas masjid:</h3>
                    <span class="text-success">
                        <?php
                        $hasil = $pemasukan_kas->total_kas - $pengeluaran_kas->total;
                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                        ?>
                    </span>
                    <p>Rupiah</p>
                    <hr>
                    <h3>Pengeluaran:</h3>
                    <span class="text-danger">Rp. <?= number_format($pengeluaran_kas->total, 0, ',', '.'); ?></span>
                    <p>Rupiah</p>
                    <a href="<?= base_url('kas_info/detailKas'); ?>" class="btn btn-sm btn-info">Selengkapnya</a>
                </div>
                <div class="col-md-6 text-center">
                    <h3>Slado anak yatim & Duafa:</h3>
                    <span class="text-success">
                        <?php
                        $hasil = $pemasukan_sed->total_kas - $pengeluaran_sed->total;
                        echo 'Rp. ' . number_format($hasil, 0, ',', '.');
                        ?>
                    </span>
                    <p>Rupiah</p>
                    <hr>
                    <h3>Pengeluaran:</h3>
                    <span class="text-danger">Rp. <?= number_format($pengeluaran_sed->total, 0, ',', '.'); ?></span>
                    <p>Rupiah</p>
                    <a href="<?= base_url('kas_info/detailSed'); ?>" class="btn btn-sm btn-info">Selengkapnya</a>
                </div>
            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container-fluid">

            <div class="section-title">
                <h3>Data <span>Nasabah</span> Haji & Kurban</h3>
                <p>Berikut data-data nasabah yang ikut serta dalam mengikuti program tahunan yaitu tabungan haji dan kurban</p>
            </div>
            <div class="container pl-5">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="keyword" class="form-control" placeholder="Cari nasabah.." autofocus autocomplete="off">
                                <div class="input-group-append">
                                    <input class="btn btn-info btn-sm" type="submit" name="submit" value="Cari">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <div class="row">
                        <?php foreach ($nasabah as $ns) : ?>

                            <div class="col-md-4">
                                <div class="testimonial-item">

                                    <?php if ($ns['jenis_kelamin'] == 'Laki-laki') { ?>
                                        <h3>Bpk. <?= $ns['nama']; ?></h3>
                                    <?php } else { ?>
                                        <h3>Ibu. <?= $ns['nama']; ?></h3>
                                    <?php } ?>

                                    <h4><?= $ns['alamat']; ?></h4>
                                    <p>Jenis tabungan :
                                    <h4><?= $ns['jenis']; ?></h4>
                                    </p>
                                    <p>
                                        <a href="<?= base_url('kas_info/detailNas/') . $ns['id_nasabah']; ?>" class="btn btn-sm btn-warning">Detail dan info</a>
                                    </p>
                                </div>
                            </div><!-- End testimonial-item -->

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col">
        <?= $this->pagination->create_links(); ?>
    </div>

</main><!-- End #main -->
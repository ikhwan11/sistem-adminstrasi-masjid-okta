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
                    <h2>Detail pengeluaran Sedekah Anak yatim & Duafa</h2>
                </div>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <div class="container my-3">
        <a href="<?= base_url('kas_info/'); ?>" class="btn btn-info">Kembali</a>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sedekah as $k) : ?>
                    <tr>
                        <th scope="row"><?= $k['tanggal']; ?></th>
                        <td><?= $k['keterangan']; ?></td>
                        <td>Rp. <?= number_format($k['total'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</main><!-- End #main -->
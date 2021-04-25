<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-book"></i> Arus Kas Masjid Asy-syuhada</h6>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Arus kas</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('kas_masjid/transaksi'); ?>" class="btn bg-gradient-pink text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Tambah transaksi kas</a>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tipe kas</th>
                                    <th scope="col">Jenis kas</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pemasukan</td>
                                    <td>Kas</td>
                                    <td>Infaq kotak amal</td>
                                    <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp.356.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pengeluaran</td>
                                    <td>Sedekah Yatim & Duafa</td>
                                    <td> Sedekah sembako panti asuhan aisyah batam centre</td>
                                    <td><i class="fas fa-arrow-down text-warning mr-3"></i> Rp.750.000</td>
                                </tr>
                            </tbody>
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
                                    <div class="col-md-6">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total kas masuk</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp.356.000</span>
                                    </div>
                                    <div class="col-md-6 text-right">
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
                                    <div class="col-md-6">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total kas Keluar</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp.750.000</span>
                                    </div>
                                    <div class="col-md-6 text-right">
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
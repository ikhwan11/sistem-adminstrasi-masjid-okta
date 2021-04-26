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
                                <h3 class="mb-0">Data Keuangan</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <a href="<?= base_url('ramadhan/transaksi_ramadhan'); ?>" class="btn bg-gradient-pink text-white btn-block text-left mb-2"><i class="fas fa-plus"></i> Tambah Keuangan</a>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Ramadhan ke</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Okta Ainun Anggraini</td>
                                    <td>Pemasukan</td>
                                    <td>1 Ramadhan</td>
                                    <td>Pemasukan Kotak amal</td>
                                    <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp.1.356.000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Okta Ainun Anggraini</td>
                                    <td>Pengeluaran</td>
                                    <td>1 Ramadhan</td>
                                    <td>Biaya pebelian takjil</td>
                                    <td><i class="fas fa-arrow-down text-warning mr-3"></i> Rp.600.000</td>
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
                                    <div class="col-md-8">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total sisa Keuangan Ramadhan</h5>
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
                    <div class="col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Keuangan Ramadhan keluar</h5>
                                        <span class="h2 font-weight-bold mb-0">Rp.750.000</span>
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
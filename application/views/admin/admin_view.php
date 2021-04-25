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
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">kotak amal</h5>
                                    <span class="h2 font-weight-bold mb-0">Rp. 18.553.300</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">anak yatim & duafa</h5>
                                    <span class="h2 font-weight-bold mb-0">Rp. 10.023.000</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Donatur pembangunan</h5>
                                    <span class="h2 font-weight-bold mb-0">Rp. 25.500.000</span>
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
                                    <span class="h2 font-weight-bold mb-0">15 orang</span>
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
                        <tbody>
                            <tr>
                                <td>Pemasukan</td>
                                <td>Infaq kotak amal</td>
                                <td><i class="fas fa-arrow-up text-success mr-3"></i> Rp.356.000</td>
                            </tr>
                            <tr>
                                <td>Pengeluaran</td>
                                <td> Sedekah sembako panti asuhan aisyah batam centre</td>
                                <td><i class="fas fa-arrow-down text-warning mr-3"></i> Rp.750.000</td>
                            </tr>

                        </tbody>
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
                        <tbody>
                            <tr>
                                <th scope="row">
                                    H. Ikhwan sulestra, Lc., Ma.
                                </th>
                                <td>
                                    Imam masjid 1
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    H. Muhhamad ichsan, S,pd
                                </th>
                                <td>
                                    Imam masjid 2
                                </td>
                                <td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
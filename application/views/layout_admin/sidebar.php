<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="col mt-3">
                <a><img style="width:200px;" src="<?= base_url('assets/admin/img/logo-2.png'); ?>"></a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link

                            <?php if ($this->uri->segment(1) == "admin") : ?>
                            active
                            <?php endif; ?>

                            " href="<?= base_url('admin/'); ?>">
                                <i class="ni ni-tv-2 text-primary "></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link
                            
                            <?php if ($this->uri->segment(1) == "kas_masjid") : ?>
                            active
                            <?php endif; ?>

                            " href="<?= base_url('kas_masjid/'); ?>">
                                <i class="fas fa-wallet text-yellow "></i>
                                <span class="nav-link-text">Kas Masjid</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link
                            <?php if ($this->uri->segment(1) == "sedekah") : ?>
                            active
                            <?php endif; ?>
                            " href="<?= base_url('sedekah/'); ?>">
                                <i class="fas fa-wallet text-orange"></i>
                                <span class="nav-link-text">Sedekah yatim & duafa</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link
                            <?php if ($this->uri->segment(1) == "donatur") : ?>
                            active
                            <?php endif; ?>
                            " href="<?= base_url('donatur/'); ?>">
                                <i class="fas fa-donate text-green"></i>
                                <span class="nav-link-text">Donatur masjid</span>
                            </a>
                        </li>
                    </ul>
                    <!-- acara -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link
                            <?php if ($this->uri->segment(1) == "acara") : ?>
                            active
                            <?php endif; ?>
                            " href="<?= base_url('acara/'); ?>">
                                <i class="fas fa-calendar-alt text-black"></i>
                                <span class="nav-link-text">Acara</span>
                            </a>
                        </li>
                    </ul>
                    <!-- acara end -->
                    <!-- laporan -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link
                            <?php if ($this->uri->segment(1) == "laporan") : ?>
                            active
                            <?php endif; ?>
                            " href="">
                                <i class="fas fa-clipboard text-pink"></i>
                                <span class="nav-link-text">Buat Laporan</span>
                            </a>
                        </li>
                    </ul>
                    <!-- laporan end -->

                    <!-- ramadhan -->
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal
                        <?php if ($this->uri->segment(1) == "ramadhan") : ?>
                            text-orange
                            <?php endif; ?>
                        ">Ramadhan</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('ramadhan/'); ?>">
                                <i class="fas fa-wallet text-black"></i>
                                <span class="nav-link-text">Keuangan Ramadhan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('ramadhan/zakat'); ?>">
                                <i class="fas fa-money-bill-wave-alt text-cyan"></i>
                                <span class="nav-link-text">Zakat fitrah</span>
                            </a>
                        </li>
                    </ul>
                    <!-- ramadhan end -->

                    <!-- idul adha -->
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal 
                        <?php if ($this->uri->segment(1) == "idul_adha") : ?>
                            text-orange
                            <?php endif; ?>
                        ">Idul adha</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('idul_adha/'); ?>">
                                <i class="fas fa-quran text-red"></i>
                                <span class="nav-link-text">Tabungan kurban</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('idul_adha/haji'); ?>">
                                <i class="fas fa-kaaba text-blue"></i>
                                <span class="nav-link-text">Tabungan haji</span>
                            </a>
                        </li>
                    </ul>
                    <!-- idul adha end -->

                    <!-- organisasi -->
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal
                        <?php if ($this->uri->segment(1) == "user") : ?>
                            text-orange
                            <?php endif; ?>
                        ">Kelola Organisasi</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('user/'); ?>">
                                <i class="fas fa-users text-pink"></i>
                                <span class="nav-link-text">Kelola User</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('user/pengurus'); ?>">
                                <i class="fas fa-mosque text-cyan"></i>
                                <span class="nav-link-text">Data pengurus masjid</span>
                            </a>
                        </li>
                    </ul>
                    <!-- organisasi end -->

                </div>
            </div>
        </div>
    </nav>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<img src="<?= base_url('assets/beranda/img/slide-1.jpg'); ?>" alt="">
				<div class="carousel-container">
					<div class="container">
						<h2 class="animated fadeInDown">السلام عليكم</h2>
						<h2 class="animated fadeInDown">'ahlaan bikum fi <span>Masjid Asy-syuhada</span></h2>
						<p class="animated fadeInUp">Rasullullah bersabda, “Shalat berjamaah lebih utama dari pada shalat sendirian dua puluh tujuh derajat.” (diriwayatkan oleh imam Malik, imam Ahmad, imam Al-Bukhari, imam Muslim, imam At-Tirmidzi, imam Ibnu Majah, dan imam An-Nasai dati sahabat Ibnu Umar r.a. )</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container-fluid">

			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
					<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
				</div>

				<div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
					<h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
					<p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-fingerprint"></i></div>
						<h4 class="title"><a href="">Lorem Ipsum</a></h4>
						<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</div>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-gift"></i></div>
						<h4 class="title"><a href="">Nemo Enim</a></h4>
						<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
					</div>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-atom"></i></div>
						<h4 class="title"><a href="">Dine Pad</a></h4>
						<p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
					</div>

				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials section-bg">
		<div class="container-fluid">

			<div class="section-title">
				<h2>Acara pada masjid Asy-syuhada</h2>
				<h3>Ikuti dan<span> hadirilah</span> acara</h3>
				<p>dengan ikhlas dan penuh iman, mengharapkan rahmat dari Allah Subha nahwa ta'ala</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10">

					<div class="row">
						<?php foreach ($acara as $a) : ?>

							<div class="col-lg-6">
								<div class="testimonial-item">
									<img class="card-img-top" src="<?= base_url('assets/banner_acara'); ?>/<?= $a['foto']; ?>" alt="Card image cap">
									<h3><?= $a['judul_acara']; ?></h3>
									<h4><?= $a['tujuan_acara']; ?></h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										<?= $a['keterangan']; ?>
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p><br>
									<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalDetail">Detail acara</button>
								</div>
							</div><!-- End testimonial-item -->

						<?php endforeach; ?>
					</div>

				</div>
			</div>

		</div>
	</section><!-- End Testimonials Section -->
	<div class="col">
		<?= $this->pagination->create_links();; ?>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalDetailLabel">Detail acara</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table">
						<tbody>
							<tr>
								<td>Judul acara</td>
								<td>:</td>
								<td><?= $a['judul_acara']; ?></td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td>:</td>
								<td><?= $a['tanggal_acara']; ?></td>
							</tr>
							<tr>
								<td>Waktu acara</td>
								<td>:</td>
								<td><?= $a['waktu_mulai']; ?>-<?= $a['waktu_selesai']; ?></td>
							</tr>
							<tr>
								<td>tempat</td>
								<td>:</td>
								<td><?= $a['tempat_acara']; ?></td>
							</tr>
							<tr>
								<td>pengisi acara</td>
								<td>:</td>
								<td><?= $a['pengisi_acara']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Kembali</button>
				</div>
			</div>
		</div>
	</div>

</main><!-- End #main -->
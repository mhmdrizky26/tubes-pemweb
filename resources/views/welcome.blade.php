@extends('layouts.user')

@section('content')
		<!-- Slider Area -->
		<section id="home" class="slider" data-section="home">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{ asset('bahan-tubes/img/sliderr.jpg') }}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Temukan Peluang <span>Pendidikan & Karirmu</span> di Satu Tempat!</h1>
									<p>Dapatkan informasi terbaru seputar beasiswa, lomba, dan peluang karir. Kami hadir untuk membantumu meraih mimpi dan mencapai potensi terbaik! </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{ asset('bahan-tubes/img/slider.jpg') }}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Temukan Peluang <span>Pendidikan & Karirmu</span> di Satu Tempat!</h1>
									<p>Dapatkan informasi terbaru seputar beasiswa, lomba, dan peluang karir. Kami hadir untuk membantumu meraih mimpi dan mencapai potensi terbaik! </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{ asset('bahan-tubes/img/slider3.jpg') }}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Temukan Peluang <span>Pendidikan & Karirmu</span> di Satu Tempat!</h1>
									<p>Dapatkan informasi terbaru seputar beasiswa, lomba, dan peluang karir. Kami hadir untuk membantumu meraih mimpi dan mencapai potensi terbaik! </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Conatct Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay" data-section="fun-facts">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="fa-solid fa-user-graduate"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Beasiswa</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="fa-solid fa-suitcase"></i>
							<div class="content">
								<span class="counter">557</span>
								<p>Lowongan Kerja</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="fa-solid fa-award"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Lomba</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="fa-solid fa-podcast"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Karir</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->

		<!-- Start service -->
		<section id="service" class="services section" data-section="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kategori</h2>
							<img src="{{ asset('bahan-tubes/img/section-img.png') }}" alt="#">
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($categories as $category)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="fa-solid fa-rectangle-list"></i>
                            <h4><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></h4>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    @endforeach
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa-solid fa-suitcase"></i>
							<h4><a href="kategori/loker.html">Lowongan Kerja</a></h4>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa-solid fa-award"></i>
							<h4><a href="kategori/lomba.html">Lomba</a></h4>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa-solid fa-podcast"></i>
							<h4><a href="kategori/karir.html">Karir</a></h4>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa-duotone fa-solid fa-users"></i>
							<h4><a href="kategori/hmif.html">HMIF</a></h4>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa-solid fa-satellite-dish"></i>
							<h4><a href="kategori/info.html">Kabar Terbaru</a></h4>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->

		<!-- Start Blog Area -->
		<section class="blog section" id="blog" data-section="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Berita</h2>
							<img src="{{ asset('bahan-tubes/img/section-img.png') }}" alt="#">
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 col-12 mb-5">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="{{ $post->image }}" alt="{{ $post->title }}">

                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">{{ $post->created_at}}</div>
                                    <div class="kategori">{{ $post->category->name }}</div>
                                    <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                                    <p class="text">{{ Str::limit($post->slug, 150) }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                    @endforeach

					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset('bahan-tubes/img/blog2.jpeg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">15 Jul, 2020</div>
									<div class="kategori">INFO LOMBA</div>
									<h2><a href="blog-single.html">LOMBA HOLOGY 7.0</a></h2>
									<p class="text">✨️REGISTRATION IS NOW OPEN!🚀
										Udah tahu belum nih informasi yang menarik? Competition HOLOGY 7.0 kembali hadir dalam serangkaian lomba yang challenging dan menarik banget nih!
										Competition HOLOGY 7.0 hadir dengan cabang lomba yang tidak kalah seru dengan tahun-tahun sebelumnya.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset('bahan-tubes/img/blog3.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">05 Jan, 2020</div>
									<div class="kategori">INFO BEASISWA</div>
									<h2><a href="blog-single.html">BEASISWA JFLS</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('bahan-tubes/img/itenas.png') }}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->

@endsection

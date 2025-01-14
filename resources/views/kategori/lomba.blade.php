@extends('layouts.user')

@section('content')

		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Kategori Lomba</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Kategori Lomba</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Start Blog Area -->
		<section class="blog section p-0" id="blog" data-section="blog">
			<div class="container">

                <div class="input-group py-5">
                    <input type="text" class="form-control" name="q"
                        placeholder="   Cari berdasarkan judul berita">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                        </button>
                    </div>
                </div>

				<div class="row pb-5">
					{{-- @foreach($posts as $post)
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
                    @endforeach --}}

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

@endsection

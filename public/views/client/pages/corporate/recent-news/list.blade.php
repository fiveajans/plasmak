@extends('client.layouts.main')

@section('title', 'Güncel Haberler')
@section('description', 'Açıklama.')

@section('styles')
@endsection

@section('content')

	<!-- Content-->
	<div class="content">

		<!-- section-->
		<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
			<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/27.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
			<div class="overlay"></div>
			<div class="pattern-bg"></div>
			<div class="container">
				<div class="section-title">
					<h2>
						<span>Güncel</span>
						<br>
						Haberler
					</h2>
					<p>
						If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
					</p>
					<div class="horizonral-subtitle">
						<span>Keşfet</span>
					</div>
				</div>
				<a href="#sec1" class="custom-scroll-link hero-start-link">
					<span>Kaydır</span>
					<i class="fal fa-long-arrow-down"></i>
				</a>
			</div>
		</section>
		<!-- section end-->

		<div class="single-page-decor"></div>

		<!-- single-page-fixed-row-->
		<div class="single-page-fixed-row blog-single-page-fixed-row">
			<div class="scroll-down-wrap">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
				<span>Aşağı Kaydır</span>
			</div>

			<!-- filter  -->
			<div class="blog-filters">
				<span>Filtrele:</span>

				<!-- filter tag   -->
				<div class="tag-filter blog-btn-filter">
					<div class="blog-btn">
						Etiketler
						<i class="fa fa-tags" aria-hidden="true"></i>
					</div>
					<ul>
						<li>
							<a href="#">
								Gallery
							</a>
						</li>
					</ul>
				</div>
				<!-- filter tag end  -->

				<!-- filter category    -->
				<div class="category-filter blog-btn-filter">
					<div class="blog-btn">
						Kategoriler
						<i class="fa fa-list-ul" aria-hidden="true"></i>
					</div>
					<ul>
						<li>
							<a href="#">
								Gallery
							</a>
						</li>
					</ul>
				</div>
				<!-- filter category end -->

				<div class="blog-search">
					<form action="{{ site_url('kurumsal/guncel-haberler/ara') }}" class="searh-inner fl-wrap">
						<input type="text" name="search" placeholder="Ara" class="search">
						<button type="submit" class="search-submit color-bg">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
			</div>
			<!-- filter end -->

		</div>
		<!-- single-page-fixed-row end-->

		<!-- section --> 
		<section data-scrollax-parent="true" id="sec1">
			<div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" >
				<span>//</span>
				Haberler
			</div>
			<div class="container">

				<!-- blog-container  -->
				<div class="fl-wrap post-container">
					<div class="row">
						<div class="col-md-8">

							<!-- post -->
							<div class="post fl-wrap fw-post">
								<h2>
									<a href="blog-single.html">
										<span>Blog post title</span>
									</a>
								</h2>
								<div class="parallax-header">
									<a href="#">
										27 may 2018
									</a>
									<span>Category:</span>
									<a href="#">
										Branding
									</a>
									<a href="#">
										Video
									</a>
								</div>

								<!-- blog media -->
								<div class="blog-media fl-wrap nomar-bottom">
									<div class="single-slider-wrap slider-carousel-wrap ">
										<div class="single-slider cur_carousel-slider-container fl-wrap">
											<div class="slick-slide-item">
												<img src="{{ asset_url('client/images/folio/2.jpg') }}" alt="">
											</div>
										</div>
									</div>
								</div>
								<!-- blog media end -->

								<div class="parallax-header fl-wrap">
									<span>Etiketler:</span>
									<a href="#">
										Branding
									</a>
									<a href="#">
										Video
									</a>
									<a href="#">
										Design
									</a>
								</div>
								<div class="blog-text fl-wrap">
									<div class="clearfix"></div>
									<h3>
										<a href="blog-single.html">
											Aliquip pertinax <strong>vix ad</strong>
										</a>
									</h3>
									<p>
										Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. Sed viverra dolor sed dolor placerat ornare ut . Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
									</p>
									<a href="blog-single.html" class="btn float-btn color-btn flat-btn">
										Read more
									</a>
									<ul class="post-counter">
										<li>
											<i class="fa fa-eye"></i>
											<span>687</span>
										</li>
										<li>
											<i class="fal fa-comments-alt"></i>
											<span>10</span>
										</li>
									</ul>
								</div>
							</div>
							<!-- post end-->

						</div>

						<!-- blog-sidebar  -->
						<div class="col-md-4">
							<div class="blog-sidebar fl-wrap fixed-bar">

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title">
										<span>01.</span>
										Son Haberler
									</h4>
									<div class="widget-container fl-wrap">
										<div class="widget-posts fl-wrap">
											<ul>
												<li class="clearfix">
													<a href="#" class="widget-posts-img">
														<img src="{{ asset_url('client/images/folio/1.jpg') }}" class="respimg" alt="">
													</a>
													<div class="widget-posts-descr">
														<a href="#" title="">Vivamus dapibus rutrum</a>
														<span class="widget-posts-date"> 21 Mar 09.05 </span> 
													</div>
												</li>
												<li class="clearfix">
													<a href="#" class="widget-posts-img">
														<img src="{{ asset_url('client/images/folio/2.jpg') }}" class="respimg" alt="">
													</a>
													<div class="widget-posts-descr">
														<a href="#" title="">Vivamus dapibus rutrum</a>
														<span class="widget-posts-date"> 21 Mar 09.05 </span> 
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- widget-wrap end  -->

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title"><span>02.</span> Etiketler</h4>
									<div class="widget-container fl-wrap">
										<ul class="tagcloud">
											<li><a href='#' class="transition link">Portfolio</a></li>
											<li><a href='#' class="transition link">Tag</a></li>
											<li><a href='#' class="transition link">Demo</a></li>
											<li><a href='#' class="transition link">Blog</a></li>
											<li><a href='#' class="transition link">Photography</a></li>
											<li><a href='#' class="transition link">Web desighn</a></li>
										</ul>
									</div>
								</div>
								<!-- widget-wrap end  -->  

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title"><span>03.</span> Kategoriler</h4>
									<div class="widget-container fl-wrap">
										<ul class="cat-item">
											<li><a href="#">Standard</a> <span>(3)</span></li>
											<li><a href="#">Video</a> <span>(6) </span></li>
											<li><a href="#">Gallery</a> <span>(12) </span></li>
											<li><a href="#">Quotes</a> <span>(4)</span></li>
										</ul>
									</div>
								</div>
								<!-- widget-wrap end  -->

							</div>
						</div>
						<!-- blog-sidebar end -->

						<div class="limit-box fl-wrap"></div>
					</div>
					<!-- content-nav -->
					<div class="content-nav">
						<ul>
							<li><a href="blog.html" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip">Önceki - Sayfa 1</span></a></li>
							<li>
								<span class="cur-page">
									<span>Sayfa 2</span>
								</span>
							</li>
							<li><a href="blog.html" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip">Sonraki - Sayfa 3</span></a></li>
						</ul>
					</div>
					<!-- content-nav end-->

				</div>
				<!-- blog-container end -->

			</div>
			<div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
			<div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
			<div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
			<div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end-->

		<!-- section-->
		<section class="dark-bg2 small-padding order-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3>Geleceğe yön vermeye hazır mısınız?</h3>
					</div>
					<div class="col-md-4">
						<a href="contscts.html" class="btn flat-btn color-btn">
							Bize Ulaşın
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- section end-->

	</div>
	<!-- Content end -->

@endsection

@section('scripts')
@endsection

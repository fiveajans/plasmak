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

						@foreach ($tags as $tag)

							@foreach (tagsHumanize($tag->tags) as $item)

								<li>
									<a href="{{ site_url('kurumsal/guncel-haberler/etiket/' . $item) }}">
										{{ $item }}
									</a>
								</li>

							@endforeach

						@endforeach

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

						@foreach ($categories as $category)

							<li>
								<a href="{{ site_url('kurumsal/guncel-haberler/kategori/' . $category->slug) }}">
									{{ $category->name }}
								</a>
							</li>

						@endforeach

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
			<div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>
				Haberler
			</div>
			<div class="container">

				<!-- blog-container  -->
				<div class="fl-wrap post-container">
					<div class="row">
						<div class="col-md-8">

							@foreach ($articles as $article)

								<!-- post -->
								<div class="post fl-wrap fw-post">
									<h2>
										<a href="{{ site_url('kurumsal/guncel-haberler/haber/' . $article->slug) }}">
											<span>{{ $article->name }}</span>
										</a>
									</h2>
									<div class="parallax-header">
										<a href="javascript:void(0)">
											{{ timeHumanize($article->created_at) }}
											<!--4 Ağustos 2022-->
										</a>
										<span>Kategori:</span>
										<a href="{{ site_url('kurumsal/guncel-haberler/kategori/' . $article->category_slug) }}">
											{{ $article->category_name }}
										</a>
									</div>

									<!-- blog media -->
									<div class="blog-media fl-wrap mb-15">
										<img src="{{ upload_url('images/cache/articles/800x530/' . $article->image_url) }}" alt="{{ $article->name }}">
									</div>
									<!-- blog media end -->

									<div class="parallax-header fl-wrap">
										<span>Etiketler:</span>

										@foreach (tagsHumanize($article->tags) as $tag)

											<a href="{{ site_url('kurumsal/guncel-haberler/etiket/' . $tag) }}">
												{{ $tag }}
											</a>

										@endforeach

									</div>
									<div class="blog-text fl-wrap">
										<div class="clearfix"></div>
										<h3>
											<a href="{{ site_url('kurumsal/guncel-haberler/haber/' . $article->slug) }}">
												{{ $article->name }}
											</a>
										</h3>
										<p>
											{{ $article->description }}
										</p>
										<a href="{{ site_url('kurumsal/guncel-haberler/haber/' . $article->slug) }}" class="btn float-btn color-btn flat-btn">
											Devamını Oku
										</a>
									</div>
								</div>
								<!-- post end-->

							@endforeach

						</div>

						<!-- blog-sidebar  -->
						<div class="col-md-4">
							<div class="blog-sidebar fl-wrap fixed-bar">

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title">
										<span>01.</span>
										Etiket Bulutu
									</h4>
									<div class="widget-container fl-wrap">
										<ul class="tagcloud">

											@foreach ($tags as $tag)

												@foreach (tagsHumanize($tag->tags) as $item)

													<li>
														<a href="{{ site_url('kurumsal/guncel-haberler/etiket/' . $item) }}">
															{{ $item }}
														</a>
													</li>

												@endforeach

											@endforeach

										</ul>
									</div>
								</div>
								<!-- widget-wrap end  -->

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title">
										<span>02.</span>
										Kategoriler
									</h4>
									<div class="widget-container fl-wrap">
										<ul class="cat-item">

											@foreach ($categories as $category)

												<li>
													<a href="{{ site_url('kurumsal/guncel-haberler/kategori/' . $category->slug) }}">
														{{ $category->name }}
													</a>
													<span>(3)</span>
												</li>

											@endforeach

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
							<li>
								<a href="{{ site_url('kurumsal/guncel-haberler/sayfa/1') }}" class="ln">
									<i class="fal fa-arrow-left"></i>
									<span class="tooltip">Önceki - Sayfa 1</span>
								</a>
							</li>
							<li>
								<span class="cur-page">
									<span>Sayfa 2</span>
								</span>
							</li>
							<li>
								<a href="{{ site_url('kurumsal/guncel-haberler/sayfa/3') }}" class="rn">
									<i class="fal fa-arrow-right"></i>
									<span class="tooltip">Sonraki - Sayfa 3</span>
								</a>
							</li>
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
						<a href="{{ site_url('bize-ulasin') }}" class="btn flat-btn color-btn">
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

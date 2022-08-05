@extends('client.layouts.main')

@section('title', '#PlasmakPerfect')
@section('description', 'Açıklama.')

@section('styles')
@endsection

@section('content')

	<!-- Content-->
	<div class="content">
		<div class="single-page-decor"></div>
		<div class="single-page-fixed-row">
			<div class="scroll-down-wrap">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
				<span>Aşağı Kaydır</span>
			</div>
			<a href="{{ site_url() }}" class="single-page-fixed-row-link">
				<i class="fal fa-arrow-left"></i>
				<span>Anasayfaya Git</span>
			</a>
		</div>
		<!-- section  -->
		<section data-scrollax-parent="true" class="dark-bg">
			<div class="section-subtitle" data-scrollax="properties: { translateY: '150px' }">
				<span>#</span>Perfect
			</div>
			<div class="container">
				<!--parallax-item -->	
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/folio/3.jpg') }}"   alt="">
						</div>
						<div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3>
								<a href="javascript:void(0)">
									PRUDENCE
								</a>
							</h3>
							<h4>
								<span>Koşullar ne olursa olsun her zaman sağduyulu hareket etmek bizim en önemli iş anlayışlarımızdan biridir.</span>
							</h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="65" data-position-top2="-5" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/2.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="80" data-position-top2="50" data-scrollax="properties: { translateY: '-350px' }">
								<video autoplay loop muted  class="bgvid">
									<source src="{{ asset_url('client/video/1.mp4') }}" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<div class="parallax-item-number rg-num">.01</div>
				</div>
				<!--parallax-item end-->	
				<div class="paralax-sec-separator fl-wrap"></div>
				<!--parallax-item -->	
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/folio/7.jpg') }}"   alt="">
						</div>
						<div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3>
								<a href="javascript:void(0)">
									ENGINEERING
								</a>
							</h3>
							<h4>
								<span>Bütün ürünlerimizde bütün bilimi en üst sınırına kadar kullanıyor ve en iyi mühendisliği oluşturuyoruz.</span>
							</h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="0" data-position-top2="0" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/13.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="25" data-position-top2="60" data-scrollax="properties: { translateY: '-50px' }"><img src="{{ asset_url('client/images/folio/14.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number lf-num">02.</div>
				</div>
				<!--parallax-item end--> 	
				<div class="paralax-sec-separator fl-wrap"></div>
				<!--parallax-item -->	
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/folio/25.jpg') }}"   alt="">
						</div>
						<div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3>
								<a href="javascript:void(0)">
									RELIABLE
								</a>
							</h3>
							<h4>
								<span>Bütün ekibimizin dürüst ve güvenilir olması herşeyden önce gelir.</span>
							</h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="65" data-position-top2="0" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/11.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="80" data-position-top2="50" data-scrollax="properties: { translateY: '-350px' }"><img src="{{ asset_url('client/images/folio/8.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number rg-num">.03</div>
				</div>
				<!--parallax-item end-->

				<div class="paralax-sec-separator fl-wrap"></div>

				<!--parallax-item -->	
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/folio/24.jpg') }}"   alt="">
						</div>
						<div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3><a href="javascript:void(0)">FAIR</a></h3>
							<h4><span>Bütün üretim ve satış süreçlerimizde piyasaya zarar vermeyecek uygun ve kaliteli ürünleri üretiyoruz.</span></h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="2" data-position-top2="15" data-scrollax="properties: { translateY: '-50px' }"><img src="{{ asset_url('client/images/folio/6.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="28" data-position-top2="90" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/15.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number lf-num">04.</div>
				</div>
				<!--parallax-item end-->

				<div class="paralax-sec-separator fl-wrap"></div>

				<!--parallax-item -->
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/plasmakperfect/exclusive/1.jpg') }}"   alt="">
						</div>
						<div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3>
								<a href="javascript:void(0)">
									EXCLUSIVE
								</a>
							</h3>
							<h4>
								<span>Üretimimizde Ar-Ge (R&D) çalışmasının yanı sıra her zaman özel ürünler geliştiriyoruz.</span>
							</h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="65" data-position-top2="0" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/plasmakperfect/exclusive/2.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="80" data-position-top2="50" data-scrollax="properties: { translateY: '-350px' }"><img src="{{ asset_url('client/images/plasmakperfect/exclusive/3.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number rg-num">.05</div>
				</div>
				<!--parallax-item end-->

				<div class="paralax-sec-separator fl-wrap"></div>

				<!--parallax-item -->	
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<img  src="{{ asset_url('client/images/folio/24.jpg') }}"   alt="">
						</div>
						<div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3><a href="javascript:void(0)">CONNECT</a></h3>
							<h4><span>Sizlere daha iyi hizmet vermek için geliştirdiğimiz PlasmakConnect uygulamamızla teknolojiye birlikte ortağız.</span></h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="2" data-position-top2="15" data-scrollax="properties: { translateY: '-50px' }"><img src="{{ asset_url('client/images/folio/6.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="28" data-position-top2="90" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/15.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number lf-num">06.</div>
				</div>
				<!--parallax-item end-->

				<!--parallax-item -->
				<div class="parallax-item fl-wrap" data-scrollax-parent="true">
					<div class="row">
						<div class="col-md-7">
							<img src="{{ asset_url('client/images/folio/25.jpg') }}"   alt="">
						</div>
						<div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
							<h3>
								<a href="javascript:void(0)">
									TÜRKİYE
								</a>
							</h3>
							<h4>
								<span>Atmış olduğumuz bütün adımlar; ülkemiz, bu vatanın gençleri ve herşeyden öte daha iyi bir gelecek için.</span>
							</h4>
						</div>
						<div class="album-thumbnails">
							<div data-position-left2="65" data-position-top2="0" data-scrollax="properties: { translateY: '-150px' }"><img src="{{ asset_url('client/images/folio/11.jpg') }}" alt="" class="respimg"></div>
							<div data-position-left2="80" data-position-top2="50" data-scrollax="properties: { translateY: '-350px' }"><img src="{{ asset_url('client/images/folio/8.jpg') }}" alt="" class="respimg"></div>
						</div>
					</div>
					<div class="parallax-item-number rg-num">.07</div>
				</div>
				<!--parallax-item end-->

				<div class="paralax-sec-separator fl-wrap"></div>

			</div>
			<div class="sec-lines"></div>
		</section>

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

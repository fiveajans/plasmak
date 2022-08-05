@extends('client.layouts.main')

@section('title', 'Bize Ulaşın')
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

		<!-- section-->
		<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
			<div class="bg par-elem" data-bg="{{ asset_url('client/video/contact.jpg') }}" data-scrollax="properties: { translateY: '100%' }">
				<video autoplay loop muted class="bgvid" style="object-fit: cover">
					<source src="{{ asset_url('client/video/contact.mp4') }}" type="video/mp4">
				</video>
			</div>
			<!--<div class="overlay"></div>
			<div class="pattern-bg"></div>-->
			<div class="container">
				<div class="section-title">
					<h2>
						Bize <span>Ulaşın</span>
					</h2>
					<p>
						7/24 tarafımıza dilediğiniz zaman ulaşabilirsiniz.
					</p>
					<div class="horizonral-subtitle">
						<span>İletişim</span>
					</div>
				</div>
			</div>
			<a href="#sec1" class="custom-scroll-link hero-start-link">
				<span>Let's Start</span>
				<i class="fal fa-long-arrow-down"></i>
			</a>
		</section>
		<!-- section end-->

		<!-- section -->
		<section data-scrollax-parent="true" id="sec1">
			<div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }">
				Bize Ulaşın
				<span>//</span>
			</div>
			<div class="container">

				<!-- contact details -->
				<div class="fl-wrap mar-bottom">
					<div class="row">
						<div class="col-md-3">
							<div class="pr-title fl-wrap">
								<h3>
									İletişim Detayları
								</h3>
								<span>Sizin için iletişim adreslerimiz.</span>
							</div>
						</div>
						<div class="col-md-9">

							<!-- features-box-container -->
							<div class="features-box-container single-serv fl-wrap">
								<div class="row">

									<!--features-box -->
									<div class="features-box col-md-4">
										<div class="time-line-icon">
											<i class="fal fa-mobile-android"></i>
										</div>
										<h3>01. Telefon</h3>
										<a href="tel:+90 212 671 74 59">+90 212 671 74 59</a>
									</div>
									<!-- features-box end  -->

									<!--features-box -->
									<div class="features-box col-md-4">
										<div class="time-line-icon">
											<i class="fal fa-compass"></i>
										</div>
										<h3>02. Adres</h3>
										<a href="https://goo.gl/maps/N2ha3xAN6FWZmwi36" target="_blank">
											İkitelli OSB Demirciler San. Sit. E-1 Blok No:366 Başakşehir/İstanbul, Türkiye
										</a>
									</div>
									<!-- features-box end  -->

									<!--features-box -->
									<div class="features-box col-md-4">
										<div class="time-line-icon">
											<i class="fal fa-envelope-open"></i>
										</div>
										<h3>03. E-posta</h3>
										<a href="mailto:info@plasmak.com.tr">info@plasmak.com.tr</a>
									</div>
									<!-- features-box end  -->

								</div>
							</div>
							<!-- features-box-container end  -->

						</div>
					</div>
				</div>
				<!-- contact details end  -->

				<div class="fw-map-container fl-wrap mar-bottom">
					<div class="map-container">
						<div id="singleMap" data-latitude="41.0672357" data-longitude="28.8086735" data-mapTitle="Plasmak Harita"></div>
					</div>
				</div>
				<!--  map end  --> 

				<div class="fl-wrap mar-top">
					<div class="row">
						<div class="col-md-3">
							<div class="pr-title fl-wrap">
								<h3>Bize Yazın</h3>
								<span>Formu doldurarak kolaylıkla bize ulaşabilirsiniz.</span>
							</div>
						</div>
						<div class="col-md-7">
							<div id="contact-form">
								<div id="message"></div>
								<form  class="custom-form" action="" name="contactform">
									<fieldset>
										<div class="row">
											<div class="col-md-6">
												<label><i class="fal fa-user"></i></label>
												<input type="text" name="name" id="name" placeholder="Ad Soyad *" value=""/>
											</div>
											<div class="col-md-6">
												<label><i class="fal fa-envelope"></i> </label>
												<input type="text"  name="email" id="email" placeholder="E-posta Adresi *" value=""/>
											</div>
											<div class="col-md-6">
												<label><i class="fal fa-mobile-android"></i> </label>
												<input type="text"  name="phone" id="phone" placeholder="Telefon *" value=""/>
											</div>
											<div class="col-md-6">
												<select name="subject" id="subject" class="chosen-select sel-dec">
													<option selected disabled>
														Konu
													</option>
													<option value="Üretim">
														Üretim
													</option>
													<option value="Satış">
														Satış
													</option>
													<option value="Muhasebe">
														Muhasebe
													</option>
													<option value="Destek">
														Destek
													</option>
													<option value="PlasmakConnect">
														PlasmakConnect
													</option>
												</select>
											</div>
										</div>
										<textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Mesajınız:"></textarea>
										<div class="verify-wrap">
											<span class="verify-text">Robot değil misiniz? Türkiye'nin başkenti neresi?</span> 
											<select name="verify" id="verify" class="chosen-select">
												<option selected disabled>
													Şehir Seç
												</option>
												<option value="Ankara">
													Ankara
												</option>
												<option value="İstanbul">
													İstanbul
												</option>
												<option value="Samsun">
													Samsun
												</option>
												<option value="İzmir">
													İzmir
												</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<button type="submit" class="btn float-btn flat-btn color-btn">
											Gönder
										</button>
									</fieldset>
								</form>
							</div>
							<!-- contact form  end--> 

						</div>
					</div>
				</div>
			</div>
			<div class="bg-parallax-module" data-position-top="70"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
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
						<h3>
							Bize Sosyal Ağ Üzerinden Ulaşabilirsiniz:
						</h3>
					</div>
					<div class="col-md-4">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- section end-->

	</div>
	<!-- Content end -->

@endsection

@section('scripts')

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>
	<script type="text/javascript" src="{{ asset_url('client/js/map.js') }}"></script>

@endsection

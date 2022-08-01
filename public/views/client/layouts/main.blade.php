<!DOCTYPE HTML>
<html lang="tr">
<head>
	<!--=============== basic  ===============-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Plasmak - @yield('title')</title>
	<meta name="description" content="@yield('description')">

	<meta name="robots" content="noindex, nofollow">

	<!--=============== favicons ===============-->
	<link rel="shortcut icon" href="{{ asset_url('client/images/favicon.ico') }}">

	<!--=============== css  ===============-->
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/reset.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/plugins.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/style.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/color.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/custom.css') }}">

	@yield('styles')
</head>
<body>

	<!-- loader -->
	<div class="loader-wrap">
		<div class="pin"></div>
	</div>
	<!-- loader end -->

	<!-- Main -->
	<div id="main">

		<!-- header -->
		<header class="main-header">
			<a href="{{ site_url() }}" class="logo-holder">
				<img src="{{ asset_url('client/images/logo.svg') }}" alt="Plasmak">
			</a>

			<!-- nav-button-wrap -->
			<div class="nav-button but-hol">
				<span  class="nos"></span>
				<span class="ncs"></span>
				<span class="nbs"></span>
				<div class="menu-button-text">
					Menü
				</div>
			</div>
			<!-- nav-button-wrap end -->

			<div class="header-social">
				<ul >
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-vk"></i>
						</a>
					</li>
				</ul>
			</div>

			<!-- showshare -->
			<div class="show-share showshare">
				<i class="fal fa-globe"></i>
				<span>Dil</span>
			</div>
			<!-- showshare end -->

		</header>
		<!-- header end -->

		<!-- navigation bar -->
		<div class="nav-overlay">
			<div class="tooltip color-bg">
				Menüyü Kapat
			</div>
		</div>
		<div class="nav-holder">
			<a href="{{ site_url() }}" class="header-logo">
				<img src="{{ asset_url('client/images/logo2.svg') }}" alt="Plasmak">
			</a>
			<div class="nav-title">
				<span>Menü</span>
			</div>
			<div class="nav-inner-wrap">
				<nav class="nav-inner sound-nav" id="menu">
					<ul>
						<li>
							<a href="#" class="{{ segments(0) == 'plasmak-dunyasi' ? 'act-link' : null }}">
								Plasmak Dünyası
							</a>
							<ul>
								<li>
									<a href="{{ site_url('plasmak-dunyasi/kisaca-plasmak') }}" class="{{ segments(0) == 'plasmak-dunyasi' && segments(1) == 'kisaca-plasmak' ? 'act-link' : null }}">
										Kısaca Plasmak
									</a>
								</li>
								<li>
									<a href="{{ site_url('plasmak-dunyasi/yonetim-kurulu') }}" class="{{ segments(0) == 'plasmak-dunyasi' && segments(1) == 'yonetim-kurulu' ? 'act-link' : null }}">
										Yönetim Kurulu
									</a>
								</li>
								<li>
									<a href="{{ site_url('plasmak-dunyasi/plasmak-destek') }}" class="{{ segments(0) == 'plasmak-dunyasi' && segments(1) == 'plasmak-destek' ? 'act-link' : null }}">
										#PlasmakDestek
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="{{ segments(0) == 'yetkinliklerimiz' ? 'act-link' : null }}">
								Yetkinliklerimiz
							</a>
							<ul>
								<li>
									<a href="{{ site_url('yetkinliklerimiz/uretim') }}" class="{{ segments(0) == 'yetkinliklerimiz' && segments(1) == 'uretim' ? 'act-link' : null }}">
										Üretim
									</a>
								</li>
								<li>
									<a href="{{ site_url('yetkinliklerimiz/ar-ge') }}" class="{{ segments(0) == 'yetkinliklerimiz' && segments(1) == 'ar-ge' ? 'act-link' : null }}">
										Ar-Ge (R&D)
									</a>
								</li>
								<li>
									<a href="{{ site_url('yetkinliklerimiz/teknoloji') }}" class="{{ segments(0) == 'yetkinliklerimiz' && segments(1) == 'teknoloji' ? 'act-link' : null }}">
										Teknoloji
									</a>
								</li>
								<li>
									<a href="{{ site_url('yetkinliklerimiz/kalite') }}" class="{{ segments(0) == 'yetkinliklerimiz' && segments(1) == 'kalite' ? 'act-link' : null }}">
										Kalite
									</a>
								</li>
								<li>
									<a href="{{ site_url('yetkinliklerimiz/dagitim') }}" class="{{ segments(0) == 'yetkinliklerimiz' && segments(1) == 'dagitim' ? 'act-link' : null }}">
										Dağıtım
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="{{ segments(0) == 'urunlerimiz' ? 'act-link' : null }}">
								Ürünlerimiz
							</a>
							<ul>
								<li>
									<a href="{{ site_url('urunlerimiz/urun-grubuna-gore-ara') }}" class="{{ segments(0) == 'urunlerimiz' && segments(1) == 'urun-grubuna-gore-ara' ? 'act-link' : null }}">
										Ürün Grubuna Göre Ara
									</a>
								</li>
								<li>
									<a href="{{ site_url('urunlerimiz/arac-markasina-gore-ara') }}" class="{{ segments(0) == 'urunlerimiz' && segments(1) == 'arac-markasina-gore-ara' ? 'act-link' : null }}">
										Araç Markasına Göre Ara
									</a>
								</li>
								<li>
									<a href="{{ site_url('urunlerimiz/arac-tipine-gore-ara') }}" class="{{ segments(0) == 'urunlerimiz' && segments(1) == 'arac-tipine-gore-ara' ? 'act-link' : null }}">
										Araç Tipine Göre Ara
									</a>
								</li>
								<li>
									<a href="{{ site_url('urunlerimiz/kataloglar') }}" class="{{ segments(0) == 'urunlerimiz' && segments(1) == 'kataloglar' ? 'act-link' : null }}">
										Kataloglar
									</a>
								</li>
								<li>
									<a href="{{ site_url('urunlerimiz/plasmak-showroom') }}" class="{{ segments(0) == 'urunlerimiz' && segments(1) == 'plasmak-showroom' ? 'act-link' : null }}">
										Plasmak Showroom
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="{{ segments(0) == 'kurumsal' ? 'act-link' : null }}">
								Kurumsal
							</a>
							<ul>
								<li>
									<a href="{{ site_url('kurumsal/guncel-haberler') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'guncel-haberler' ? 'act-link' : null }}">
										Güncel Haberler
									</a>
								</li>
								<li>
									<a href="{{ site_url('kurumsal/kariyer') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'kariyer' ? 'act-link' : null }}">
										Kariyer
									</a>
								</li>
								<li>
									<a href="{{ site_url('kurumsal/etkinlikler') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'etkinlikler' ? 'act-link' : null }}">
										Etkinlikler
									</a>
								</li>
								<li>
									<a href="{{ site_url('kurumsal/plasmak-connect') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'plasmak-connect' ? 'act-link' : null }}">
										Plasmak Connect
									</a>
								</li>
								<li>
									<a href="{{ site_url('kurumsal/politikalarimiz') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'politikalarimiz' ? 'act-link' : null }}">
										Politikalarımız
									</a>
								</li>
								<li>
									<a href="{{ site_url('kurumsal/kisisel-verilerin-korunmasi') }}" class="{{ segments(0) == 'kurumsal' && segments(1) == 'kisisel-verilerin-korunmasi' ? 'act-link' : null }}">
										Kişisel Verilerin Korunması
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="{{ segments(0) == 'iletisim' ? 'act-link' : null }}">
								Bize Ulaşın
							</a>
							<ul>
								<li>
									<a href="{{ site_url('iletisim/temsilciniz') }}" class="{{ segments(0) == 'iletisim' && segments(1) == 'temsilciniz' ? 'act-link' : null }}">
										Temsilciniz
									</a>
								</li>
								<li>
									<a href="{{ site_url('iletisim/onemli-adresler') }}" class="{{ segments(0) == 'iletisim' && segments(1) == 'onemli-adresler' ? 'act-link' : null }}">
										Önemli Adresler
									</a>
								</li>
								<li>
									<a href="{{ site_url('iletisim/ticari-sicil-bilgileri') }}" class="{{ segments(0) == 'iletisim' && segments(1) == 'ticari-sicil-bilgileri' ? 'act-link' : null }}">
										Ticari Sicil Bilgileri
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!--  navigation bar end -->

		<!-- wrapper -->
		<div id="wrapper" class="{{ segments(0) ? 'single-page-wrap' : null }}">

			@yield('content')

			<!-- footer -->
			<div class="height-emulator fl-wrap"></div>
			<footer class="main-footer fixed-footer">

				<!-- footer-inner -->
				<div class="footer-inner fl-wrap">
					<div class="container">
						<div class="partcile-dec" data-parcount="90"></div>
						<div class="row">
							<div class="col-md-2">
								<div class="footer-title fl-wrap">
									<span>Keşfet</span>
								</div>
							</div>
							<div class="col-md-5">
								<div class="footer-header fl-wrap">
									<span>01.</span>
									Son Haberler
								</div>
								<div class="footer-box fl-wrap">
									<div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
									<a href="{{ site_url('') }}" class="btn float-btn trsp-btn">
										Daha Fazlası
									</a>
								</div>
							</div>
							<div class="col-md-5">
								<div class="footer-header fl-wrap">
									<span>02.</span>
									Anlık E-Bülten / İletişim
								</div>

								<!-- footer-box -->
								<div class="footer-box fl-wrap">
									<p>
										Sizlere gereksiz e-posta göndermeyeceğimizin sözünü veriyoruz. E-posta kaydını gerçekleştirmeniz halinde işinize yarayacak bilgileri ve kampanyaları anlık olarak sizinle paylaşıyor olacağız.
									</p>
									<div class="subcribe-form fl-wrap">
										<form class="fl-wrap" id="subscribe">
											<input type="text" name="email" placeholder="E-posta adresinizi giriniz" class="enteremail" id="subscribe-email" spellcheck="false">
											<button type="submit" class="subscribe-button" id="subscribe-button">
												<i class="fal fa-paper-plane"></i>
												Gönder
											</button>
											<label for="subscribe-email" class="subscribe-message"></label>
										</form>
									</div>

									<!-- footer-contacts -->
									<div class="footer-contacts fl-wrap">
										<ul>
											<li>
												<i class="fal fa-phone"></i>
												<span>Telefon & Fax:</span>
												<a href="#">
													+90 212 671 74 59
												</a>
											</li>
											<li>
												<i class="fal fa-envelope"></i>
												<span>E-posta:</span>
												<a href="#">
													info@plasmak.com.tr
												</a>
											</li>
											<li>
												<i class="fal fa-map-marker"></i>
												<span>Adres:</span>
												<a href="#">
													İkitelli OSB Demirciler San. Sit. E-1 Blok No:366
													<br>
													Başakşehir/İstanbul, Türkiye
												</a>
											</li>
										</ul>
									</div>
									<!-- footer end -->

									<!-- footer-socilal -->
									<div class="footer-socilal fl-wrap">
										<ul >
											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-instagram"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-vk"></i>
												</a>
											</li>
										</ul>
									</div>
									<!-- footer-socilal end -->

								</div>
								<!-- footer-box end -->

							</div>
						</div>
					</div>
				</div>
				<!-- footer-inner end -->

				<!--subfooter-->
				<div class="subfooter fl-wrap">
					<div class="container">

						<!-- policy-box -->
						<div class="policy-box">
							<span>&copy; Plasmak {{ date('Y') }} / Tüm hakları saklıdır. Created by <a href="https://www.fiveajans.com" target="_blank" style="color: #fff; font-weight: bold">FIVE</a></span>
						</div>
						<!-- policy-box end -->

						<a href="#" class="to-top color-bg">
							<i class="fal fa-angle-up"></i>
							<span></span>
						</a>
					</div>
				</div>
				<!-- subfooter end -->


			</footer>
			<!-- footer end -->

			<!-- contact-btn -->
			<a href="{{ site_url('plasmakconnect') }}" class="contact-btn color-bg">
				<i class="fal fa-external-link"></i>
				<span>PlasmakConnect</span>
			</a>
			<!-- contact-btn end -->

		</div>
		<!-- content end -->

		<!-- share-wrapper -->
		<div class="share-wrapper isShare">
			<div class="share-title">
				<span>Dil</span>
			</div>
			<div class="close-share soa">
				<span>Kapat</span>
				<i class="fal fa-times"></i>
			</div>
			<div class="share-inner soa">
				<div class="language-container">
					<a href="https://en.plasmak.com.tr" class="language-text">
						ENGLISH
					</a>
					<a href="https://de.plasmak.com.tr" class="language-text">
						DEUTSCH
					</a>
					<a href="https://ru.plasmak.com.tr" class="language-text">
						Русский
					</a>
				</div>
			</div>
		</div>
		<!-- share-wrapper end -->

	</div>
	<!-- Main end -->

	<!--=============== scripts  ===============-->
	<script type="text/javascript" src="{{ asset_url('client/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset_url('client/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset_url('client/js/scripts.js') }}"></script>

	@yield('scripts')
</body>
</html>

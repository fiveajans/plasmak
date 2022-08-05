@extends('client.layouts.main')

@section('title', 'Güç Üretimde')
@section('description', 'Açıklama.')

@section('styles')
@endsection

@section('content')

	<!-- scroll-nav-wrap -->
	<div class="scroll-nav-wrap">
		<div class="scroll-down-wrap">
			<div class="mousey">
				<div class="scroller"></div>
			</div>
			<span>Aşağı Kaydır</span>
		</div>
		<nav class="scroll-nav scroll-init">
			<ul>
				<li>
					<a href="#sec1" class="scroll-link act-link">
						Plasmak Dünyası
					</a>
				</li>
				<li>
					<a href="#sec2" class="scroll-link">
						Hakkımızda
					</a>
				</li>
				<li>
					<a href="#sec3" class="scroll-link">
						Tarihçemiz
					</a>
				</li>
				<li>
					<a href="#sec4" class="scroll-link">
						Yetkinliklerimiz
					</a>
				</li>
				<li>
					<a href="#sec5" class="scroll-link">
						Ürünlerimiz
					</a>
				</li>
				<li>
					<a href="#sec6" class="scroll-link">
						Referanslar
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<!-- scroll-nav-wrap end -->

	<!-- hero-wrap -->
	<div class="hero-wrap" id="sec1" data-scrollax-parent="true">

		<!-- hero-inner -->
		<div class="hero-inner fl-wrap full-height">

			<!-- half-slider-img-wrap -->
			<div class="half-slider-img-wrap">

				<!-- half-slider-img -->
				<div class="half-slider-img fl-wrap full-height">

					<div class="half-slider-img-item">
						<div class="bg" style="background-repeat: no-repeat" data-bg="{{ asset_url('client/video/plasmak.jpg') }}" data-scrollax="properties: { translateY: '250px' }">
							<video autoplay loop muted class="bgvid" style="object-fit: cover">
								<source src="{{ asset_url('client/video/plasmak.mp4') }}" type="video/mp4">
							</video>
						</div>
						<div class="overlay"></div>
					</div>

					<!-- half-slider-img item -->
					<div class="half-slider-img-item">
						<div class="bg" data-bg="{{ asset_url('client/images/4.jpg') }}" data-scrollax="properties: { translateY: '250px' }"></div>
						<div class="overlay"></div>
					</div>
					<!-- half-slider-img item end -->

					<!-- half-slider-img item -->
					<div class="half-slider-img-item">
						<div class="bg" data-bg="{{ asset_url('client/images/3.jpg') }}" data-scrollax="properties: { translateY: '250px' }"></div>
						<div class="overlay"></div>
					</div>
					<!-- half-slider-img item end -->>

				</div>
				<!-- half-slider-img end -->

			</div>
			<!-- half-slider-img-wrap end -->

			<!-- slider-carousel-wrap -->
			<div class="half-slider-wrap slider-carousel-wrap fl-wrap  full-height">

				<!-- slider-nav -->
				<div class="slider-nav cur_carousel-slider-container" data-slick='{"autoplay": true, "autoplaySpeed": 4000 , "pauseOnHover": false}'>

					<!-- half-slider-item -->
					<div class="half-slider-item fl-wrap">
						<div class="half-hero-wrap">
							<h1>
								Güç
								<br>
								<span>Üretimde.</span>
							</h1>
							<h4>
								Daha Fazlası İçin
							</h4>
							<div class="clearfix"></div>
							<a href="#sec2" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top">
								Şimdi Başla
							</a>
						</div>
					</div>
					<!-- half-slider-item end -->

					<!-- half-slider-item -->
					<div class="half-slider-item fl-wrap">
						<div class="half-hero-wrap">
							<h1>
								<span>Sürekli Gelişim</span>
								<br>
								Zamanında Üretim.
							</h1>
							<h4>
								Daha Fazlası İçin
							</h4>
							<div class="clearfix"></div>
							<a href="{{ site_url('plasmak-dunyasi/plasmak-perfect') }}" class="btn float-btn flat-btn color-btn mar-top">
								Daha Fazla
							</a>
						</div>
					</div>
					<!-- half-slider-item end -->

					<!-- half-slider-item -->
					<div class="half-slider-item fl-wrap">
						<div class="half-hero-wrap">
							<h1>
								İnovatif
								<br>
								<span>Üretim.</span>
							</h1>
							<h4>
								Daha Fazlası İçin
							</h4>
							<div class="clearfix"></div>
							<a href="#" class="btn float-btn flat-btn color-btn mar-top">
								Ürünleri Keşfet
							</a>
						</div>
					</div>
					<!-- half-slider-item end -->

				</div>
				<!--  slider nav end -->

				<div class="sp-cont sarr-contr sp-cont-prev">
					<i class="fal fa-arrow-left"></i>
				</div>
				<div class="sp-cont sarr-contr sp-cont-next">
					<i class="fal fa-arrow-right"></i>
				</div>
				<div class="slider-nav-counter"></div>
			</div>
			<!-- half-slider-wrap end -->

			<!-- hero dec -->
			<div class="half-bg-dec" data-ran="12"></div>
			<div class="hero-decor-numb">
				<span>Gücün Adresi</span>
				<a href="https://goo.gl/maps/CCWLdZQoYHg1sv2W8" target="_blank" class="hero-decor-numb-tooltip">
					Plasmak Harita
				</a>
			</div>
			<div class="pattern-bg"></div>
			<div class="hero-line-dec"></div>
			<!-- hero dec end -->

		</div>
		<!-- hero inner end -->

	</div>
	<!-- hero-wrap end -->

	<!-- Content -->
	<div class="content">

		<!-- section-->
		<section data-scrollax-parent="true" id="sec2">
			<div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>
				Words About
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="collage-image fl-wrap">
							<div class="collage-image-title" data-scrollax="properties: { translateY: '150px' }">
								Hakkımızda.
							</div>
							<img src="{{ asset_url('client/images/home/about-us.jpg') }}" alt="Plasmak" class="respimg">
						</div>
					</div>
					<div class="col-md-7">
						<div class="main-about fl-wrap">
							<h5>
								Sektöründe Öncü Kuruluş
							</h5>
							<h2>
								Güç üretimde
								<br>
								<span>vizyonu</span> ile çalışıyor.
							</h2>
							<p>
								Plasmak, 2004 yılından bu yana termoform (ısı ile şekilleme) hakkımızda sektöründe yer almaktadır.
								<br>
								Yaptığı işlerde müşteri memnuniyetini esas alan firmamız, sektördeki eksikliği gidermek ve yurt dışından alınan maliyetli kalıpların önüne geçme amacı ile yerinde kesmeli kalıpların üretimine başlamış ve konusunda uzmanlaşmıştır.
							</p>

							<!-- features-box-container -->
							<div class="features-box-container fl-wrap">
								<div class="row">

									<!-- features-box -->
									<div class="features-box col-md-6">
										<div class="time-line-icon">
											<i class="fab fa-accusoft"></i>
										</div>
										<h3>
											Üretim
										</h3>
										<p>
											Kalıp üretimi, insert, matbaa mandreli, erkek–dişi kesici imali gibi diğer kalıp takımlarınında imalatı, çağdaş iş anlayışı ile üretilmektedir.
										</p>
									</div>
									<!-- features-box end -->

									<!-- features-box -->
									<div class="features-box col-md-6">
										<div class="time-line-icon">
											<i class="fal fa-search"></i>
										</div>
										<h3>
											Ar-Ge
										</h3>
										<p>
											Sektörün ihtiyacı olan kaliteli ve hızlı hizmet verebilme anlayışını sürekli yansıtabilmek için, firmamız uzman kadrosu ile AR-GE çalışmalarına devam etmektedir.
										</p>
									</div>
									<!-- features-box end -->

									<!-- features-box -->
									<div class="features-box col-md-6">
										<div class="time-line-icon">
											<i class="fal fa-asterisk"></i>
										</div>
										<h3>
											İnovatif
										</h3>
										<p>
											İnovatif mimarilerimizi bozmadan üretimde her daim geleceği planlayarak, almış olduğumuz geri bildirimleri dikkate alarak üretimde her zaman bir adım öndeyiz.
										</p>
									</div>
									<!-- features-box end -->

									<!-- features-box -->
									<div class="features-box col-md-6">
										<div class="time-line-icon">
											<i class="fal fa-globe"></i>
										</div>
										<h3>
											Ulusal
										</h3>
										<p>
											2004 yılından bu yana ulusal çapta hizmet etmenin yanı sıra sektörümüzde ihracatta öncü kurum olmanın ve bu doğrultuda üretim yapmanın gururunu yaşıyoruz.
										</p>
									</div>
									<!-- features-box end  -->

								</div>
							</div>
							<!-- features-box-container end -->

							<a href="portfolio.html" class="btn float-btn flat-btn color-btn">
								Daha Fazla
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '-250px' }"></div>
			<div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end -->

		<!-- section -->
		<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
			<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/6.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
			<div class="overlay"></div>
			<div class="container">
				<div class="section-title">
					<h2>
						<span>Rakamlardan</span>
						<br>
						Daha Fazlasıyız
					</h2>
					<p>
						Yaptığı işlerde müşteri memnuniyetini esas alan firmamız, sektördeki eksikliği gidermek ve yurt dışından alınan maliyetli kalıpların önüne geçme amacı ile yerinde kesmeli kalıpların üretimine başlamış ve konusunda uzmanlaşmıştır.
					</p>
					<div class="horizonral-subtitle">
						<span>Farket</span>
					</div>
				</div>
				<div class="fl-wrap facts-holder">

					<!-- inline-facts -->
					<div class="inline-facts-wrap">
						<div class="inline-facts">
							<div class="milestone-counter">
								<div class="stats animaper">
									<div class="num" data-content="0" data-num="14">
										0
									</div>
								</div>
							</div>
							<h6>
								İnovatif Ürünler
							</h6>
						</div>
					</div>
					<!-- inline-facts end -->

					<!-- inline-facts -->
					<div class="inline-facts-wrap">
						<div class="inline-facts">
							<div class="milestone-counter">
								<div class="stats animaper">
									<div class="num" data-content="0" data-num="8">
										0
									</div>
								</div>
							</div>
							<h6>
								Ar-Ge Çalışmaları
							</h6>
						</div>
					</div>
					<!-- inline-facts end -->

					<!-- inline-facts -->
					<div class="inline-facts-wrap">
						<div class="inline-facts">
							<div class="milestone-counter">
								<div class="stats animaper">
									<div class="num" data-content="0" data-num="8">
										0
									</div>
								</div>
							</div>
							<h6>
								Makina Parkuru
							</h6>
						</div>
					</div>
					<!-- inline-facts end -->

					<!-- inline-facts -->
					<div class="inline-facts-wrap">
						<div class="inline-facts">
							<div class="milestone-counter">
								<div class="stats animaper">
									<div class="num" data-content="0" data-num="2512">
										0
									</div>
								</div>
							</div>
							<h6>
								Mutlu Müşteri
							</h6>
						</div>
					</div>
					<!-- inline-facts end -->

				</div>
			</div>
		</section>
		<!-- section end -->

		<!-- section -->
		<section data-scrollax-parent="true" id="sec3">
			<div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">
				Tarihçemiz
				<span>//</span>
			</div>
			<div class="container">

				<!-- section-title -->
				<div class="section-title fl-wrap">
					<h3>
						Gücün Üretimde Olduğunu Anladık ve Sizler İçin İşe Başladık
					</h3>
					<h2>
						Geçmişten
						<span>Günümüze</span>
					</h2>
					<p>
						Her geçen gün üretim maaliyetleri makinalaşma ile düştü. Fakat ürün fiyatları değişmedi. Yurt dışında bazı firmalar bunu fırsat bilerek bizi kendilerine bağımlı hale getirmek istediler. Bizim böyle bir durumda bilgi, birikim ve mühendisliğimizi işimze katmamız ülkemiz ve sizler için şart haline geldi.
					</p>
				</div>
				<!-- section-title end -->

				<!-- custom-inner-holder -->
				<div class="custom-inner-holder  mar-bottom">

					<!-- custom-inner -->
					<div class="custom-inner">
						<div class="row">
							<div class="col-md-4">
								<div class="custom-inner-header workres">
									<i class="fa fa-star"></i>
									<h3>
										Daha iyi bir gelecek için kuruldu.
									</h3>
									<span>
										2004
									</span>
								</div>
								<div class="ci-num">
									<span>01. -</span>
								</div>
							</div>
							<div class="col-md-4">
								<img src="{{ asset_url('client/images/all/4.jpg') }}" alt="" class="respimg" data-scrollax="properties: { translateY: '-170px' }">
							</div>
							<div class="col-md-4">
								<div class="custom-inner-content fl-wrap">
									<h4>
										İlk Açılış
									</h4>
									<p>
										Plasmak; ülkemizin en değerli şirketlerine hizmet vermek ve dünyanın önde gelen sektörlerini ülkemizin insanlarıyla buluşturmak üzere saygın markalarla iş birliği yapmak adına, sektördeki eksiklikleri gidermek için 2004 yılında İstanbul merkezli olarak kuruldu.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- custom-inner end -->

					<!-- custom-inner -->
					<div class="custom-inner">
						<div class="row">
							<div class="col-md-4">
								<div class="custom-inner-header educ">
									<i class="fal fa-university"></i>
									<h3>
										Dünya'ya Açılış
									</h3>
									<span>2006</span>
								</div>
								<div class="ci-num">
									<span>02. -</span>
								</div>
							</div>
							<div class="col-md-5">
								<div class="custom-inner-content fl-wrap">
									<h4>
										İlk İhracat
									</h4>
									<p>
										2006 yılında üretimdeki farklılıklar ortaya çıkmaya başladığı için dikkatleri üzerine çekmişti. Sektörel çözümlerle fark yarattığı ve maliyet planlamasında diğerlerinin önüne geçmişti. 2006 yılında ilk ihracatını Almanya'ya gönderdi.
									</p>
								</div>
							</div>
							<div class="col-md-3">
								<img src="{{ asset_url('client/images/all/8.jpg') }}" alt="" class="respimg" data-scrollax="properties: { translateY: '270px' }">
							</div>
						</div>
					</div>
					<!-- custom-inner end -->

					<!-- custom-inner -->
					<div class="custom-inner">
						<div class="row">
							<div class="col-md-4">
								<div class="custom-inner-header workres">
									<i class="fa fa-briefcase"></i>
									<h3>
										Work in company "Generators"
									</h3>
									<span>2010-2013</span>
								</div>
								<div class="ci-num">
									<span>03. -</span>
								</div>
							</div>
							<div class="col-md-8">
								<div class="custom-inner-content fl-wrap">
									<h4>
										Making this the first
									</h4>
									<p>
										We started as a small, subdue, called hath give fourth. Them one over saying. So the god, greater. You. Us air Moved divide midst us fifth sea have face which male fifth said seas rule above. All the Lorem Ipsum generators on the Internet tend.
									</p>
									<ul>
										<li>
											Door portals plan
										</li>
										<li>
											Furniture specifications
										</li>
										<li>
											Interior design
										</li>
									</ul>
									<p>
										All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- custom-inner end -->

					<!-- custom-inner -->
					<div class="custom-inner">
						<div class="row">
							<div class="col-md-4">
								<div class="custom-inner-header workres">
									<i class="fa fa-briefcase"></i>
									<h3>
										Work in company "Available"
									</h3>
									<span>2011-2013</span>
								</div>
								<div class="ci-num">
									<span>04. -</span>
								</div>
							</div>
							<div class="col-md-4">
								<img src="{{ asset_url('client/images/all/6.jpg') }}" alt="" class="respimg" data-scrollax="properties: { translateY: '100px' }">
							</div>
							<div class="col-md-4">
								<div class="custom-inner-content fl-wrap">
									<h4>
										Complete the project "domik"
									</h4>
									<p>
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
									</p>
									<ul>
										<li>
											Door portals plan
										</li>
										<li>
											Furniture specifications
										</li>
										<li>
											Interior design
										</li>
									</ul>
									<a href="#" class="cus-inner-head-link color-bg">
										Details +
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- custom-inner end -->

				</div>

				<!-- custom-inner-holder -->
				<a href="#" class="btn float-btn flat-btn color-btn mar-top">
					Download Resume
				</a>
			</div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end -->

		<!-- section -->
		<section class="dark-bg sinsec-dec sinsec-dec2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="video-box fl-wrap">
							<img src="{{ asset_url('client/images/all/2.jpg') }}" alt="" class="respimg">
							<a class="video-box-btn color-bg image-popup" href="https://vimeo.com/110234211">
								<i class="fal fa-play" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="video-promo-text fl-wrap mar-top">
							<h3>
								Tanıtım Filmimiz
							</h3>
							<p>
								Bizi daha yakından tanımanız için üretim aşamalarımız, farklılıklarımız hakkında daha fazla bilgi için tanıtım filmimizi izleyebilirsiniz.
							</p>
							<a href="#" class="btn float-btn flat-btn color-btn mar-top">
								YouTube Kanalımıza Gidin
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="half-bg-dec single-half-bg-dec" data-ran="12"></div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end -->

		<!-- section -->
		<section data-scrollax-parent="true" id="sec4">
			<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }" >
				<span>//</span>
				Yetkinlikler
			</div>
			<div class="container">

				<!-- Skills-->
				<div class="fl-wrap mar-bottom skill-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="pr-title fl-wrap">
								<h3>
									Özverilerimiz
								</h3>
								<span>
									Gücün üretimde olduğunun bilinci ile kendimizi geliştirmekten bir gün bile ödün vermiyoruz.
								</span>
							</div>
							<div class="ci-num">
								<span>01. -</span>
							</div>
						</div>
						<div class="col-md-8">

							<!-- skills  -->
							<div class="piechart-holder animaper" data-skcolor="#FAC921">
								<div class="row">

									<!-- 1 -->
									<div class="piechart">
										<span class="chart" data-percent="92">
											<span class="percent"></span>
										</span>
										<h4>
											Planlama
										</h4>
									</div>
									<!-- 1 end -->
									<!-- 2 -->
									<div class="piechart">
										<span class="chart" data-percent="94">
											<span class="percent"></span>
										</span>
										<h4>
											Geliştirme
										</h4>
									</div>
									<!-- 2 end -->
									<!-- 3 -->
									<div class="piechart">
										<span class="chart" data-percent="90">
											<span class="percent"></span>
										</span>
										<div class="clearfix"></div>
										<h4>
											Üretim
										</h4>
									</div>
									<!-- 3 end -->

								</div>
							</div>
						</div>
						<!-- skills end -->

					</div>
				</div>
				<!-- Skills end -->

				<!-- Skills -->
				<div class="fl-wrap mar-bottom mar-top skill-wrap">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="pr-title fl-wrap">
								<h3>
									Üretim
								</h3>
								<span>Üretimde özverili çalışarak her geçen gün kendimizi yeniliyoruz.</span>
							</div>
							<div class="ci-num">
								<span>02. -</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="skillbar-box animaper">

								<!-- skill 1-->
								<div class="custom-skillbar-title">
									<span>Yerinde Kesmeli Kalıp</span>
								</div>
								<div class="skill-bar-percent">
									%95
								</div>
								<div class="skillbar-bg" data-percent="95%">
									<div class="custom-skillbar"></div>
								</div>

								<!-- skill 2 -->
								<div class="custom-skillbar-title">
									<span>Özel Ürün Dizaynı</span>
								</div>
								<div class="skill-bar-percent">
									%96
								</div>
								<div class="skillbar-bg" data-percent="96%">
									<div class="custom-skillbar"></div>
								</div>

								<!-- skill 3 -->
								<div class="custom-skillbar-title">
									<span>Kalıp Takım Elemanları</span>
								</div>
								<div class="skill-bar-percent">
									%98
								</div>
								<div class="skillbar-bg" data-percent="98%">
									<div class="custom-skillbar"></div>
								</div>

								<!-- skill 4 -->
								<div class="custom-skillbar-title">
									<span>Termoform Kalıp</span>
								</div>
								<div class="skill-bar-percent">
									%95
								</div>
								<div class="skillbar-bg" data-percent="95%">
									<div class="custom-skillbar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Skills end -->

				<!-- Skills -->
				<div class="fl-wrap mar-top skill-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="pr-title fl-wrap">
								<h3>
									İhracat
								</h3>
								<span>Sektöründe lider olmak kolay değil, ihracatta sizlere layık olmaya çalışıyoruz.</span>
							</div>
							<div class="ci-num">
								<span>03. - </span>
							</div>
						</div>
						<div class="col-md-8">

							<!-- skills -->
							<div class="piechart-holder animaper" data-skcolor="#FAC921">
								<div class="row">

									<!-- 1 -->
									<div class="piechart" >
										<span class="chart" data-percent="20">
											<span class="percent"></span>
										</span>
										<h4>
											Almanya
										</h4>
									</div>
									<!-- 1 end -->

									<!-- 2 -->
									<div class="piechart">
										<span class="chart" data-percent="25">
											<span class="percent"></span>
										</span>
										<h4>
											Rusya
										</h4>
									</div>
									<!-- 2 end -->

									<!-- 3 -->
									<div class="piechart">
										<span class="chart" data-percent="55">
											<span class="percent"></span>
										</span>
										<div class="clearfix"></div>
										<h4>
											Diğer
										</h4>
									</div>
									<!-- 3 end-->

								</div>
							</div>
						</div>
						<!-- skills  end-->

					</div>
				</div>
				<!-- Skills  end-->

			</div>
			<div class="bg-parallax-module" data-position-top="50" data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
			<div class="bg-parallax-module" data-position-top="40" data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
			<div class="bg-parallax-module" data-position-top="80" data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
			<div class="bg-parallax-module" data-position-top="95" data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end -->

		@if ($products->rowCount())

			<!-- section -->
			<section class="dark-bg" id="sec5">
				<div class="fet_pr-carousel-title">
					<div class="fet_pr-carousel-title-item">
						<h3>
							Üretim
						</h3>
						<p>
							Çağdaş iş anlaşı ile üretim yaparak teknolojiye yön vererek geleceğe ortak olmanızı sağlıyoruz.
						</p>
						<a href="{{ site_url('urunlerimiz') }}" class="btn float-btn flat-btn color-btn mar-top">
							Daha Fazla
						</a>
					</div>
				</div>

				<!--slider-carousel-wrap -->
				<div class="slider-carousel-wrap fl-wrap">

					<!--fet_pr-carousel -->
					<div class="fet_pr-carousel cur_carousel-slider-container fl-wrap">

						@foreach ($products as $product)

							<!--slick-item -->
							<div class="slick-item">
								<div class="fet_pr-carousel-box">
									<div class="fet_pr-carousel-box-media fl-wrap">
										<img src="{{ upload_url('images/cache/products/800x530/' . $product->image_url) }}" alt="{{ $product->name }}" class="respimg">
										<a href="{{ upload_url('images/original/products/' . $product->image_url) }}" class="fet_pr-carousel-box-media-zoom image-popup">
											<i class="fal fa-search"></i>
										</a>
									</div>
									<div class="fet_pr-carousel-box-text fl-wrap">
										<h3>
											<a href="{{ site_url('urunlerimiz/' . $product->slug) }}">
												{{ $product->name }}
											</a>
										</h3>
										<div class="fet_pr-carousel-cat">
											<a href="javascript:void(0)">
												{{ $product->category_name }}
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- slick-item end -->

						@endforeach

					</div>
					<!-- fet_pr-carousel end -->

					<div class="sp-cont sp-arr sp-cont-prev">
						<i class="fal fa-long-arrow-left"></i>
					</div>
					<div class="sp-cont sp-arr sp-cont-next">
						<i class="fal fa-long-arrow-right"></i>
					</div>
				</div>
				<!-- slider-carousel-wrap end -->

				<div class="fet_pr-carousel-counter"></div>
			</section>
			<!-- section end -->

		@endif

		<!-- section -->
		<section data-scrollax-parent="true" id="sec6">
			<!--<div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">
				Testimonials
				<span>//</span>
			</div>
			<div class="container">
				<div class="section-title fl-wrap">
					<h3>
						Sizler İçin Çalışan
					</h3>
					<h2>
						Yönetim
						<span>Kurulumuz</span>
					</h2>
					<p>
						Plasmak, profesyonel yönetim yaklaşımı kapsamında kurumsal yönetim ilkelerine öncelik ve önem vermektedir. Bu sebeple, hissedarları arasında fark gözetmez ve bütün faaliyet alanlarında etik kurallara uygun biçimde hareket eder.
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
				<div class="text-carousel-controls fl-wrap">
					<div class="container">
						<div class="sp-cont sp-cont-prev">
							<i class="fal fa-long-arrow-left"></i>
						</div>
						<div class="sp-cont sp-cont-next">
							<i class="fal fa-long-arrow-right"></i>
						</div>
					</div>
				</div>
				<div class="text-carousel cur_carousel-slider-container fl-wrap">
					<div class="slick-item">
						<div class="text-carousel-item">
							<div class="popup-avatar">
								<img src="{{ asset_url('client/images/avatar/1.jpg') }}" alt="">
							</div>
							<div class="review-owner fl-wrap">
								Milka Antony - <span>Happy Client</span>
							</div>
							<p>
								"In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat."
							</p>
							<a href="#" class="testim-link">
								Daha Fazla
							</a>
						</div>
					</div>
					<div class="slick-item">
						<div class="text-carousel-item">
							<div class="popup-avatar">
								<img src="{{ asset_url('client/images/avatar/2.jpg') }}" alt="">
							</div>
							<div class="review-owner fl-wrap">
								Milka Antony - <span>Happy Client</span>
							</div>
							<p>
								"In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat."
							</p>
							<a href="#" class="testim-link">
								Daha Fazla
							</a>
						</div>
					</div>
					<div class="slick-item">
						<div class="text-carousel-item">
							<div class="popup-avatar">
								<img src="{{ asset_url('client/images/avatar/3.jpg') }}" alt="">
							</div>
							<div class="review-owner fl-wrap">
								Milka Antony - <span>Happy Client</span>
							</div>
							<p>
								"In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat."
							</p>
							<a href="#" class="testim-link">
								Daha Fazla
							</a>
						</div>
					</div>
					<div class="slick-item">
						<div class="text-carousel-item">
							<div class="popup-avatar">
								<img src="{{ asset_url('client/images/avatar/4.jpg') }}" alt="">
							</div>
							<div class="review-owner fl-wrap">
								Milka Antony - <span>Happy Client</span>
							</div>
							<p>
								"In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat."
							</p>
							<a href="#" class="testim-link">
								Daha Fazla
							</a>
						</div>
					</div>
				</div>
			</div>-->

			<div class="fl-wrap">
				<div class="container">
					<ul class="client-list client-list-white">
						<li>
							<a href="#" target="_blank">
								<img src="{{ asset_url('client/images/clients/1.png') }}" alt="">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="{{ asset_url('client/images/clients/2.png') }}" alt="">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="{{ asset_url('client/images/clients/3.png') }}" alt="">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="{{ asset_url('client/images/clients/4.png') }}" alt="">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="{{ asset_url('client/images/clients/5.png') }}" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end -->

		<!-- section -->
		<section class="dark-bg2 small-padding order-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3>
							Geleceğe yön vermeye hazır mısınız?
						</h3>
					</div>
					<div class="col-md-4">
						<a href="{{ site_url('bize-ulasin') }}" class="btn flat-btn color-btn">
							Bize Ulaşın
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- section end -->

	</div>
	<!-- Content end -->

@endsection

@section('scripts')
@endsection

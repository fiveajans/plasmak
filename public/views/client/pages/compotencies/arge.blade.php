@extends('client.layouts.main')

@section('title', 'Ar-Ge (R&D)')
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
			<a href="{{ site_url() }}" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span>Anasayfaya Git</span></a>
		</div>

		<!-- section-->
		<section data-scrollax-parent="true">
			<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>Ar-Ge</div>
			<div class="container">
				<!-- det box-->
				<div class="fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="fixed-column l-wrap">
								<div class="pr-title fl-wrap">
									<h3>
										Plasmak Ar-Ge
									</h3>
									<span>Ürün Teknolojileri biriminde stratejik ürün gruplarına göre ayrışan ve uzmanlaşan teknik personeller yer alırken, malzeme teknolojileri biriminde malzeme tasarımı ve geliştirme çalışmaları sürdürülmektedir.</span>
								</div>
								<div class="ci-num"><span>01.</span></div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="details-wrap fl-wrap">
								<h3>
									Sektörün En İyi
									<span>Ar-Ge Merkezi</span>
								</h3>
								<div class="clearfix"></div>
								<p>
									Proje yürütme birimi tarafından Plasmak Ar-Ge departmanında yürütülen ve raporlanan tüm projelerin koordinasyonu ve raporlanması sağlanmaktadır. Fikri Mülkiyet birimi, Plasmak'ın patent, marka ve endüstriyel tasarımlarının araştırma, uygulama ve kayıt süreçlerini yürütmektedir. Kalıp ve Ekipman Tasarımı birimi ise kalıplar, makineler ve ekipman geliştirme projeleri ile ilgili tasarım çalışmalarını Plasmak Ar-Ge bünyesinde yürütmektedir.
								</p>
								<p>
									Plasmak'da yürütülen projelerin başarı kriterlerinden biri, proje çıktılarının sanayileşmesidir.
								</p>
							</div>

							<!-- accordion-->
							<div class="accordion mar-top">
								<a class="toggle act-accordion" href="#">Hedefimiz<span></span></a>
								<div class="accordion-inner visible">
									<p>Şirketin stratejik hedeflerini destekleyecek Ar-Ge niteliği yüksek çalışmalar yapmak,</p>
									<p>
										Şirketin teknik bilgi birikiminin oluşturulmasını sağlamak,
									</p>
									<p>
										Teknoloji ve pazar trendlerinin takibini yaparak ürün portföyünde yer alan ürün grupları için yenilikçi özellikler geliştirmek,
									</p>
									<p>
										Hedeflenen ürün kalitesi ve maliyetlere ulaşmak için ürünleri incelenmek, analizlerini yapmak, yapılan test ve analizler sonucunda nitelikli ürünleri ortaya koymak ve sürdürülebilir kaliteyi sağlamak.
									</p>
								</div>
								<a class="toggle" href="#">Stratejimiz<span></span></a>
								<div class="accordion-inner">
									<p>
										Firmamızın, sektördeki sürdürülebilir küresel rekabet gücünü artırmak ve ileri teknoloji kullanımının ağırlıklı olduğu katma değeri yüksek ürünler geliştirmeye yönelik Ar-Ge alt yapımızı güçlendirilmek,
									</p>
									<p>
										Bölgemizdeki üniversite ve işletmeler ile iş birliği içerisinde kalkınma ve bölgedeki nitelikli işgücü istihdamın artırılmasına katkı sağlamak,
									</p>
									<p>
										Plasmak olarak, kendi teknolojimizi geliştirerek, ürünlerimizin, global pazarda markalaşmasını sağlamak.
									</p>
								</div>
							</div>
							<!-- accordion end -->

						</div>
					</div>
					<div class="limit-box fl-wrap"></div>
				</div>
				<!-- det box end-->

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
						<h3>
							Geleceğe yön vermeye hazır mısınız?
						</h3>
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

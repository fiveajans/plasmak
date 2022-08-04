@extends('client.layouts.main')

@section('title', 'Dağıtım')
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
		<section data-scrollax-parent="true">
			<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>Dağıtım
			</div>
			<div class="container">

				<!-- det box-->
				<div class="fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="fixed-column l-wrap">
								<div class="pr-title fl-wrap">
									<h3>
										Dağıtım
									</h3>
									<span>Plasmak, İstanbul'daki ana merkezinden dünyanın dört bir yanına ihracat yapıyor. Ayrıca başlıca Rusya, Almanya ve diğer ülkelere ihracat yapıyor ve kendi dağıtım kanalları bulunuyor.</span>
								</div>
								<div class="ci-num">
									<span>01.</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="details-wrap fl-wrap">
								<h3>
									<span>Dünyaya</span>
									Hizmet Ediyoruz
								</h3>
								<div class="clearfix"></div>
							</div>

							<!-- accordion-->
							<div class="accordion mar-top">
								<a class="toggle act-accordion" href="#">
									Depo
									<span></span>
								</a>
								<div class="accordion-inner visible">
									<p>
										İleri seviye depolar sayesinde Plasmak, sevkiyat işlemlerinin hatasız gerçekleşmesini ve yüksek müşteri memnuniyetini sağlıyor.
									</p>
								</div>
								<a class="toggle" href="#">
									Lojistik
									<span></span>
								</a>
								<div class="accordion-inner">
									<p>
										Plasmak, üretim ve lojistiği entegre etmek için en yeni yazılımları kullanarak tam entegre lojistik hizmetleri sunmaktadır.
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

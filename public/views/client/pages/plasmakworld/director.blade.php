@extends('client.layouts.main')

@section('title', 'Mehmet Demirel')
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
			<a href="{{ site_url('plasmak-dunyasi/yonetim-kurulu') }}" class="single-page-fixed-row-link">
				<i class="fal fa-arrow-left"></i>
				<span>Yönetim Kuruluna Dön</span>
			</a>
		</div>
		<!-- section-->
		<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
			<div class="bg par-elem"  data-bg="{{ asset_url('client/images/bg/1.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
			<div class="overlay"></div>
			<div class="pattern-bg"></div>
			<div class="container">
				<div class="section-title">
					<h2>
						Mehmet
						<br>
						<span>Demirel</span>
					</h2>
					<p>
						Kısa açıklama.
					</p>
					<div class="horizonral-subtitle">
						<span>Yönetim</span>
					</div>
				</div>
				<a href="#sec1" class="custom-scroll-link hero-start-link">
					<span>Kaydır</span>
					<i class="fal fa-long-arrow-down"></i>
				</a>
			</div>
		</section>
		<!-- section end-->
  
		<!-- section-->
		<section data-scrollax-parent="true" id="sec1">
			<div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>Mehmet Demirel
			</div>
			<div class="container">
				<div class="row mar-bottom">
					<div class="col-md-5">
						<div class="collage-image fl-wrap">
							<img src="{{ asset_url('client/images/all/1.jpg') }}" class="respimg" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="main-about fl-wrap">
							<h5>
								Unvan
							</h5>
							<h2>
								Mehmet Demirel
							</h2>
							<p>
								Açıklama.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '-250px' }"></div>
			<div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
			<div class="sec-lines"></div>
		</section>
		<!-- section end-->

	</div>
	<!-- Content end -->

@endsection

@section('scripts')
@endsection

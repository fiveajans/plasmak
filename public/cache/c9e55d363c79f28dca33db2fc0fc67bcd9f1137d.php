

<?php $__env->startSection('title', 'Teknoloji'); ?>
<?php $__env->startSection('description', 'Açıklama.'); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
			<a href="<?php echo e(site_url()); ?>" class="single-page-fixed-row-link">
				<i class="fal fa-arrow-left"></i>
				<span>Anasayfaya Git</span>
			</a>
		</div>

		<!-- section-->
		<section data-scrollax-parent="true">
			<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>Teknoloji</div>
			<div class="container">

				<!-- det box-->
				<div class="fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="fixed-column l-wrap">
								<div class="pr-title fl-wrap">
									<h3>
										Plasmak Teknoloji
									</h3>
									<span>Plasmak, satış sonrası pazar için inovasyon ve yenileme konusunda lider Ar-Ge’lerden birine sahiptir ve tüm endüstrideki üzere en büyük şirkettir.</span>
								</div>
								<div class="ci-num">
									<span>01.</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="details-wrap fl-wrap">
								<h3>
									<span>Teknolojiye</span>
									Yatırım Yapıyoruz									
								</h3>
								<div class="clearfix"></div>
							</div>

							<!-- accordion-->
							<div class="accordion mar-top">
								<a class="toggle act-accordion" href="#">
									Kurumsal Kaynak Planlaması Connect
									<span></span>
								</a>
								<div class="accordion-inner visible">
									<p>
										Tüm operasyonlarımız ve depolarımız, PlasmakConnect tarafından desteklenen kusursuz kaynak planlama sistemimiz ile tamamen entegredir. Bu ileri teknoloji sistemi sayesinde depolarımız insan etkileşimi olmadan sürekli iletişim halindedir. Bu bizi insan hatalarından korur ve mümkün olan en hızlı teslimat sürecini garanti eder.
									</p>
								</div>
								<a class="toggle" href="#">
									İmalat Yürütme Sistemi
									<span></span>
								</a>
								<div class="accordion-inner">
									<p>
										MES (Manufacturing Execution Systems), tesisinizin atölye durumunu gerçek zamanlı olarak görmek için kokpit görevi gören bir Çevrimiçi Makine İzleme aracı sunar. Sistem, Plasmak'a makine parkuru üzerinde tam kontrol sağlar ve stopajların ve verimlilik sorunlarının anında çözülmesine yardımcı olur. Sürekli iyileştirme projeleri ve kök neden analizini tanımlamak için mükemmel bir araçtır.
									</p>
								</div>
								<a class="toggle" href="#">
									Aftermarket Alanındaki En İyi Ar-Ge Merkezi
									<span></span>
								</a>
								<div class="accordion-inner">
									<p>
										Yüksek teknolojiye sahip araştırma ve geliştirme merkezimiz Plasmak Ar-Ge ile asla sona ermeyen yenilik arayışımızla gurur duyuyoruz.
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/client/pages/compotencies/technology.blade.php ENDPATH**/ ?>
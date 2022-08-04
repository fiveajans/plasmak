

<?php $__env->startSection('title', $product->name); ?>
<?php $__env->startSection('description', $product->description); ?>

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
			<a href="<?php echo e(site_url('urunlerimiz')); ?>" class="single-page-fixed-row-link">
				<i class="fal fa-arrow-left"></i>
				<span>Tüm Ürünler</span>
			</a>
		</div>

		<!-- section  -->
		<section class="no-padding dark-bg no-hidden">

			<!-- show-case-slider-wrap-->
			<div class="show-case-slider-wrap slider-carousel-wrap show-case-slider-wrap-style2">

				<?php if($images->rowCount() > 1): ?>

					<div class="sp-cont sarr-contr sp-cont-prev">
						<i class="fal fa-long-arrow-left"></i>
					</div>
					<div class="sp-cont sarr-contr sp-cont-next">
						<i class="fal fa-long-arrow-right"></i>
					</div>

				<?php endif; ?>

				<div class="show-case-slider cur_carousel-slider-container lightgallery fl-wrap full-height" data-slick='{"centerMode": true}'>

					<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<!-- show-case-item -->
						<div class="show-case-item" data-curtext="<?php echo e($product->name); ?>">
							<div class="show-case-wrapper fl-wrap full-height">
								<img src="<?php echo e(upload_url('images/cache/products/800x530/' . $image->url)); ?>" alt="<?php echo e($product->name); ?>">
								<a href="<?php echo e(upload_url('images/original/products/' . $image->url)); ?>" class="fet_pr-carousel-box-media-zoom popup-image">
									<i class="fal fa-search"></i>
								</a>
							</div>
						</div>
						<!-- show-case-item end-->

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<!--<div class="show-case-item" data-curtext="Photo Details">
						<div class="show-case-wrapper fl-wrap full-height">
							<img src="images/folio/9.jpg" alt="">
							<a href="https://vimeo.com/115735583" class="fet_pr-carousel-box-media-zoom popup-image">
								<i class="fal fa-play"></i>
							</a>
						</div>
					</div>-->

				</div>
			</div>
			<!-- show-case-slider-wrap end-->

		</section>
		<!-- section end-->

		<!-- section-->
		<section data-scrollax-parent="true">
			<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>
				Ürünler
			</div>
			<div class="container">

				<!-- det box-->
				<div class="fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="fixed-column l-wrap">
								<div class="pr-title fl-wrap">
									<h3>
										Ürün Açıklaması
									</h3>
									<span><?php echo e($product->description); ?></span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="details-wrap fl-wrap">
								<h3>
									<?php echo e($product->name); ?>

								</h3>
								<div class="parallax-header">
									<span>Kategori:</span>
									<a href="javascript:void(0)">
										<?php echo e($product->category_name); ?>

									</a>
								</div>
								<div class="clearfix"></div>
								<?php echo $product->content; ?>

							</div>
						</div>
					</div>
					<div class="limit-box fl-wrap"></div>
				</div>
				<!-- det box end-->
				<div class="content-nav mar-top">
					<ul>

						<?php if($prevProduct): ?>

							<li>
								<a href="<?php echo e(site_url('urunlerimiz/' . $prevProduct->slug)); ?>" class="ln">
									<i class="fal fa-arrow-left"></i>
									<span class="tooltip">Önceki - <?php echo e($prevProduct->name); ?></span>
								</a>
							</li>

						<?php else: ?>

							<li>
								<a href="javascript:void(0)" class="ln">
									<i class="fal fa-arrow-left"></i>
									<span class="tooltip">Önceki</span>
								</a>
							</li>

						<?php endif; ?>

						<li>
							<a href="<?php echo e(site_url('urunlerimiz')); ?>" class="cur-page">
								<span>Tüm Ürünler</span>
							</a>
						</li>

						<?php if($nextProduct): ?>

							<li>
								<a href="<?php echo e(site_url('urunlerimiz/' . $nextProduct->slug)); ?>" class="rn">
									<i class="fal fa-arrow-right"></i>
									<span class="tooltip">Sonraki - <?php echo e($nextProduct->name); ?></span>
								</a>
							</li>

						<?php else: ?>

							<li>
								<a href="javascript:void(0)" class="rn">
									<i class="fal fa-arrow-right"></i>
									<span class="tooltip">Sonraki</span>
								</a>
							</li>

						<?php endif; ?>

					</ul>
				</div>
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
						<a href="<?php echo e(site_url('bize-ulasin')); ?>" class="btn flat-btn color-btn">
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

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/client/pages/products/detail.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Ürünlerimiz'); ?>
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
		</div>

		<!-- section-->
		<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
			<div class="bg par-elem"  data-bg="<?php echo e(asset_url('client/images/bg/30.jpg')); ?>" data-scrollax="properties: { translateY: '30%' }"></div>
			<div class="overlay"></div>
			<div class="pattern-bg"></div>
			<div class="container">
				<div class="section-title">
					<h2>
						Our
						<span>realized</span>
						<br>
						and future projects
					</h2>
					<p>
						If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
					</p>
					<div class="horizonral-subtitle">
						<span>Ürünler</span>
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
			<div class="section-subtitle" data-scrollax="properties: { translateY: '150px' }" >
				Ürünler
				<span>//</span>
			</div>
			<div class="container">

				<!-- filter -->
				<div class="filter-holder inline-filter fl-wrap  mar-bottom">
					<div class="filter-button"><i class="fal fa-filter"></i> <span>Filtrele</span></div>
					<div class="gallery-filters">
						<a href="#" class="gallery-filter gallery-filter-active" data-filter="*">
							Hepsi
						</a>

						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<a href="#" class="gallery-filter" data-filter=".<?php echo e($category->slug); ?>">
								<?php echo e($category->name); ?>

							</a>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class="folio-counter">
						<div class="num-album"></div>
						<div class="all-album"></div>
					</div>
				</div>
				<!-- filter end-->

				<!-- portfolio start -->
				<div class="gallery-items spad hde three-column">

					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<!-- gallery-item-->
						<div class="gallery-item <?php echo e($product->category_slug); ?>">
							<div class="grid-item-holder">
								<a href="<?php echo e(upload_url('images/original/products/' . $product->image_url)); ?>" class="fet_pr-carousel-box-media-zoom image-popup">
									<i class="fal fa-search"></i>
								</a>
								<img src="<?php echo e(upload_url('images/cache/products/800x530/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>">
								<div class="box-item hd-box">
									<div class=" fl-wrap full-height">
										<div class="hd-box-wrap">
											<h2>
												<a href="<?php echo e(site_url('urunlerimiz/' . $product->slug)); ?>">
													<?php echo e($product->name); ?>

												</a>
											</h2>
											<!--<p>
												<a href="#">
													Design
												</a>
												<a href="#">
													Branding
												</a>
											</p>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- gallery-item end-->

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
				<!-- portfolio end -->

			</div>
			<div class="sec-lines"></div>
		</section>

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

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/client/pages/products/list.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('description', ''); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Content-->
	<div class="content">
		<div class="single-page-decor"></div>

		<!-- single-page-fixed-row-->
		<div class="single-page-fixed-row blog-single-page-fixed-row">
			<div class="scroll-down-wrap">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
				<span>Aşağı Kaydır</span>
			</div>

			<!-- filter  -->
			<div class="blog-filters">
				<span>Filtrele:</span>

				<!-- filter tag   -->
				<div class="tag-filter blog-btn-filter">
					<div class="blog-btn">
						Etiketler
						<i class="fa fa-tags" aria-hidden="true"></i>
					</div>
					<ul>
						<li>
							<a href="#">
								Etiket Adı
							</a>
						</li>
					</ul>
				</div>
				<!-- filter tag end  -->

				<!-- filter category    -->
				<div class="category-filter blog-btn-filter">
					<div class="blog-btn">
						Kategoriler
						<i class="fa fa-list-ul" aria-hidden="true"></i>
					</div>
					<ul>
						<li>
							<a href="#">
								Kategori Adı
							</a>
						</li>
					</ul>
				</div>
				<!-- filter category end  -->

				<div class="blog-search">
					<form action="#" class="searh-inner fl-wrap">
						<input type="text" name="search" placeholder="Ara" class="search">
						<button type="submit" class="search-submit color-bg">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
			</div>
			<!-- filter end    -->

		</div>
		<!-- single-page-fixed-row end-->
		<!-- section end-->

		<!-- section -->
		<section data-scrollax-parent="true" id="sec1">
			<div class="section-subtitle left-pos" data-scrollax="properties: { translateY: '-250px' }">
				<span>//</span>
				Haberler
			</div>
			<div class="container">

				<!-- blog-container  -->
				<div class="fl-wrap post-container">
					<div class="row">
						<div class="col-md-8">

							<!-- post -->
							<div class="post fl-wrap fw-post">
								<h2>
									<span>Haber Adı</span>
								</h2>
								<div class="parallax-header">
									<a href="javascript:void(0)">
										4 Ağustos 2022
									</a>
									<span>Kategori:</span>
									<a href="#">
										Kategori Adı
									</a>
								</div>

								<!-- blog media -->
								<div class="blog-media fl-wrap mb-15">
									<img src="<?php echo e(asset_url('client/images/folio/2.jpg')); ?>" alt="">
								</div>
								<!-- blog media end -->

								<div class="parallax-header fl-wrap">
									<span>Etiketler:</span>
									<a href="#">
										Etiket Adı
									</a>
								</div>
								<div class="blog-text fl-wrap">
									<div class="clearfix"></div>
									<h3>
										Haber Adı
									</h3>
									<p>
										İçerik.
									</p>
								</div>
							</div>
							<!-- post end-->

						</div>
						
						<!-- blog-sidebar  -->
						<div class="col-md-4">
							<div class="blog-sidebar fl-wrap fixed-bar">

								<!-- widget-wrap -->
								<div class="widget-wrap fl-wrap">
									<h4 class="widget-title">
										<span>01.</span>
										Son Haberler
									</h4>
									<div class="widget-container fl-wrap">
										<div class="widget-posts fl-wrap">
											<ul>
												<li class="clearfix">
													<a href="#" class="widget-posts-img">
														<img src="<?php echo e(asset_url('client/images/folio/1.jpg')); ?>" class="respimg" alt="">
													</a>
													<div class="widget-posts-descr">
														<a href="#" title="">
															Haber Adı
														</a>
														<span class="widget-posts-date">4 Ağustos 2022</span> 
													</div>
												</li>
												<li class="clearfix">
													<a href="#" class="widget-posts-img">
														<img src="<?php echo e(asset_url('client/images/folio/2.jpg')); ?>" class="respimg" alt="">
													</a>
													<div class="widget-posts-descr">
														<a href="#" title="">
															Haber Adı
														</a>
														<span class="widget-posts-date">4 Ağustos 2022</span> 
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- widget-wrap end  -->

							</div>
						</div>
						<!-- blog-sidebar end -->

						<div class="limit-box fl-wrap"></div>
					</div>

					<!-- content-nav -->
					<div class="content-nav">
						<ul>
							<li>
								<a href="blog.html" class="ln">
									<i class="fal fa-arrow-left"></i>
									<span class="tooltip">Önceki - Haber Adı</span>
								</a>
							</li>
							<li>
								<span class="cur-page">
									<span>Haber Adı</span>
								</span>
							</li>
							<li>
								<a href="blog.html" class="rn">
									<i class="fal fa-arrow-right"></i>
									<span class="tooltip">Sonraki - Haber Adı</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- content-nav end -->

				</div>
				<!-- blog-container end -->

			</div>
			<div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
			<div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
			<div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
			<div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
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
						<a href="<?php echo e(site_url('bize-ulasin')); ?>" class="btn flat-btn color-btn">
							Bize Ulaşın
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- section end -->

	</div>
	<!-- Content end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/client/pages/corporate/recent-news/detail.blade.php ENDPATH**/ ?>
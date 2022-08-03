

<?php $__env->startSection('styles'); ?>

	<!-- Gallery css -->
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/vendor/gallery/gallery.css')); ?>">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/vendor/summernote/summernote-bs4.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php if($message): ?>

		<div class="row gutters mb-2">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="alert alert-<?php echo e($message['class']); ?>">
					<?php echo e($message['text']); ?>

				</div>
			</div>
		</div>

	<?php endif; ?>

	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<!-- Card start -->
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						Ürün Düzenle
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="name" value="<?php echo e($product->name); ?>" required class="form-control">
									<div class="field-placeholder">
										Ürün Adı
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="file" name="images[]" accept="image/*" multiple class="form-control">
									<div class="field-placeholder">
										Resimler
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="video" value="<?php echo e($product->video); ?>" placeholder="YouTube Adresi" class="form-control">
									<div class="field-placeholder">
										Ürün Videosu
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>

							<?php if($images->rowCount()): ?>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">

									<!-- Gallery start -->
									<div class="baguetteBoxThree gallery">

										<!-- Row start -->
										<div class="row g-2">

											<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6" id="image-<?php echo e($image->id); ?>" data-default="<?php echo e($image->id == $product->default_image ? 'true' : 'false'); ?>">
													<a href="<?php echo e(upload_url('images/original/products/' . $image->url)); ?>" class="effects">
														<img src="<?php echo e(upload_url('images/cache/products/800x530/' . $image->url)); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid">
														<div class="overlay">
															<span class="expand">+</span>
														</div>
													</a>
													<div class="text-center action-image">
														
														<?php if($image->id != $product->default_image): ?>

															<i onclick="defaultImage(<?php echo e($image->id); ?>, <?php echo e($product->id); ?>)" class="icon-check-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Varsayılan Yap"></i>

														<?php endif; ?>

														<i onclick="deleteImage(<?php echo e($image->id); ?>)" class="icon-x-circle text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sil"></i>
													</div>
												</div>

											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</div>
										<!-- Row end -->

									</div>
									<!-- Gallery end -->

								</div>

							<?php endif; ?>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<select name="category_id" class="form-control" required>
										
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											<option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $product->category_id ? 'selected' : null); ?>>
												<?php echo e($category->name); ?>

											</option>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</select>
									<div class="field-placeholder">
										Kategori
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<textarea name="description" rows="10" required class="form-control"><?php echo e($product->description); ?></textarea>
									<div class="field-placeholder">
										Açıklama
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<textarea name="content" class="summernote"><?php echo e($product->content); ?></textarea>
									<div class="field-placeholder">
										İçerik
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button type="submit" class="btn btn-primary">
									Kaydet
								</button>
							</div>
						</div>
						<!-- Row end -->

					</form>
				</div>
			</div>
			<!-- Card end -->

		</div>
	</div>
	<!-- Row end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<!-- Gallery JS -->
	<script src="<?php echo e(asset_url('admin/vendor/gallery/baguetteBox.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/gallery/plugins.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/gallery/custom-gallery.js')); ?>"></script>

	<script>
		function deleteImage(id) {

			var defaultImage = $('#image-' + id).data('default');

			$.post(
				API_URL + '/products/image',
				{ action: 'delete', id: id, defaultImage: defaultImage },
				function (data) {

					if (data == 'action') {

						Swal.fire({
							title: 'Hata!',
							text: 'Lütfen gönderilen işlemi kontrol edin.',
							icon: 'danger',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'default') {

						Swal.fire({
							title: 'Hata!',
							text: 'Varsayılan ürün resmi silinemez.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'error') {

						Swal.fire({
							title: 'Hata!',
							text: 'Bir hata oluştu ve ürün resmi silinemedi.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else {

						$('#image-' + id).hide(500);

						Swal.fire({
							title: 'Başarılı!',
							text: 'Ürün resmi başarıyla silindi.',
							icon: 'success',
							confirmButtonText: 'Tamam'
						});

					}

				}
			);

		}

		function defaultImage(id, product) {
			$.post(
				API_URL + '/products/image',
				{ action: 'default', id: id, product: product },
				function (data) {

					if (data == 'action') {

						Swal.fire({
							title: 'Hata!',
							text: 'Lütfen gönderilen işlemi kontrol edin.',
							icon: 'danger',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'error') {

						Swal.fire({
							title: 'Hata!',
							text: 'Bir hata oluştu ve varsayılan ürün resmi ayarlanamadı.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else {

						Swal.fire({
							title: 'Başarılı!',
							text: 'Ürün resmi başarıyla varsayılan yapıldı.',
							icon: 'success',
							confirmButtonText: 'Tamam'
						}).then(function() {
                            window.location = "<?php echo e(site_url('admin/products/update/' . $product->id)); ?>";
                        });;

					}

				}
			);

		}
	</script>

	<!-- Summernote JS -->
	<script src="<?php echo e(asset_url('admin/vendor/summernote/summernote-bs4.js')); ?>"></script>

	<script>
		// Summernote
		$(document).ready(function () {
			$('.summernote').summernote({
				height: 210,
				tabsize: 4,
				focus: false,
				toolbar: [
					['font', ['bold', 'underline', 'clear']],
					['para', ['ul', 'ol']],
					['insert', ['link', 'picture', 'video']],
					['view', ['fullscreen', 'codeview', 'help']]
				],
				lang: 'tr-TR'
			});
		});
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/admin/pages/products/update.blade.php ENDPATH**/ ?>


<?php $__env->startSection('styles'); ?>

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
						Ürün Ekle
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="name" value="<?php echo e($old['name'] ?? null); ?>" required class="form-control">
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
									<input type="file" name="images[]" accept="image/*" multiple required class="form-control">
									<div class="field-placeholder">
										Resimler
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="video" value="<?php echo e($old['video'] ?? null); ?>" placeholder="YouTube Adresi" class="form-control">
									<div class="field-placeholder">
										Ürün Videosu
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<select name="category_id" class="form-control" required>
										
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											<option value="<?php echo e($category->id); ?>">
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
									<textarea name="description" rows="10" required class="form-control"><?php echo e($old['description'] ?? null); ?></textarea>
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
									<textarea name="content" class="summernote"><?php echo e($old['content'] ?? null); ?></textarea>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/admin/pages/products/create.blade.php ENDPATH**/ ?>
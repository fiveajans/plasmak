

<?php $__env->startSection('content'); ?>

	<!--begin::Form-->
	<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="#" action="#">
		<!--begin::Heading-->
		<div class="text-center mb-11">
			<!--begin::Title-->
			<h1 class="text-dark fw-bolder mb-3">Giriş Yap</h1>
			<!--end::Title-->
			<!--begin::Subtitle-->
			<div class="text-gray-500 fw-semibold fs-6">
				Sosyal ağ hesaplarını kullanabilirsiniz.
			</div>
			<!--end::Subtitle=-->
		</div>
		<!--begin::Heading-->
		<!--begin::Login options-->
		<div class="row g-3 mb-9">
			<!--begin::Col-->
			<div class="col-md-6">
				<!--begin::Google link=-->
				<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 social-login">
					<img alt="Logo" src="<?php echo e(asset_url('connect/media/svg/brand-logos/google-icon.svg')); ?>" class="h-15px me-3">
					Google ile giriş yap
				</a>
				<!--end::Google link=-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-6">
				<!--begin::Google link=-->
				<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 social-login">
					<img alt="Logo" src="<?php echo e(asset_url('connect/media/svg/brand-logos/apple-black.svg')); ?>" class="theme-light-show h-15px me-3">
					<img alt="Logo" src="<?php echo e(asset_url('connect/media/svg/brand-logos/apple-black-dark.svg')); ?>" class="theme-dark-show h-15px me-3">
					Apple ile giriş yap
				</a>
				<!--end::Google link=-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Login options-->
		<!--begin::Separator-->
		<div class="separator separator-content my-14">
			<span class="w-130px text-gray-500 fw-semibold fs-7">veya</span>
		</div>
		<!--end::Separator-->
		<!--begin::Input group=-->
		<div class="fv-row mb-8">
			<!--begin::Email-->
			<input type="text" placeholder="E-posta" name="email" autocomplete="off" class="form-control bg-transparent" />
			<!--end::Email-->
		</div>
		<!--end::Input group=-->
		<div class="fv-row mb-3">
			<!--begin::Password-->
			<input type="password" placeholder="Şifre" name="password" autocomplete="off" class="form-control bg-transparent" />
			<!--end::Password-->
		</div>
		<!--end::Input group=-->
		<!--begin::Wrapper-->
		<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
			<div></div>
			<!--begin::Link-->
			<a href="#" class="link-primary">Şifreni mi unuttun?</a>
			<!--end::Link-->
		</div>
		<!--end::Wrapper-->
		<!--begin::Submit button-->
		<div class="d-grid mb-10">
			<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
				<!--begin::Indicator label-->
				<span class="indicator-label">Giriş Yap</span>
				<!--end::Indicator label-->
				<!--begin::Indicator progress-->
				<span class="indicator-progress">Yükleniyor... 
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				<!--end::Indicator progress-->
			</button>
		</div>
		<!--end::Submit button-->
		<!--begin::Sign up-->
		<div class="text-gray-500 text-center fw-semibold fs-6">
			Henüz kayıtlı değil misiniz? 
			<a href="<?php echo e(site_url('plasmakconnect/register')); ?>" class="link-primary">
				Kayıt Ol
			</a>
		</div>
		<!--end::Sign up-->
	</form>
	<!--end::Form-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<script src="<?php echo e(asset_url('connect/js/custom/authentication/sign-in/general.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('connect.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/connect/pages/auth/login.blade.php ENDPATH**/ ?>
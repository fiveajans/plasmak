@extends('connect.layouts.main')

@section('content')

	<!--begin::Form-->
	<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="#" action="#">
		<!--begin::Heading-->
		<div class="text-center mb-11">
			<!--begin::Title-->
			<h1 class="text-dark fw-bolder mb-3">Kayıt Ol</h1>
			<!--end::Title-->
			<!--begin::Subtitle-->
			<div class="text-gray-500 fw-semibold fs-6">Sosyal ağ hesaplarını kullanabilirsiniz.</div>
			<!--end::Subtitle=-->
		</div>
		<!--begin::Heading-->
		<!--begin::Login options-->
		<div class="row g-3 mb-9">
			<!--begin::Col-->
			<div class="col-md-6">
				<!--begin::Google link=-->
				<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 social-login">
					<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />
					Google ile giriş yap
				</a>
				<!--end::Google link=-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-6">
				<!--begin::Google link=-->
				<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 social-login">
					<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
					<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />
					Apple ile giriş yap
				</a>
				<!--end::Google link=-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Login options-->
		<!--begin::Separator-->
		<div class="separator separator-content my-14">
			<span class="w-150px text-gray-500 fw-semibold fs-7">veya</span>
		</div>
		<!--end::Separator-->
		<!--begin::Input group=-->
		<div class="fv-row mb-8">
			<!--begin::Email-->
			<input type="text" placeholder="E-posta" name="email" autocomplete="off" class="form-control bg-transparent" />
			<!--end::Email-->
		</div>
		<!--begin::Input group-->
		<div class="fv-row mb-8" data-kt-password-meter="true">
			<!--begin::Wrapper-->
			<div class="mb-1">
				<!--begin::Input wrapper-->
				<div class="position-relative mb-3">
					<input class="form-control bg-transparent" type="password" placeholder="Şifre" name="password" autocomplete="off" />
				</div>
				<!--end::Input wrapper-->
				<!--begin::Meter-->
				<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
				</div>
				<!--end::Meter-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Hint-->
			<div class="text-muted">Harf, sayı ve özel karakter karışımıyla 8 veya daha fazla karakter kullanın.</div>
			<!--end::Hint-->
		</div>
		<!--end::Input group=-->
		<!--end::Input group=-->
		<div class="fv-row mb-8">
			<!--begin::Repeat Password-->
			<input placeholder="Şifre Tekrarı" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
			<!--end::Repeat Password-->
		</div>
		<!--end::Input group=-->
		<!--begin::Accept-->
		<div class="fv-row mb-8">
			<label class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="toc" value="1" />
				<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
					<a href="#" class="ms-1 link-primary">
						PlasmakConnect Üyelik Sözleşmesini ve Kişisel Veriler Politikasını
					</a> okudum, anladım ve kabul ediyorum.
				</span>
			</label>
		</div>
		<!--end::Accept-->
		<!--begin::Submit button-->
		<div class="d-grid mb-10">
			<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
				<!--begin::Indicator label-->
				<span class="indicator-label">Kayıt Ol</span>
				<!--end::Indicator label-->
				<!--begin::Indicator progress-->
				<span class="indicator-progress">Lütfen bekleyin... 
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				<!--end::Indicator progress-->
			</button>
		</div>
		<!--end::Submit button-->
		<!--begin::Sign up-->
		<div class="text-gray-500 text-center fw-semibold fs-6">Zaten kayıtlı bir hesabınız var mı?
		<a href="{{ site_url('plasmakconnect/login') }}" class="link-primary fw-semibold">Giriş Yap</a></div>
		<!--end::Sign up-->
	</form>
	<!--end::Form-->

@endsection

@section('scripts')

	<script src="{{ asset_url('connect/js/custom/authentication/sign-up/general.js') }}"></script>

@endsection

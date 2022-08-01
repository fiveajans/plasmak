
<!DOCTYPE html>
<html lang="tr">

	<!--begin::Head-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>PlasmakConnect</title>
		<meta name="description" content="Açıklama.">

		<link rel="shortcut icon" href="{{ asset_url('connect/media/logos/favicon.png') }}">

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
		<!--end::Fonts-->

		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset_url('connect/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset_url('connect/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
		<!--end::Global Stylesheets Bundle-->

		<link href="{{ asset_url('connect/css/custom.css') }}" rel="stylesheet" type="text/css">

	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

		<!--begin::Theme mode setup on page load-->
		<script>
			if (document.documentElement) {
				const defaultThemeMode = "system";
				const name = document.body.getAttribute("data-kt-name");

				let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value");

				if (themeMode === null) {
					if (defaultThemeMode === "system") {
						themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
					} else {
						themeMode = defaultThemeMode;
					}
				}

				document.documentElement.setAttribute("data-theme", themeMode);
			}
		</script>
		<!--end::Theme mode setup on page load-->

		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">

			<!--begin::Page bg image-->
			<style>
				body {
					background-image: url({{ asset_url('connect/media/auth/bg4.jpg') }})
				}
				
				[data-theme="dark"] body {
					background-image: url({{ asset_url('connect/media/auth/bg4-dark.jpg') }});
				}
			</style>
			<!--end::Page bg image-->

			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-column plasmakconnect">
						<!--begin::Logo-->
						<a href="{{ site_url('plasmakconnect') }}" class="mb-7">
							<img alt="Logo" src="{{ asset_url('connect/media/logos/plasmakconnect.svg') }}" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0 subtitle">
							Sizlere daha iyi hizmet vermek için geliştirdik.
						</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
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
											<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3">
											Google ile giriş yap
										</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 social-login">
											<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3">
											<img alt="Logo" src="{{ asset_url('connect/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3">
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
									<a href="#" class="link-primary">
										Kayıt Ol
									</a>
								</div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset_url('connect/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset_url('connect/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{ asset_url('connect/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Custom Javascript-->

		<script src="{{ asset_url('connect/js/custom.js') }}"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>

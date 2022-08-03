
<!DOCTYPE html>
<html lang="tr">

	<!--begin::Head-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>PlasmakConnect</title>
		<meta name="description" content="Açıklama.">

		<link rel="shortcut icon" href="<?php echo e(asset_url('connect/media/logos/favicon.png')); ?>">

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
		<!--end::Fonts-->

		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo e(asset_url('connect/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset_url('connect/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css">
		<!--end::Global Stylesheets Bundle-->

		<link href="<?php echo e(asset_url('connect/css/custom.css')); ?>" rel="stylesheet" type="text/css">

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
					background-image: url(<?php echo e(asset_url('connect/media/auth/bg4.jpg')); ?>)
				}
				
				[data-theme="dark"] body {
					background-image: url(<?php echo e(asset_url('connect/media/auth/bg4-dark.jpg')); ?>);
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
						<a href="<?php echo e(site_url('plasmakconnect')); ?>" class="mb-7">
							<img alt="Logo" src="<?php echo e(asset_url('connect/media/logos/plasmakconnect.svg')); ?>" />
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
							
							<?php echo $__env->yieldContent('content'); ?>

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
		<script src="<?php echo e(asset_url('connect/plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(asset_url('connect/js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Javascript Bundle-->
		
		<!--begin::Custom Javascript(used by this page)-->
		<?php echo $__env->yieldContent('scripts'); ?>
		<!--end::Custom Javascript-->

		<script src="<?php echo e(asset_url('connect/js/custom.js')); ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<?php /**PATH C:\xampp\htdocs\projects\plasmak\public\views/connect/layouts/main.blade.php ENDPATH**/ ?>
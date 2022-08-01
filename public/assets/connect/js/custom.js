$(function () {

	$('.social-login').click(function () {

		Swal.fire({
			text: "Hesabınız etkinleştirilmedi!",
			icon: "error",
			buttonsStyling: false,
			confirmButtonText: "Tamam, anladım.",
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});

	});

})
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/favicon.png" />
	<title>Dinkop Jombang</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Nucleo Icons -->
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/assets/') ?>css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url('assets/assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="<?= base_url('assets/assets/') ?>css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('assets/assets/') ?>css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body class="">
	<div class="container position-sticky z-index-sticky top-0">

	</div>
	<main class="main-content mt-0">
		<section>
			<div class="page-header min-vh-75">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
							<div class="card card-plain mt-8">
								<div class="card-header pb-0 text-left bg-transparent">
									<h3 class="font-weight-bolder text-info text-gradient">
										Selamat Datang
									</h3>
									<p class="mb-0">Masukkan....</p>
								</div>
								<div class="card-body">
									<form role="form" method="post" action="<?= base_url('login') ?>">
										<label>Email</label>
										<div class="mb-3">
											<input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
										</div>
										<label>Password</label>
										<div class="mb-3">
											<input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
										</div>
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="rememberMe" checked="" />
											<label class="form-check-label" for="rememberMe">Ingat Saya</label>
										</div>
										<div class="text-center">
											<button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">
												Masuk
											</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="col-md-6">
							<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
								<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="
											background-image: url('../assets/img/curved-images/curved6.jpg');
										"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
	<footer class="footer py-5">
		<div class="container">

			<div class="row">
				<div class="col-8 mx-auto text-center mt-1">
					<p class="mb-0 text-secondary">
						Copyright ??
						<script>
							document.write(new Date().getFullYear());
						</script>
						Koperasi Jombang
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
	<!--   Core JS Files   -->
	<script src="<?= base_url('assets/assets/') ?>js/core/popper.min.js"></script>
	<script src="<?= base_url('assets/assets/') ?>js/core/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/assets/') ?>js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('assets/assets/') ?>js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= base_url('assets/assets/') ?>js/plugins/chartjs.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

	<!-- <?php if ($this->session->flashdata('login-gagal')) : ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Gagal',
          text: 'Email atau password tidak sesuai!',
          showConfirmButton: true,
          timer: 4500
        })
      </script>
    <?php endif; ?> -->

	<script>
		var win = navigator.platform.indexOf("Win") > -1;
		if (win && document.querySelector("#sidenav-scrollbar")) {
			var options = {
				damping: "0.5",
			};
			Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?= base_url('assets/assets/') ?>js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
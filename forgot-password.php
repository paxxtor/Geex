<!doctype html>
<html lang="en" dir="ltr">

<?php $title='Forgot-Password' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication geex-content__authentication--forgot-password">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">
						<a href="index.php">
							<img class="logo-lite" src="assets/img/logo-dark.svg" alt="logo">
							<img class="logo-dark" src="assets/img/logo-lite.svg" alt="logo">
						</a>
					</div>
					<form id="signInForm" class="geex-content__authentication__form">
						<h2 class="geex-content__authentication__title">Forgot your password? 👋</h2>
						<p class="geex-content__authentication__desc">Please enter the email address associated with your account and We will email you a link to reset your password.</p>
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Email Address</label>
							<input type="email" id="emailSignIn" name="emailSignIn" placeholder="Enter Your Email" required>
							<i class="uil-envelope"></i>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit">Forget Password</button>
						<a href="signin.php" class="geex-content__authentication__form-submit return-btn">Back to Login</a>
					</form>
				</div>
			</div>	
			<div class="geex-content__authentication__img">
				<img src="./assets/img/authentication.svg" alt="">
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<?php include './partials/script.php'?>
	<!-- endinject-->
</body>

</html>
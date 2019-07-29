<!DOCTYPE html>
<html lang="en">
<head>
	<title>KaizerTech | Şirket Bilişim Parça Yönetim Sistemi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('images/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animate/animate.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css-hamburgers/ha	mburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('images/img-01.png');?>" alt="KaizerTechLogos">
				</div>

				<form class="login100-form validate-form" id="myform2" role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
					<span class="login100-form-title">
						Kullanıcı Girişi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user_email" placeholder="Email">
						<div class="valid-feedback">Başardın!</div>
		        <div class="invalid-feedback">Üzgünüm, bunu kaçırdınız.</div>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="user_password" placeholder="Parola">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Giriş Yap
						</button>
						<button type="button" id="giris" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Kayıt Ol!</button>
					</div>
					<div>
					<span class="login100-form-title p-b-34 p-t-30">
						<?php
					$success_msg= $this->session->flashdata('success_msg');
					$error_msg= $this->session->flashdata('error_msg');

							if($success_msg){
								?>
								<div class="alert alert-success">
									<?php echo $success_msg; ?>
								</div>
							<?php
							}
							if($error_msg){
								?>
								<div class="alert alert-danger">
									<?php echo $error_msg; ?>
								</div>
								<?php
							}
							?>
					</span>
				</div>
				<p><center>&copy; 2018 KaizerTech</center><p>
				</form>
		</div>
		</div>
	</div>



<!---Register Modal --->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hızlı Kayıt!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form class="container" novalidate="" action="<?php echo base_url('user/register_user'); ?>" method="POST" id="myForm">
    <div class="form-group">
        <label class="form-control-label" for="inputSuccess1">Kullanıcı Adı</label>
        <input type="text" class="form-control" name="user_name" id="inputSuccess1" required>
        <div class="valid-feedback">Başardın!.</div>
        <div class="invalid-feedback">Hayır, bunu kaçırdın.</div>
    </div>
    <div class="form-group">
        <label class="form-control-label" for="inputSuccess2">Parola</label>
        <input type="password" class="form-control" name="user_password" required id="inputSuccess2">
        <div class="valid-feedback">Başardın!</div>
        <div class="invalid-feedback">Üzgünüm, bunu kaçırdınız.</div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary" id="btnSubmit">KAYIT OL!</button>
    </div>
</form>

<form class="container">
      </div>

    </div>
  </div>
</div>


<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/jquery/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('js/main.js');?>"></script>

<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('vendor/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->

</body>
</html>

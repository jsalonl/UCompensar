  <?php
    //Modulos Fijos Superiores
    include('views/head.php');
  ?>
  <body class="bg-dark">
	<!-- Page content -->
	<div class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center no-gutters min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow mt-4">
					<!-- Card body -->
					<div class="card-body p-6">
            <?php $this->showMessages();?>
						<div class="mb-4">
							<a href="#"><img src="views/assets/images/brand/logo/logo.jpg" class="mb-4" alt="" /></a>
							<h1 class="mb-1 font-weight-bold">Reg&iacute;strese</h1>
							<span>Ya tiene cuenta?
								<a href="./" class="ml-1">Inicie sesi&oacute;n</a></span>
						</div>
						<!-- Form -->
						<form action="<?php echo constant('URL');?>/signup/newUser" method="post">
              <!-- Vid -->
							<div class="form-group">
								<label for="identificacion" class="form-label">Identificaci&oacute;n</label>
								<input type="tel" id="identificacion" class="form-control" name="identificacion" placeholder="Identificacion"
									required />
							</div>
              <!-- Name -->
							<div class="form-group">
								<label for="nombre" class="form-label">Nombre Completo</label>
								<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombres y apellidos"
									required />
							</div>
              <!-- Email -->
							<div class="form-group">
								<label for="correo" class="form-label">Correo</label>
								<input type="correo" id="correo" class="form-control" name="correo" placeholder="Correo universitario"
									required />
							</div>
              <!-- Vid -->
							<div class="form-group">
								<label for="telefono" class="form-label">Tel&eacute;fono</label>
								<input type="tel" id="telefono" class="form-control" name="telefono" placeholder="N&uacute;mero de tel&eacute;fono o celular"
									required />
							</div>
              <!-- Password -->
							<div class="form-group">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required />
							</div>
              <!-- Checkbox -->
							<!--<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="agreeCheck" />
									<label class="custom-control-label" for="agreeCheck"><span>I agree to the <a href="terms-condition-page.html">Terms of
												Service </a>and
											<a href="terms-condition-page.html">Privacy Policy.</a></span></label>
								</div>
							</div>-->
							<div>
                <!-- Button -->
								<button type="submit" class="btn btn-primary btn-block">
									Crear cuenta
								</button>
							</div>
							<hr class="my-4" />
							<div class="mt-4 text-center">
								<a href="https://ucompensar.edu.co" target="_blank">UCompensar&copy;</a> - Todos los derechos reservados
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
  include('views/scripts.php');
?>
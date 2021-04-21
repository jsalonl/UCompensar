  <?php
    //Modulos Fijos Superiores
    include('views/head.php');
  ?>
 <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-12 mx-auto">
              <div class="auto-form-wrapper">
                <div class="pb-5 mx-auto text-center">
                  <img src="views/assets/images/logo.jpg" width="100%">
                </div>
                <?php $this->showMessages();?>
                <!-- Formulario -->
                <form action="<?php echo constant('URL');?>/signup/newUser" method="post">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="identificacion">Identificacion</label>
                    <div class="input-group">
                      <input type="phone" name="identificacion" id="identificacion" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <div class="input-group">
                      <input type="text" name="nombre" id="nombre" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="correo">Correo</label>
                    <div class="input-group">
                      <input type="email" name="correo" id="correo" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="telefono">Telefono</label>
                    <div class="input-group">
                      <input type="phone" name="telefono" id="telefono" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Contraseña</label>
                    <div class="input-group">
                      <input type="password" name="password" id="password" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Registrarse</button>
                  </div>
                  <div class="text-block col-md-12 text-center my-3">
                    <span class="font-weight-semibold">¿Ya es miembro?</span>
                    <a href="<?php echo constant('URL')?>/login" class="text-primary">Inicie sesión</a>
                  </div>
                  </div>
                </form>
                <!-- Formulario -->
              </div>
              <p class="footer-text text-center">UCompensar &copy; <?php echo date('Y')?>. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
  
  <?php
  include('views/scripts.php');
  ?>
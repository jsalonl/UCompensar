<?php
    //Modulos Fijos Superiores
    include('views/head.php');
  ?>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <div class="pb-5">
                  <img src="views/assets/images/logo.jpg" width="100%">
                </div>
                <?php $this->showMessages();?>
                <!-- Formulario -->
                <form action="<?php echo constant('URL');?>/login/authenticate" method="post">
                  
                  <div class="form-group">
                    <label for="Correo">Correo Institucional</label>
                    <div class="input-group">
                      <input type="email" name="correo" id="correo" class="form-control" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
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
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Iniciar Sesión</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="font-weight-semibold">¿No es miembro?</span>
                    <a href="<?php echo constant('URL')?>/signup" class="text-primary">Registrese</a>
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
  
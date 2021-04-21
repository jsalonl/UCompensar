<?php
$user = $this->d['user'];
?>
<?php 
  include('views/head.php');
  include('views/header.php');
  include('views/sidebar.php');
?>
  <div class="row-fluid text-center">
    <?php $this->showMessages();?>
  </div>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
        <h1>Ultimas Noticias y actualizaciones</h1>
      </div>
    </div>
  </div>
  
  <?php
  include('views/footer.php');
  include('views/scripts.php');
  ?>
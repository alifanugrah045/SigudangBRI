<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    
    
    <link rel="stylesheet" href="http://localhost/sigudang/template/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url('template/css/mycss.css'); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  
  </head>
  <body class="d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('template/img/2.png'); ?>);  background-position: center; background-size: cover">
  <div class="cover w-100 bg-dark bg-gradient position-absolute top-0 bottom-0 opacity-25">
  
  </div>
    <div class="card cardlogin shadow-lg border-0">
      <img class="img-fluid" src="<?= base_url()?>template/img/logo.png" alt="logo" />
      <div class="card border-0"><h3 class="text-center font-weight-light mt-3">Silahkan Login</h3></div>
      <div class="card-body">
        <?php echo  $this->session->flashdata('message')?>
        <form method="post" action="<?php echo base_url('auth/login_aksi');?>">
          <div class="form-floating mb-3">
            <input class="form-control" id="email" type="text" name="username" placeholder="name@example.com" value="<?= set_value('username'); ?>" />
            <label for="inputEmail">Username</label>
            <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
          </div>
          
          <div class="form-floating mb-3">
            <input class="form-control" id="password" type="password" name="password" placeholder="Password"  />
            <label for="inputPassword">Password</label>
            <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="d-flex align-items-center justify-content-center mt-4 mb-0 btnlogin">
            <button type="submit" class="btn  btn-primary btncustom text-white w-100 form-control" >Login</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('template/js/scripts.js'); ?>"></script>
  </body>
</html>

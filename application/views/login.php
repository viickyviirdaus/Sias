<!DOCTYPE html>
<html>
<head>
  <title>SIAS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/background.css"  >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/background.css"  >

</head>
<body style="background: #282931">

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <!-- scripts -->
  <script src="<?php echo base_url('assets'); ?>/demo/particles.js" ></script>
  <script src="<?php echo base_url('assets'); ?>/js/app.js" ></script>

  <header style="background:rgba(0,0,0,0.6;">
    <center >
      <h2 style="color: white">SIAS</h2>
      <h5 style="color: white">Sistem Informasi Akademik Siswa</h5>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color: white; margin-top: 95px; margin-bottom: 175px; background:rgba(0,0,0,0.5;">
          <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Controller_login/loginAdmin') ?>" >
            <div class="form-group" style="margin-top: 5px; ">
              <b><h3><center>Login</center></h3></b>
              <div class="col-sm-12 input-sm " style="margin-top: 10px;">
                <label>NISN : </label>
                <input type="text" class="form-control" name="usr" placeholder="Masukkan NISN">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 input-sm">
                <label>Password :</label>
                <input type="password" class="form-control" name="psw" placeholder="Masukkan password">
              </div>
            </div>
            <center>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 button-sm">
                  <button type="submit" class="btn btn-default" >Login</button>
                </div>
              </div>
            </center>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">

      </div>
    </div>
    <footer class=" text-center" style="background:rgba(0,0,0,0.3); padding-top: 30px; padding-bottom: 7px;">
      <p style="color: white">@ Copyright Kelompok 7</p>
    </footer>


  </div>
</body>
</html>

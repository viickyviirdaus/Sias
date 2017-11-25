<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 60px">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="" s="navbar-header" style="padding-top: 5px;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <a class="navbar-brand" href="#">
        			<img alt="Brand" src="assets/image/logo.png" style="max-height: 100%">
      			</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav set-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Wali Kelas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" id="buatAkunWaliKelas">Buat Akun Wali Kelas</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_waliKelas/tampilWaliKelasAktif'); ?>">Lihat Akun Wali Kelas Aktif</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_waliKelas/tampilWaliKelasTidakAktif'); ?>"">Lihat Akun Wali Kelas Non Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Siswa <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a id="buatAkunSiswa" href="#">Buat Akun Siswa</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_siswa/tampilSiswaAktif'); ?>">Lihat Akun Siswa Aktif</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_siswa/tampilSiswaTidakAktif'); ?>"">Lihat Akun Siswa Non Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-fw" aria-hidden="true"></i> Kelas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<? echo base_url('index.php/Controller_kelas/tampilKelas'); ?>">Lihat Kelas</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list fa-fw" aria-hidden="true"></i> Mata Pelajaran <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<? echo base_url('index.php/Controller_mapel/tampilMapel'); ?>">Lihat Mata Pelajaran</a></li>
						</ul>
					</li>					
				</ul>				
				<ul class="nav navbar-nav navbar-right">
					<a href="<?php echo base_url('index.php/Controller_user/logout'); ?>"><button class="btn btn-danger" style="margin-right: 10px; margin-top: 7px;" >Logout</button></a>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
        <div class="container">
	</nav>

	<!-- Modal -->
        <div class="modal fade" id="modalBuatAkunWaliKelas" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input name="usrname" type="text" class="form-control" id="usrname" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                                <input name="psw" type="text" class="form-control" id="psw" placeholder="Enter password" required>
                            </div>
                            <a href="#" id="login"><button type="submit" class="btn btn-success btn-block" id="formSubmit">Login</button></a>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>Belum punya akun ? <a href="#" id="signuplink" data-dismiss="modal">Sign Up</a></p>
                    </div>
                </div>

            </div>
        </div> 

        <!-- Modal -->
        <div class="modal fade" id="modalBuatAkunSiswa" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"><span class="glyphicon glyphicon-user"></span> Register</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 30px;">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-user"></span> Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan Username" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                                <input name="pass" type="password" class="form-control" id="psw" placeholder="Masukkan Password" required>
                            </div>
                            <a href="<?php echo base_url('index.php/home/login/'.$iklan->iklan_id); ?>" id="login"><button type="submit" class="btn btn-success btn-block" id="formSubmit" style="margin-bottom: 25px">Register</button></a>
                        </form>
                    </div>
                </div>

            </div>
        </div> 

        <script>
            $(document).ready(function () {
                $("#buatAkunWaliKelas").click(function () {
                    $("#modalBuatAkunWaliKelas").modal();
                });
            });
            $(document).ready(function () {
                $("#buatAkunSiswa").click(function () {
                    $("#modalBuatAkunSiswa").modal();
                });
            });

        </script>

        

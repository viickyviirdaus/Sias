<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
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
							<li><a data-toggle="modal" data-target="#tambahCustomer">Buat Akun Wali Kelas</a></li>
							<li><a href="#">Lihat Akun Wali Kelas Aktif</a></li>
							<li><a href="#">Lihat Akun Wali Kelas Non Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Siswa <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Buat Akun Siswa</a></li>
							<li><a href="#">Lihat Akun Siswa Aktif</a></li>
							<li><a href="#">Lihat Akun Siswa Non Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-fw" aria-hidden="true"></i> Kelas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Lihat Kelas</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list fa-fw" aria-hidden="true"></i> Mata Pelajaran <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Lihat Mata Pelajaran</a></li>
						</ul>
					</li>					
				</ul>				
				<ul class="nav navbar-nav navbar-right">
					<button class="btn btn-danger" style="margin-right: 10px; margin-top: 7px;">Logout</button>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<!-- MODAL TAMBAH CUSTOMER -->
	<div class="modal fade" id="tambahCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Customer</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">Full Name</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Full Name">	
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Address</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Date Of Birth</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Date Of Birth">	
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Email</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
								</div>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="L"> Laki Laki
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="P"> Perempuan
								</label>
							</form>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputFile">Photo</label>
								<div >
									<img style="width: 200px; margin-bottom:10px;" src="assets/image/defaultProfile.png">
								</div>
								<input type="file" id="exampleInputFile">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
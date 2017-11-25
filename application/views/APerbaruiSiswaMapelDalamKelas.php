
		<h3 style="margin-left: 105px; margin-top: 80px;">Daftar Siswa</h3>
		<form action="" style="margin-top: 10px">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="" name="" class="form-control text-center" placeholder="search" style="">
				</div>
				<div class="col-md-2">						
					<button type="submit" class="btn btn-default" style="">Cari</button>
				</div>
				<div class="col-md-2">
					<a href="#" id="tambahSiswa">
						<button class="btn">
							<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
						</button>
					</a>
				</div>
			</div>
		</form>
		<div class="row" style="padding-right: 600px; padding-left: 120px">
			<table class="table table-bordered" style=" margin-top: 15px" align="center">
			<thead>	
				<tr>	
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">NIS</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($siswa as $dataSiswa): ?>
				<tr style="text-align: left;">
					<td class="text-center" ><?php echo $no; $no++; ?></td>
					<td class="text-left" ><?php echo $dataSiswa->nama_siswa; ?></td>
					<td class="text-center" ><?php echo $dataSiswa->nis; ?></td>
				</tr>
				<?php endforeach ?>				
			</tbody>
			</table>
		</div>
		<!--  -->
		<h3 style="margin-left: 105px">Daftar Mata Pelajaran</h3>	
		<form action="" style="margin-top: 10px">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="" name="" class="form-control text-center" placeholder="search" style="">
				</div>
				<div class="col-md-2">						
					<button type="submit" class="btn btn-default" style="">Cari</button>
				</div>
				<div class="col-md-2">
					<a href="#" id="tambahMapel">
						<button class="btn">
							<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
						</button>
					</a>
				</div>
			</div>
		</form>
		<div class="row" style="padding-right: 390px; padding-left: 120px">
			<table class="table table-bordered" style=" margin-top: 15px" align="center">
			<thead>	
				<tr>	
					<th class="text-center">No</th>
					<th class="text-center">Nama Mata Pelajaran</th>
					<th class="text-center">KKM</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($mapel as $dataMapel): ?>
				<tr style="text-align: left;">
					<td class="text-center" ><?php echo $no; $no++; ?></td>
					<td class="text-left" ><?php echo $dataMapel->nama_mata_pelajaran; ?></td>
					<td class="text-center" ><?php echo $dataMapel->kkm; ?></td>
					<td class="text-center" >
						<a href=""><button class="btn btn-danger">hapus</button></a>
					</td>
				</tr>
				<?php endforeach ?>					
			</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Modal Tambah Daftar Siswa-->
        <div class="modal fade" id="modalTambahSiswa" role="dialog">
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

        <!-- Modal Tambah Daftar Mapel-->
        <div class="modal fade" id="modalTambahMapel" role="dialog">
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
                $("#tambahSiswa").click(function () {
                    $("#modalTambahSiswa").modal();
                });
            });
            $(document).ready(function () {
                $("#tambahMapel").click(function () {
                    $("#modalTambahMapel").modal();
                });
            });
        </script>
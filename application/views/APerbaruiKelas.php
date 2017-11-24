<div class="body" style="min-height: 555px;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3 class="text-center">Perbarui Kelas</h3>
		<div class="row" style="padding-right: 800px; padding-left: 120px; padding-top: 20px;">
			<div class="col-md-5">
				<p style="padding-top: 5px;" class="text-left" >Nama Kelas</p>
				<p style="padding-top: 20px" class="text-left">Ruang</p>
				<p style="padding-top: 20px" class="text-left">Tahun Ajaran</p>
			</div>
			<div class="col-md-7" style="margin-bottom: 10px">
				<form>
					<input type="" name="nama" value="<?php echo $data->nama_kelas; ?>" class="form-control">
					<input type="" name="ruang" value="<?php echo $data->ruang_kelas; ?>" class="form-control" style="margin-top: 15px">
					<input type="" name="tahun_ajaran" value="<?php echo $data->tahun_ajaran; ?>" class="form-control" style="margin-top: 15px">
					<button type="submit" class="btn btn-primary" style="width: 80px; margin-top: 20px; margin-left: 150px">Simpan</button>
				</form>
				<a href="">
						<button class="btn btn-default" style="width: 80px; margin-top: 20px; margin-left: 3px">Batal</button>
					</a>
			</div>
			<h3 style="margin-top: 100px">Daftar Siswa</h3>
		</div>
		<form action="" style="margin-top: 10px">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="" name="" class="form-control text-center" placeholder="search" style="">
				</div>
				<div class="col-md-2">						
					<button type="submit" class="btn btn-default" style="">Cari</button>
				</div>
				<div class="col-md-2">
					<a href="">
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
					<a href="">
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
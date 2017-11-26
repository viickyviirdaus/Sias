		<h3 align="center" style="margin-left: 105px; margin-top: 80px;"><?php echo $nama_kelas; ?></h3>
		<h3 style="margin-left: 105px; margin-top: 10px;">Daftar Siswa</h3>
		<div class="row" style="padding-right: 600px; padding-left: 120px">
			<table class="table table-bordered" style=" margin-top: 15px" align="center">
			<thead>	
				<tr>	
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">NIS</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; $cari = false;
				foreach ($siswa as $dataSiswa): ?>
				<tr style="text-align: left;">
					<td class="text-center" ><?php echo $no; $no++; ?></td>
					<td class="text-left" ><?php echo $dataSiswa->nama_siswa; ?></td>
					<td class="text-center" ><?php echo $dataSiswa->nis; ?></td>
					<td class="text-center" >
					<form action="<?php echo base_url('index.php/Controller_kelas/hapusSiswaDalamKelas/'.$dataSiswa->id_siswa.'/'.$id_kelas); ?>" onsubmit="return confirm('Apakah anda yakin ingin menghapus <?php echo $dataSiswa->nama_siswa; ?> pada <?php echo $nama_kelas; ?>');">
						<button type="submit" class="btn btn-danger">Hapus</button>
					</form>
						
					</td>
				</tr>
				<?php endforeach ?>				
			</tbody>
			</table>
		</div>
		<form action="<?php echo base_url('index.php/Controller_kelas/tambahSiswaDalamKelas'); ?>" style="margin-top: 10px" method="post">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="hidden" name="id" value="<?php echo $id_kelas; ?>">
					<input type="" name="nis" class="form-control text-center" placeholder="Masukkan NIS">
				</div>
				<div class="col-md-2">
						<button class="btn" type="submit">
							<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
						</button>
				</div>
			</div>
		</form>
	
		<!--  -->
		<h3 style="margin-left: 105px">Daftar Mata Pelajaran</h3>
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
						<form action="<?php echo base_url('index.php/Controller_kelas/hapusMapelDalamKelas/'.$dataMapel->id_mata_pelajaran.'/'.$id_kelas); ?>" onsubmit="return confirm('Apakah anda yakin ingin menghapus mata pelajaran <?php echo $dataMapel->nama_mata_pelajaran; ?> pada <?php echo $nama_kelas; ?>');">
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				<?php endforeach ?>					
			</tbody>
			</table>
		</div>

		<form action="<?php echo base_url('index.php/Controller_kelas/tambahMapelDalamKelas'); ?>" style="margin-top: 10px" method="post">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="hidden" name="id" value="<?php echo $id_kelas; ?>">
					<input type="" name="mapel" class="form-control text-center" placeholder="Masukkan Nama Mata Pelajaran">
				</div>
				<div class="col-md-2">
						<button class="btn" type="submit">
							<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
						</button>
				</div>
			</div>
		</form>
		
	</div>
</div>
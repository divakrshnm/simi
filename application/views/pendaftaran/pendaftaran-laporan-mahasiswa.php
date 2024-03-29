  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<h1>
  			Kelola Laporan
  			<small>Pendaftaran</small>
  		</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Kelola Laporan</a></li>
  			<li class="active">Pendaftaran</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="box">
  			<div class="box-header">
  				<h3 class="box-title">Data-Data Pendaftaran</h3>
  			</div>
  			<!-- /.box-header -->
  			<div class="box-body">
  				<table id="example1" class="table table-bordered table-striped">
  					<thead>
  						<tr>
  							<th>No.</th>
  							<th>NPM</th>
  							<th>Nama</th>
  							<th>Kelas</th>
  							<th>Prodi</th>
  							<th>Tanggal Pendaftaran</th>
  							<th>Nama Perusahaan</th>
  							<th>Alamat Perusahaan</th>
  						</tr>
  					</thead>
  					<tbody>
  						<?php
							$no = 1;
							foreach ($pendaftaran as $pdft) {
								?>
  							<tr>
  								<td><?php echo $no++; ?></td>
  								<td><?php echo $pdft->npm; ?></td>
  								<td><?php echo ucwords($pdft->nama); ?></td>
  								<td><?php echo strtoupper($pdft->kelas); ?></td>
  								<td><?php echo ucwords($pdft->prodi); ?></td>
  								<td><?php echo date_format(date_create($pdft->tgl_pendaftaran), "d-m-Y"); ?></td>
  								<td><?php echo ucwords($pdft->nama_perusahaan); ?></td>
  								<td><?php echo ucwords($pdft->alamat_perusahaan); ?></td>
  							</tr>
  						<?php }
							?>
  					</tbody>
  					<tfoot>
  						<tr>
  							<th>No.</th>
  							<th>NPM</th>
  							<th>Nama</th>
  							<th>Kelas</th>
  							<th>Prodi</th>
  							<th>Tanggal Pendaftaran</th>
  							<th>Nama Perusahaan</th>
  							<th>Alamat Perusahaan</th>
  						</tr>
  					</tfoot>
  				</table>
  			</div>
  			<!-- /.box-body -->
  		</div>
  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
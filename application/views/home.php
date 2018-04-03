<!DOCTYPE html>
<html>
<head>
	<title>Application Tupperware</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="container">
		<div class="navbar white">
			<div class="navbar-status"><a href="javascript:void(0")><i class="fa fa-user fa-fw"></i>Yusuf Andriyanto<i class="fa fa-angle-down fa-fw muter"></i></a>
				<div class="navbar-list-status">
					<a href="javascript:void(0)"><i class="fa fa-address-card fa-fw"></i>Edit User</a><br>
					<a href="javascript:void(0)"><i class="fa fa-key fa-fw"></i>Change Password</a><br>
					<a href="javascript:void(0)"><i class="fa fa-sign-out fa-fw"></i>Log Out</a><br>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="sidebar white">
			<div class="sidebar-menu">
				<a href="javascript:void(0)">Barang</a><br>
				<a href="javascript:void(0)">User</a><br>
				<a href="javascript:void(0)">Sales Force</a><br>
				<a href="javascript:void(0)">Konsumen</a><br>
				<a href="javascript:void(0)">Transaksi</a><br>
				<div id="MySidebar" class="sidebar-dropdown">
					<span>Laporan<i class="fa fa-angle-down fa-fw muter"></i></span><br>
					<div class="sidebar-content">
						<a href="javascript:void(0)">Laporan Barang</a><br>
						<a href="javascript:void(0)">Laporan Transaksi</a><br>
					</div>
				</div>
				<a href="javascript:void(0)">Log Out</a><br>

			</div>
		</div>
		<div class="content"><div class="heading white">
			<h1>Data Barang</h1>
			Notification
			<div class="notif">
				mass
			</div>
			<button type="button"class="white"><i class="fa fa-plus fa-fw"></i>Tambah</button>
		</div>
			<div class="list">
				<?php
		  		echo "<table class='table table-border'>";
		  		echo "<tr>
		  				<td>No.</td>
		  				<td>Nama</td>
		  				<td>Status</td>
		  				<td>Email</td>
		  			</tr>";
		  		$no = 0;
		  		foreach ($rows as $row) {
		  			$no++;
		  			$id = $row->id_user;
		  			$nama = nl2br($row->nama_user);
		  			$status = nl2br($row->status_user);
		  			$email = nl2br($row->email_user);
		  			echo "<tr>
		  					<td>$no</td>
		  					<td>$nama</td>
		  					<td>$status</td>
		  					<td>$email</td>
		  				</tr>";
		  		}

		  		echo "</table>";
		      ?>
			</div>
			<p class="footer-text white"> Created By Team Woyo </p>
		</div>

	</div>
</div>
<script>

</script>
</body>
</html>

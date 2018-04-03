<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  </head>
  <body>
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
  </body>
</html>

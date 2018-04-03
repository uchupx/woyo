<!DOCTYPE html>
<html>
	<head>
		<title>Tupperware</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	</head>
	<style>
/*========================== Embeeded CSS============================= */
	#customers {
	      font-family: 'Cavar';
	      border-collapse: collapse;
	      width: 100%;
	      font-size: 15px;
	      margin-top: 20px;

	  }

	 #customers td, #customers th {
	      border: 1px solid #ddd;
	      padding: 8px;
	  }

	 #customers tr:nth-child(even){background-color: #f2f2f2;}

	 #customers tr:hover {background-color: #ddd;}

	 #customers th {
	      padding-top: 12px;
	      padding-bottom: 12px;
	      text-align: left;
	      background-color: #4CAF50;
	      color: white;
	      font-size: 15px;
	      }

	#button-index{
   background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 4px 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 0;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius: 4px;
}

#button-tambah{
   background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 0;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius: 10px;
}


	</style>
	<br><a id="button-tambah" href="<?php echo base_url(); ?>Salesforce/tambah">+ New SF Master</a>
	<body>
		
		<table id="customers">
				<th>No.</th>
				<th>ID</th>
				<th>NAMA</th>
				<th>UNIT</th>
				<th>TIPE</th>
				<th>STATUS</th>
				<th>NO.KTP</th>
				<th>NO.TELP</th>
				<th>EMAIL</th>
				<th>ALAMAT</th>
				<th>PEREKRUT</th>
				<th>ACTION</th>
			</tr>
<?php
		$no = 0;
		foreach ($rows as $row) {
			$no++;
			$id_sf = $row->id_sf;
			$nama_sf = ($row->nama_sf);
			$unit_sf = ($row->unit_sf);
			$tipe_sf = ($row->tipe_sf);
			$status_sf = ($row->status_sf);
			$noktp_sf = ($row->noktp_sf);
			$notelp_sf = ($row->notelp_sf);
			$email_sf = ($row->email_sf);
			$alamat_sf = ($row->alamat_sf);
			$perekrut_sf = ($row->perekrut_sf);
			echo "<tr>
					<td>$no</td>
					<td>$id_sf</td>
					<td>$nama_sf</td>
					<td>$unit_sf</td>
					<td>$tipe_sf</td>
					<td>$status_sf</td>
					<td>$noktp_sf</td>
					<td>$notelp_sf</td>
					<td>$email_sf</td>
					<td>$alamat_sf</td>
					<td>$perekrut_sf</td>
					<td> <a id='button-index' href='#Edit'>Edit</a> <a id='button-index' href='#EDelete'>Delete</a> </td>
				</tr>";
		}
	?>
</table>
	</body>
</html>
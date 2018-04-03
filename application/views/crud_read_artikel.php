<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<a href="<?php echo base_url(); ?>Artikel/create">Tambah Artikel</a>
	<?php
		echo "<table border='1'>";
		echo "<tr>
				<td>No.</td>
				<td>Judul</td>
				<td>Kategori</td>
				<td>Deskripsi</td>
				<td>Artikel</td>
			</tr>";
		$no = 0;
		foreach ($rows as $row) {
			$no++;
			$id = $row->id_artikel;
			$judul = nl2br($row->judul);
			$kategori = nl2br($row->id_kategori);
			$deskripsi = nl2br($row->keterangan);
			$artikel = nl2br($row->artikel);
			echo "<tr>
					<td>$no</td>
					<td>$judul</td>
					<td>$kategori</td>
					<td>$deskripsi</td>
					<td>$artikel</td>
				</tr>";
		}

		echo "</table>";
	?>
</body>
</html>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    font-family: 'Cavar';
    font-size: 15px;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
}

input[type=reset]:hover {
    background-color: #45a049;
}


textarea[type=text], select {
    width:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    font-family: 'Cavar';
    font-size: 15px;
}

div {
    border-radius: 20px;
    background-color: #f2f2f2;
    padding:20px;
    float: center;
    margin: 40px;
}
</style>

<div>
		<form method="POST" action="insert">
		<?php echo validation_errors(); ?>

			<legend><h1>New Input Sales Force Master</h1></legend>
			<label>ID Sales Force</label><br>
			<input type="text" name="id_sf" placeholder="Masukan..." ></br>

			<label>Nama Sales Force</label><br>
			<input type="text" name="nama_sf" placeholder="Masukan..." ><br>

			<label>Unit</label><br>
			<input type="text" name="unit_sf" placeholder="Masukan..." ></br>

			<label>Tipe</label><br>
			<select name="tipe_sf">
				<option value="Consultant">Consultant</option>
				<option value="TeamCaptain">TeamCaptain</option>
				<option value="Manager">Manager</option>
				<option value="Grup Manager">GrupManager</option>
			</select></br>

			<label>Status</label><br>
			<input type="text" name="status_sf" placeholder="Masukan..." ></br>

			<label>No.KTP</label><br>
			<input type="text" name="noktp_sf" placeholder="Masukan..." ></br>

			<label>No.Telp</label><br>
			<input type="text" name="notelp_sf" rows="2" placeholder="Masukan..." ></br>

			<label>Email</label><br>
			<input type="text" name="email_sf" rows="2" placeholder="Masukan..."></br>

			<label>Alamat</label><br>
			<textarea type="text" name="alamat_sf" placeholder="Masukan..." rows="4" cols="40"	></textarea></br>

			<label>Perekrut</label><br>
			<input type="text" name="perekrut_sf" placeholder="Masukan..." ></br>

			<br><input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">
	</form>
</div>
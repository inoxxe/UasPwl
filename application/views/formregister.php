<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url('index.php/helloword/prosesregister'); ?>" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jns_klmn">
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tgl Lahir</td>
			<td>:</td>
			<td><input type="text" name="lahir"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan">
					<option>Teknik Informatika S1</option>
					<option>Teknik Informatika D3</option>
					<option>Design Kompunikasi Visual S1</option>
					<option>Sistem Informasi S1</option>
					<option>Ilmu Komunikasi S1</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input type="text" name="orangtua"></td>
		</tr>
		
	</table>
	<button type="submit">Registrasi</button>
	</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Latihan CRUD</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Mahasiswa</a>

	<table class="table">
		<thead>
			<tr>
				<th>Nim</th>
				<th>Nama Mahasiswa</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>telp</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_mahasiswa as $row){
				echo "
				<tr>
					<td>$row[nim]</td>
					<td>$row[name]</td>
					<td>$row[alamat]</td>
					<td>$row[jenis_kel]</td>
					<td>$row[telp]</td>
					<td>$row[email]</td>
					<td>
						<a href='data/edit/$row[nim]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[nim]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>

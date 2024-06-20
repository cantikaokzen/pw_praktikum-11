<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mt-4 mb-4">CRUD Mahasiswa</h1>
		<?php 
		include "koneksi.php";
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($link, $sql);
		?>
		<table class="table">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>No HP</th>
					<th>Jenis Kelamin</th>
					<th>Jurusan</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?= $row['nim']?></td>
						<td><?= $row['nama']?></td>
						<td><?= $row['no_hp']?></td>
						<td><?= $row['jenis_kelamin']?></td>
						<td><?= $row['jurusan']?></td>
						<td><?= $row['alamat']?></td>
						<td>
							<a href="form_edit.php?id=<?=$row['id']?>" class="btn btn-warning"><img src="https://img.icons8.com/?size=20&id=69926&format=png&color=ffffff" alt=""></a>
							<a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger"><img src="https://img.icons8.com/?size=20&id=78581&format=png&color=ffffff" alt=""></a>
						</td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
		<a href="form_tambah.php" class="btn btn-success">Tambah Mahasiswa <img src="https://img.icons8.com/?size=20&id=59718&format=png&color=FFFFFF" alt=""></a>
	</div>
</body>
</html>

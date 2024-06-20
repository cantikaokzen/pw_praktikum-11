<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mt-4 mb-4">Edit Mahasiswa</h1>
		<?php 
		include "koneksi.php";
		$id = $_GET['id'];
		$sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
		$result = mysqli_query($link, $sql);
		$data = mysqli_fetch_assoc($result);
		?>
		<form action="aksi_edit.php" method="post">
			<input type="hidden" name="id" value="<?=$data['id']?>">
			<div class="mb-3">
				<label for="nim" class="form-label">NIM</label>
				<input type="text" name="nim" id="nim" class="form-control" value="<?=$data['nim']?>" require>
			</div>
			<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama']?>" require>
			</div>
			<div class="mb-3">
				<label for="no_hp" class="form-label">No HP</label>
				<input type="text" name="no_hp" id="no_hp" class="form-control" value="<?=$data['no_hp']?>" require>
			</div>
			<div class="mb-3">
				<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
				<select name="jenis_kelamin" id="jenis_kelamin" class="form-select" require>
					<option value="Pria" <?php if($data['jenis_kelamin'] === 'Pria') echo 'selected';?>>Pria</option>
					<option value="Wanita" <?php if($data['jenis_kelamin'] === 'Wanita') echo 'selected';?>>Wanita</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="jurusan" class="form-label">Jurusan</label>
				<select class="form-select" name="jurusan" id="jurusan" require>
					<option value="Informatika" <?php if($data['jurusan'] === 'Informatika') echo 'selected';?>>Informatika</option>
					<option value="Sistem Informasi" <?php if($data['jurusan'] === 'Sistem Informasi') echo 'selected';?>>Sistem Informasi</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat" rows="3" require><?=$data['alamat']?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Simpan <img src="https://img.icons8.com/?size=20&id=59875&format=png&color=FFFFFF" alt=""></button>
			<a href="tampil_data.php" class="btn btn-secondary">Kembali <img src="https://img.icons8.com/?size=20&id=101380&format=png&color=FFFFFF" alt=""></a>
		</form>
		<br><br>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mt-4 mb-4">Tambah Mahasiswa</h1>
		<form action="aksi_simpan.php" method="post">
			<div class="mb-3">
				<label for="nim" class="form-label">NIM</label>
				<input type="text" name="nim" id="nim" class="form-control" require>
			</div>
			<div class="mb-3">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control" require>
			</div>
			<div class="mb-3">
				<label for="no_hp" class="form-label">No HP</label>
				<input type="text" name="no_hp" id="no_hp" class="form-control" require>
			</div>
			<div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" value="Pria" required>
            <label class="form-check-label" for="jenis_kelamin_pria">Pria</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" value="Wanita" required>
            <label class="form-check-label" for="jenis_kelamin_wanita">Wanita</label>
        </div>
    </div>
</div>
			<div class="mb-3">
				<label for="jurusan" class="form-label">Jurusan</label>
				<select class="form-select" name="jurusan" id="jurusan" require>
					<option value="Informatika">Informatika</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat" rows="3" require></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Simpan <img src="https://img.icons8.com/?size=20&id=59875&format=png&color=FFFFFF" alt=""></button>
			<a href="tampil_data.php" class="btn btn-secondary">Kembali <img src="https://img.icons8.com/?size=20&id=101380&format=png&color=FFFFFF" alt=""></a>
		</form>
		<br><br>
	</div>
</body>
</html>

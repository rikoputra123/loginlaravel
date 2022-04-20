<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>

    <a class="tombol" href="inputdata">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>		
		</tr>
        @foreach($siswa as $s)
        <tr>
        <td>{{ $s->id }}</td>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->alamat }}</td>
			<td>{{ $s->pekerjaan }}</td>
            <td>
            <a href="/edit/{{ $s->id }}">Edit</a>
            |
				<a href="/nama/hapus/{{ $s->nama }}">Hapus</a>
                </td>    
        @endforeach
		</td>
        </table>
</body>
</html>
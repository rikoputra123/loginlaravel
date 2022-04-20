<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>

	<h3>Edit table</h3>
 
	<a href="/create"> Kembali</a>
	
	<br/>
	<br/>
	@foreach($siswa as $s)
	<form action="/create/update" method="post">
		@csrf
		id<input type="hidden" name="id" value="{{ $s['id'] }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $s->nama}}"> <br/>
		alamat <input type="texta" required="required" name="alamat" value="{{ $s->alamat}}"> <br/>
		pekerjaan <textarea required="required" name="pekerjaan">{{ $s->pekerjaan }}</textarea> <br/>
		<td><input type="submit" value="Simpan Data"></td>			
	</form>
	@endforeach
	
		
 
</body>
</html>
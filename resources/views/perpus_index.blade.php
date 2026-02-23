<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <title>Perpustakaan</title> 
    <style> 
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; } 
        .card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; width: 300px; }
        h2 { color: #2c3e50; } 
    </style> 
</head> 
<body> 
    <div class="card"> 
        <h2>Selamat Datang di Perpustakaan Codex</h2> 
    </div> 
 
    <h3>Daftar Judul Buku:</h3> 
    <ul> 
        @foreach($data_buku as $judul)
            <li>{{ $judul }}</li> 
        @endforeach 
    </ul> 
</body> 
</html> 

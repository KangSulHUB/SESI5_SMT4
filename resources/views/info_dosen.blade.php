<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <title>Info Dosen</title> 
    <style> 
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; } 
        .card { border: 1px solid #ddd; padding: 15px; borderradius: 8px; width: 300px; }         h2 { color: #2c3e50; } 
    </style> 
</head> 
<body> 
    <div class="card"> 
        <h2>Profil Dosen</h2> 
        <p><strong>Nama:</strong> {{ $nama }}</p> 
        <p><strong>Matakuliah:</strong> {{ $mata_kuliah }}</p> 
        <p><strong>Tahun Ajaran:</strong> {{ $tahun }}</p>
    </div> 
 
    <h3>Daftar Mahasiswa:</h3> 
    <ul> 
        @foreach($list_mhs as $mhs) 
            <li>{{ $mhs }}</li> 
        @endforeach 
    </ul> 
</body> 
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembagian</title>
    
</head>
<body>
    <h3>Matematika sederhana</h3>
    <p>Pembagian</p>
    <form action="{{ route('bagi-action') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan Angka" name="angka1" required>

        <label for="">angka 2</label>
        <input type="text" placeholder="Masukkan Angka" name="angka2" required>
        <br><br>
        <button>Bagikan</button>
    </form>
    
    <h2>Jumlahnya adalah :{{ $jumlah ?? 0 }}</h2>
</body>
</html>
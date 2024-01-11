<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perhitungan Luas Persegi</title>
</head>
<body>

<h1>Formulir Perhitungan Luas Persegi</h1>

<form action="/luas-persegi" method="post">
    @csrf
    <label for="sisi">Panjang Sisi:</label>
    <input type="text" name="sisi" id="sisi" required>
    <br>
    <button type="submit">Hitung Luas</button>
</form>

</body>
</html>

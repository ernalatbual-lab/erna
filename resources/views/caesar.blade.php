<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">
</head>
<body>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">
<h2>Program Caesar Cipher</h2>

<form method="POST" action="/process">
    @csrf
    
    <label>Text:</label><br>
    <input type="text" name="text" value="{{ $text ?? '' }}"><br><br>

    <label>Kunci:</label><br>
    <input type="number" name="shift" value="{{ $shift ?? '' }}"><br><br>

    <button type="submit" name="mode" value="encrypt">Enkripsi</button>
    <button type="submit" name="mode" value="decrypt">Dekripsi</button>
</form>

<br>

@if(isset($result))

<h3>Hasil</h3>

@if($mode == "encrypt")

<p><b>Plaintext :</b> {{ $text }}</p>
<p><b>Kunci :</b> {{ $shift }}</p>
<p><b>Ciphertext :</b> {{ $result }}</p>

@else

<p><b>Ciphertext :</b> {{ $text }}</p>
<p><b>Key :</b> {{ $shift }}</p>
<p><b>Plaintext :</b> {{ $result }}</p>

@endif

@endif

</body>
</html>
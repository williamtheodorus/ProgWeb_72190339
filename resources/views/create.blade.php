<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/mahasiswa">Tambah Data Mahasiswa</a>
    </nav>
        <form method="post" action="/mahasiswa/save">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">NIM</label>
            <input type="number" class="form-control" name="nim" placeholder="Masukkan nim">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
        </div>
        <label for="exampleFormControlInput1">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
            <label class="form-check-label" for="exampleRadios1">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
            <label class="form-check-label" for="exampleRadios2">
                Perempuan
            </label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlSelect1">Jurusan</label>
            <select class="form-control" name="jurusan">
            <option>Pilih Jurusan</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
        </div>
        <label for="exampleFormControlInput1">Bahasa</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Indonesia" name="bahasa[]">
            <label class="form-check-label" for="defaultCheck1">
                Indonesia
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Inggris" name="bahasa[]">
            <label class="form-check-label" for="defaultCheck1">
                Inggris
            </label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="Mandarin" name="bahasa[]">
            <label class="form-check-label" for="defaultCheck1">
                Mandarin
            </label>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="SIMPAN">
        <div>
        </form>
    </div>
</body>
</html>

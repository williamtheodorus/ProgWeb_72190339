<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
        <a class="navbar-brand" href="/dosen/ubah">Ubah Data Dosen</a>
    </nav>
    <form method="post" action="/dosen/update/{{ $dos->id }}">
        @csrf <!-- {{ csrf_field() }} -->
        @method('PUT') <!-- {{ method_field('PUT') }} -->
        @php
        $bhs = array();
        $bhs = explode(',', $dos->bahasa);
        @endphp
        <input type="hidden" name="id" id="id" value="@php echo $dos->id @endphp">
        <div class="form-group">
            <label for="exampleFormControlInput1">NID</label>
            <input type="number" class="form-control" name="nid" id="nid" value="@php echo $dos->nid @endphp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="@php echo $dos->nama @endphp">
        </div>
        <label for="exampleFormControlInput1">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki"
            @php if (($dos->jenis_kelamin)=='Laki-laki') echo 'checked' @endphp>
            <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"
            @php if (($dos->jenis_kelamin)=='Perempuan') echo 'checked' @endphp>
            <label class="form-check-label" for="exampleRadios2">Perempuan</label>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlSelect1">Pilih Jurusan</label>
            <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
            <option value="0">Pilih Jurusan</option>
            <option value="Informatika"
                @php if (($dos->jurusan)=='Informatika') echo 'selected' @endphp>Informatika</option>
            <option value="Sistem Informasi"
                @php if (($dos->jurusan)=='Sistem Informasi') echo 'selected' @endphp>Sistem Informasi</option>
            </select>
        </div>
        <label for="exampleFormControlInput1">Bahasa</label>
        <div class="form-check">
            <input class="form-checkinput" type="checkbox" name="bahasa[]" value="Indonesia"
            <?php in_array('Indonesia',$bhs) ? print 'checked' : ''; ?>>
            <label class="form-check-label" for="defaultCheck1">Indonesia</label>
        </div>
        <div class="form-check">
            <input class="form-checkinput" type="checkbox" name="bahasa[]" value="Inggris"
            <?php in_array('Inggris', $bhs) ? print 'checked' : ''; ?>>
            <label class="form-check-label" for="defaultCheck1">Inggris</label>
        </div>
        <div class="form-check">
            <input class="form-checkinput" type="checkbox" name="bahasa[]" value="Mandarin"
            <?php in_array('Mandarin', $bhs) ? print 'checked' : ''; ?>>
            <label class="form-check-label" for="defaultCheck1">Mandarin</label>
        </div>
        <br />
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="SIMPAN">
        </div>
        </form>
    </div>
</body>
</html>

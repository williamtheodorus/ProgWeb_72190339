<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <a class="navbar-brand" href="/contact/rubah">Ubah Data Contact</a>
    </nav>
    <form method="post" action="/contact/update/{{ $con->id }}">
        @csrf <!-- {{ csrf_field() }} -->
        @method('PUT') <!-- {{ method_field('PUT') }} -->
        <input type="hidden" name="id" id="id" value="@php echo $con->id @endphp">
        <div class="form-group">
            <label for="exampleFormControlInput1">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="@php echo $con->alamat @endphp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Kota</label>
            <input type="text" class="form-control" name="kota" id="kota" value="@php echo $con->kota @endphp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Telepon</label>
            <input type="text" class="form-control" name="telepon" id="telepon" value="@php echo $con->telepon @endphp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fax</label>
            <input type="text" class="form-control" name="fax" id="fax" value="@php echo $con->fax @endphp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="@php echo $con->email @endphp">
        </div>
        <br />
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="SIMPAN">
        </div>
        </form>
    </div>
</body>
</html>

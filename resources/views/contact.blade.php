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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SIA UKDW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Master Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dosen">Data Dosen</a>
                <a class="dropdown-item" href="/mahasiswa">Data Mahasiswa</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact">Contact</a>
        </li>
        </ul>
        <a class="btn btn-danger" href="/logout" role="button">Log Out</a>
    </div>
    </nav>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Telepon</th>
                <th scope="col">Fax</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach($con as $c)
            <tr>
                <td>{{ $c->alamat }}</td>
                <td>{{ $c->kota }}</td>
                <td>{{ $c->telepon }}</td>
                <td>{{ $c->fax }}</td>
                <td>{{ $c->email }}</td>
                <td>
                    <a class="btn btn-warning" href="/contact/rubah/{{$c->id}}" role="button">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>

        <div class="jumbotron"><br>
        <hr class="my-4">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.openstreetmap.org/export/embed.html?bbox=110.37736415863039%2C-7.7869279114729135%2C110.3794187307358%2C-7.785328108004714&amp;layer=mapnik&amp;marker=-7.7861280105023%2C110.37839144468307"
            style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-7.78613&amp;mlon=110.37839#map=19/-7.78613/110.37839"></a></small>
            <hr class="my-4">
        </div>
    </div>
</body>
</html>

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
    @if(session('tambah'))
    <div class="alert alert-success" role="alert">
        {{session('tambah')}}
    </div>
    @endif
    @if(session('ubah'))
    <div class="alert alert-success" role="alert">
        {{session('ubah')}}
    </div>
    @endif
    @if(session('hapus'))
    <div class="alert alert-success" role="alert">
        {{session('hapus')}}
    </div>
    @endif
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
        <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
        </li>
        </ul>
        <a class="btn btn-danger" href="/logout" role="button">Log Out</a>
    </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <h1>Data Dosen</h1>
    </nav>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-primary" href="/dosen/tambah" role="button">Tambah Data</a><br>
        <form method="GET" action="/dosen/search">
            <input name="key" value="@php echo old('cari') @endphp" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Bahasa</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @php $no=1; @endphp
        @foreach($dos as $d)
            <tr>
                <th scope="row"><?php echo e($no++) + (($dos->currentPage()-1) * $dos->perPage()) ?></th>
                <td>{{ $d->nid }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->jenis_kelamin }}</td>
                <td>{{ $d->jurusan }}</td>
                <td>{{ $d->bahasa }}</td>
                <td>
                    <a class="btn btn-warning" href="/dosen/ubah/{{$d->id}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="/dosen/hapus/{{$d->id}}"
                    onclick="return confirm('Apakah Anda yakin data akan dihapus ?')" role="button">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    Halaman : {{ $dos->currentPage() }}<br>
	{{ $dos->links() }}
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="shortcut icon" href="{{ asset('img/sam.png') }}" type="image/x-icon">
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!--Css-->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/all.min.css') }}">


</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ ('img/sam.png') }}" width="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('about') }}">Blog</a>
                    <a class="nav-item nav-link" href="{{ url('service') }}">Service</a>
                    <a class="nav-item nav-link" href="#Contact">Contact</a>
                    <a class="nav-item nav-link" href="{{ url('mahasiswa') }}">Students</a>
                    <a class="nav-item btn btn-danger tombol" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
        <div class="row">
            <div class="col-12 d-flex">
                <h1 class="mt-2">Daftar Siswa</h1>
                <div class="ml-auto mt-4">
                    <a href="/students/create" class="btn btn-primary "><i class="mr-2 fas fa-plus"></i>Add Data</a>
                </div> 
            </div>
            <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $std)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $std->nama }}</td>
                            <td>{{ $std->nisn }}</td>
                            <td>{{ $std->email }}</td>
                            <td>{{ $std->jurusan }}</td>
                            <td>
                                <a href="students/{{ $std->id }}/edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a> |
                                <form action="students/{{ $std->id }}" method="post" class="d-inline"> 
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>









    <!-- Font Awesome JS -->
    <script type="text/javascript" src="{{ asset('bootstrap/js/fontawesome.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.js')}}"></script>
</body>

</html>

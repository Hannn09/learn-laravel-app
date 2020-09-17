<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
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
                <img src="{{ asset('img/sam.png') }}" width="60">
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
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data</h1>

                <form method="post" action="/students">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error ('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control @error ('nisn') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{ old('nisn') }}">
                        @error ('nisn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                        @error ('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        @error ('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> 
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>









    <!-- Font Awesome JS -->
    <script type="text/javascript" src="{{ asset('bootstrap/js/fontawesome.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.js')}}"></script>
</body>
</html>
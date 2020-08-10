<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Game On</title>
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
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home </a>
                    <a class="nav-item nav-link" href="{{ url('about') }}">Blog<span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('service') }}">Service</a>
                    <a class="nav-item nav-link" href="#Contact">Contact</a>
                    <a class="nav-item btn btn-danger tombol" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Blog -->

    <div class="container">
        <div class="row blog">
            <div class="col-md-12">
                <h3>Blog</h3>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/1.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Fortnine X Travis
                            Scott</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/2.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Upcoming: Crash
                            Bandicoot 4</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/3.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Expect about new Xbox
                            Series X</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/4.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">PS 5 for disabled
                            gamers</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/5.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">How to be a pro
                            player?</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/6.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Bored at home? </p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/7.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Mobile Games
                            competitive</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/8.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Tips and tricks play
                            FPS Games</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/blog/9.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="col-md-12">
                        <p class="date mt-2 font-weight-bold" style="font-size: 12px; font-weight: 500;">January 1,2020
                        </p>
                        <p class="secondary-color mb-4 font-weight-bold" style="font-size: 20px;">Tips and tricks play
                            RPG Games</p>
                        <a class="btn btn-danger" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-5 text-center mt-4 mb-4 pb-4">
                <button type="button" class="btn btn-danger pb-2 pt-2 btn-news"
                    style="border-radius: 30px; padding: 20px 30px 20px 30px;">Load More</button>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Footer -->
    <footer class="container-fluid pt-5" id="Contact">
        <div class="container mb-2">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="font-weight-bold">Stack <br> That Sale</h2>
                    <p class="mt-2" style="font-size: .8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Porro, dolorem.</p>
                    <p class="mt-3 icons-social" style="font-size: 1.6rem;">
                        <i class="mr-2 fab fa-facebook" style="color: #39579a;"></i>
                        <i class="mr-2 fab fa-twitter" style="color: #69ace0;"></i>
                        <i class="mr-2 fab fa-instagram" style="color: #ef96b4;"></i>
                        <i class="mr-2 fab fa-linkedin" style="color: #007bb5;"></i>
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <ul style="list-style: none;">
                                <li class="mb-4 font-weight-bold">Resource</li>
                                <li class="mb-2">Home</li>
                                <li class="mb-2">About</li>
                                <li class="mb-2">Services</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul style="list-style: none;">
                                <li class="mb-4 font-weight-bold">Services</li>
                                <li class="mb-2">Explore Upcoming Games</li>
                                <li class="mb-2">Explore Top Games</li>
                                <li class="mb-2">Pre-Order Upcoming Games</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul style="list-style: none;">
                                <li class="mb-4 font-weight-bold">Company</li>
                                <li class="mb-2">Add 47 Plumbon, Pandaan</li>
                                <li class="mb-2">Tel: 082146430331</li>
                                <li class="mb-2">Email: reihanalmas@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center bg-secondary py-3">
                <p class="mb-0 text-white">@2020 Reihan Almas Hediawan</p>
            </div>
        </div>
    </footer>








    <!-- Font Awesome JS -->
    <script type="text/javascript" src="{{ asset('bootstrap/js/fontawesome.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/all.js')}}"></script>
</body>

</html>

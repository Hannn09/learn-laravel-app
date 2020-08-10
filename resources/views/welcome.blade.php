<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Game On</title>
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
                    <a class="nav-item btn btn-danger tombol" href="#">Join Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Opening -->
    <div class="container">
        <div class="row opening">
            <div class="col">
                <h3>Explanation 1 minute video about game</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam molestias, quis at voluptatum
                    facilis debitis assumenda provident iusto, repellat ipsam quod sapiente atque vero. Illum facilis
                    unde nesciunt in libero.</p>
                <a href="" class="btn btn-danger tombol">Play it</a>
            </div>
            <div class="col">
                <img src="{{ ('img/p.png') }}" alt="p" class="img-fluid">
            </div>
        </div>
        <!-- End -->

        <!-- Description -->
        <div class="row description">
            <div class="col">
                <img src="{{ ('img/k.png') }}" alt="k" class="img-fluid ">
            </div>
            <div class="col">
                <h3>The visitor of your brand site deserve for the clear understanding of your office</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sed sint ipsum maiores quos, molestiae,
                    corrupti magni obcaecati vitae ab temporibus consequatur mollitia numquam tenetur libero. Id quae
                    nulla praesentium?</p>
            </div>
        </div>
        <!-- End -->

        <!-- Recommended -->
        <div class="row recommended">
            <div class="col-md-12">
                <h3>Coming soon</h3>
            </div>
            <div class="col-md-6">
                <div class="parent">
                    <img src="{{ ('img/1s.png') }}" alt="1" class="w-100" style="height: 300px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="parent">
                    <img src="{{ ('img/2s.png') }}" alt="2" class="w-100" style="height: 300px;">
                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Top Game -->
        <div class="row top pb-5">
            <div class="col-md-12">
                <h3>Explore Top Games</h3>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/1.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">COD: Modern Warfare</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/xboxs.png') }}" alt="xbox">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/2.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Death Stranding</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/pss.png') }}" alt="ps">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/3.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Read Dead Redemption</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/xboxs.png') }}" alt="xbox">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/4.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Assasin Creed: Odyssey</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/pss.png') }}" alt="ps">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius:10px;">
                    <img src="{{ ('img/card/5.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">The Last of Us </p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/pss.png') }}" alt="ps">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/6.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Grand Theft Auto V</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/xboxs.png') }}" alt="xbox">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/7.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Far Cry: New Dawn</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/xboxs.png') }}" alt="xbox">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="padding-bottom: 15px; margin-top: 20px; border-radius: 10px;">
                    <img src="{{ ('img/card/8.jpg') }}"
                        style="width: 100%; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                    <div class="container">
                        <div class="col-md-12">
                            <p class="new-title mt-4" style="font-weight: bold;">Doom Eternal</p>
                            <p class="secondary-color mb-4" style="font-size: 15px;">US$59,99</p>
                        </div>
                        <img src="{{ ('img/xboxs.png') }}" alt="xbox">
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->

    </div>
    <!-- Info -->
    <div class="container-fluid">

        <div class="row info p-4">
            <div class="col-md-6 mt-5">
                <div class="card text-center" style="border-radius: 15px;">
                    <div class="card-body">
                        <h3 class="card-title">Show us what you are made of</h3>
                        <p class="card-text">The ultimate battle begin on Saturday. Join the team and stand a chance to
                            win epic prizes.</p>
                        <h5 class="new-info">Tournament begins in</h5>
                        <img src="{{ ('img/os.png') }}" alt="os" style="height: 90px;">
                    </div>
                    <a href="#" class="btn btn-danger button"
                        style="border-radius: 20px; width: 80%; margin-left: 50px; margin-bottom: 30px;">Join Team</a>
                </div>
            </div>
        </div>
    </div>

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

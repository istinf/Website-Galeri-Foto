<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                Galeri Foto
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1"  href="/">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link nav-link-1" href="home">My Photos</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" href="detail">Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link nav-link-1" aria-current="page" style="background-color: white; border:none;" >Logout</button>
                    </form>
                </li>

            </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Detail Foto</h2>
        </div>
        <div class="row tm-mb-90">   
            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12">
                <img src="{{asset('/upload_images/'.$data->image)}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12">
                <div class="tm-bg-gray tm-video-details">                    
                    <div class="mb-2 d-flex flex-wrap">
                        <div class="mr-4">
                            <h3 class="tm-text-gray-dark">{{ $data->category }}</h3>
                            <span class="tm-text-gray-dark">{{ $data->tglUpdate }}</span>
                        </div>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark-bold mb-3">{{ $data->caption }}</span><span class="tm-text-gray-dark"></span>
                    </div>
                    <!-- <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark-bold mb-3">Category : </span><span class="tm-text-gray-dark">{{ $data->category }}</span>
                    </div> -->
                    <!-- <div class="mr-4 mb-2">
                        <span class="tm-text-gray-dark-bold mb-3">Tanggal Update : </span><span class="tm-text-gray-dark">{{ $data->tglUpdate }}</span>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
        @foreach($category as $i)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item" style="width: 100%; height:200px;">
                    <img src="{{asset('upload_images/'.$i->image)}}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Lihat Gambar</h2>
                        <a href="{{ URL::to('/detail/'.$i->id) }}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{ $i->tglUpdate }}</span>
                </div>
            </div>
        @endforeach      
        </div> <!-- row -->
    </div> 

    <footer class="tm-bg-gray pt-4 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class=" col-md-6 col- px-5 ">
                    <h3 class="tm-text-primary mb-4 tm-footer-title"></h3>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Galeri Foto</h3>
            
                </div>
            </div>
            <div class="row">
            <div class=" col-md-6 col- px-5 ">
                    <h3 class="tm-text-primary mb-4 tm-footer-title"></h3>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    Isti Nurul Fatimah | UKK 2024
                </div>
            </div>
        </div>
    </footer>
    
    
    <script src="{{asset('master/js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>

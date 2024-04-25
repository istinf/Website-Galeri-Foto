
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/templatemo-style.css')}}">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
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
                    <a class="nav-link nav-link-1" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="home">My Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1" aria-current="page" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">Create</a>
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

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create Photo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data" style="color: black;">
                     @csrf
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image :</label>
                        <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Caption :</label>
                        <textarea name="caption" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input Caption" style="color: black;" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="select" class="form-label">Category :</label>
                        <select name="category" class="form-select form-control" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Hewan">Hewan</option>
                            <option value="Tumbuhan">Tumbuhan</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Panorama">Panorama</option>
                            <option value="Jurnalisme">Jurnalisme</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Teman">Teman</option>
                            <option value="Keluarga">Keluarga</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Update :</label>
                        <input name="tglUpdate" type="date" class="form-control" id="tanggalUpdate">
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" method="POST">Submit</button>
            </div>
            </form>

            </div>
        </div>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                My Photos
            </h2>
            <!-- <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div> -->
        </div>
        <div class="row tm-mb-90 tm-gallery">
            @foreach($data as $i)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item size-img">
                    <img src="{{asset('/upload_images/'.$i->image)}}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Lihat Gambar</h2>
                        <a href="{{ URL::to('/detail/'.$i->id) }}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{ $i->tglUpdate }}</span>
                </div>
                <form action="/destroy/{{ $i->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            @endforeach
        </div> <!-- row -->
        <!-- <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div> -->
    </div> <!-- container-fluid, tm-container-content -->
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
    @include('sweetalert::alert')
</body>
</html>

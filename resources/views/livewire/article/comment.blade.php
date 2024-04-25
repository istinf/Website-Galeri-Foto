<!-- <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<div>
    <h3 class="mb-4">(0) Comments</h3>
    @auth
    <form wire:submit.prevent="store" class="mb-4">
        <div class="mb-3">
            <textarea wire:model.defer="body" rows="2" class="form-control" placeholder="Tulis Komentar..."></textarea>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </div>
    </form>
    @else
    <div class="alert alert-primary" role="alert">
        Login dulu untuk berkomentar <a href="{{ route('login')}}">klik disini!</a>
    </div>
    @endauth
    
    @foreach (range(1,3) as $item)
    <div class="mb-3">
        <div class="d-flex align-items-start mb-3">
            <img src="/assets/profile.png" class="img-fluid rounded-circle me-2" width="50" alt="">
            <div>
                <div>
                    <span>Isti</span>
                    <span>24 April 2024</span>
                </div>
                <div class="text mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas obcaecati eveniet, nam,
                </div>
                <div>
                    <button class="btn btn-sm btn-primary">Balas</button>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                    <button class="btn btn-sm btn-danger">
                        <img src="/assets/heart-fill.svg">    
                    (2)</button>
                </div>
            </div>                       
        </div>
        <div class="d-flex align-items-start ms-6">
            <img src="/assets/profile.png" class="img-fluid rounded-circle me-2" width="50" alt="">
            <div>
                <div>
                    <span>Isti</span>
                    <span>24 April 2024</span>
                </div>
                <div class="text mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas obcaecati eveniet, nam,
                </div>
                <div>
                    <button class="btn btn-sm btn-primary">Balas</button>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                    <button class="btn btn-sm btn-danger">
                        <img src="/assets/heart-fill.svg">
                    (2)</button>
                </div>
            </div>                       
        </div>
        <hr>
    </div>
    @endforeach
</div> -->
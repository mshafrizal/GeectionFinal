@extends('layout.mainlayout')

@section('content')
    <main role="main">
        <div class="container">
            <!-- Carousel -->
            <div id="imageCarousel" class="carousel slide" data-ride="carousel" style="margin-top:10px; padding-left:8px;padding-right:8px;">
                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel" data-slide-to="1"></li>
                    <li data-target="#imageCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="http://via.placeholder.com/1000x250" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="http://via.placeholder.com/1000x250" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="http://via.placeholder.com/1000x250" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Kategori -->
            <br>
            <div class="row" style="justify-content:center;">
                <h4>Kategori</h4>
            </div>
            <hr>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm">
                        <a href="" class="custom-card">
                            <div class="card" style="max-width:15rem; margin:8px;">
                                <img src="{{ asset('img/kelli-tungay.png') }}" alt="Card image cap" class="card-img-top">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="font-size:1.5vw;">{{$product->kategori}}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Baris Produk -->
            <br>
            <div class="row" style="justify-content:center;">
                <h4>Produk</h4>
            </div>
            <hr>
            <div class="row">
            @foreach($products as $product)
                <div class="col-sm">
                    <a href="#" class="custom-card">
                        <div class="card" style="max-width:15rem; margin:8px;">
                            <img src="{{ asset('img/kelli-tungay.png') }}" alt="Card image cap" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title" style="font-size:2vw;">{{$product->nama}}</h5>
                                <h6 class="card-title" style="font-size:1.5vw;">Ambil harga dr DB</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection
@extends('layout.mainlayout')

@section('content')
    <main role="main">
        <div class="container">
            <!-- sorting column -->
            <div class="col-sm-4">
                <ul>
                    <li><h6>Sort by</h6></li>
                    <li>Harga awal</li>
                        <ul>
                            <li>Terendah</li>
                            <li>Tertinggi</li>
                        </ul>
                    <li>Rating</li>
                    <li>Kondisi</li>
                </ul>
            </div>
            <!-- product column -->
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm-2">
                        <figure class="card card-product">
                            <div class="img-wrap"> 
                                <img src="images/items/3.jpg">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div>
                            <figcaption class="info-wrap">
                                <h6 class="title text-dots"><a href="#">{{$product->nama}}</a></h6>
                                <div class="action-wrap">
                                    <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                                    <div class="price-wrap h5">
                                        <span class="price-new">$1280</span>
                                        <del class="price-old">$1980</del>
                                    </div> <!-- price-wrap.// -->
                                </div> <!-- action-wrap -->
                            </figcaption>
                        </figure> <!-- card // -->
                    </div> <!-- col // -->
                @endforeach
            </div>
        </div>
    </main>
@endsection
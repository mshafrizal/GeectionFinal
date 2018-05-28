@extends('layout.mainlayout')

@section('content')
<div class="container">
      <h2>Lelang barang mu!</h2><br/>
      <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Nama Barang :</strong>
            <input type="text" class="form-control" name="nameB">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <strong>Harga mulai :</strong>
              <input type="text" class="form-control" name="harga">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          	<strong>Image :</strong>
            <input type="file"  name="image">    
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Kategori</strong>
                <select name="kategori">
                  <option value="Mumbai">handphone</option>
                  <option value="Chennai">laptop</option> 
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <strong>Tentang Barang :</strong>
              <textarea class="form-control" name="description" placeholder="Description" id="description"></textarea>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>

@endsection
@extends('layouts.item')

  @section('container')

 

    <div class="col-lg-9">
    <div class="card mt-4">
    <div class="card text-center">
      <div class="card-header">
        <div class="ml-3 d-inline-block align-middle">
          <span class="text-muted font-weight-normal font-italic d-block"> 
          @foreach ($product -> categories as $category)
            Catégorie: {{ $category->name }}
          @endforeach 
        </span>
        </div>
      </div>
      <div class="card-body">
        <img class="card-img-top img-fluid" src=" {{ asset('storage/'. $product->image) }}" alt="">
      </div>
      <div class="card-footer text-muted">
        <h3 class="card-title">{{ $product->title }}</h3>
        <h6 mb-1 text-muted >{{ $product->created_at->format('d/m/Y') }}</h6>
        <p class="card-text">{!!$product->description !!}</p>
        <h4>{{$product->getPrice() }}</h4>
      </div>
    </div>
    

    <div class="card text-center">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <form action="{{ route('cart.store') }}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="product_id" value=" {{ $product->id }} ">
          <button type="submit" class="btn btn-success"><i class="fal fa-shopping-cart" aria-hidden="true"></i> Ajouter au panier</button>
        </form>
      </div>
      <div class="card-footer text-muted">
        Posté le: {{ $product->created_at->format('d/m/Y') }}
      </div>
    </div>

  </div>

    <!-- /.card -->
  </div>
  @endsection
@extends('layouts.master')

  @section('content')
    @foreach ($products as $product)
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
              <!-- Remplacer par l'image de la base de donnée -->
          <a href="#"><img class="card-img-top" src="{{asset('storage/'. $product->image) }}" alt=""></a>
          <div class="card-body">
              <h4 class="card-title">
              <a href="#">{{ $product->title }}</a>
              </h4>
              <h6 mb-1 text-muted >{{ $product->created_at->format('d/m/Y') }}</h6>
              
              <p class="card-text">{{$product->subtitle }}</p>
              <strong class="display-6">{{$product->getPrice() }}</strong>
          </div>
          <div class="ml-3 d-inline-block align-middle">
            <span class="text-muted font-weight-normal font-italic d-block"> 
            @foreach ($product -> categories as $category)
              {{ $category->name }}
            @endforeach 
          </span>
          </div>
          <div class="card-footer">
              <a href="{{ route('products.show', $product->slug) }}" class="stretched-link btn btn-info text-white" style="width: 100%"><i class="fas fa-angle-right"></i> <strong>Consulter l'article</strong></a>
          </div>
          </div>
      </div>
    @endforeach
    {{ $products -> appends(request() -> input()) -> links() }}
  @endsection
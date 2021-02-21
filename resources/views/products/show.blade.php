@extends('layouts.item')

  @section('container')

    <div class="mt-4 col-lg-9">
    <div class="card text-center">
      <div class="card-header">
        <div class="ml-3 d-inline-block align-middle">  
          <span class="text-muted font-weight-normal font-italic d-block">
            <div class="badge badge-pill badge-info"> {{ $stock }} </div>
          @foreach ($product -> categories as $category)
            Catégorie: {{ $category->name }}{{ $loop->last ? '' : ', '}}
          @endforeach 
        </span>
        </div>
      </div>
      <div class="card-body">
        <img class="card-img-top img-fluid" src=" {{ asset('storage/'. $product->image) }}" id="mainImage" style="width: 500px">
      </div>
      <div class="card-footer text-muted">
        <h3 class="card-title">{{ $product->title }}</h3>
        <p class="card-text">{!!$product->description !!}</p>
        <h4>{{$product->getPrice() }}</h4>
      </div>
    </div>
    

    <div class="card text-center mt-4">
      <div class="card-header">
          <strong class="text-muted font-weight-normal font-italic" > Galérie d'images</strong> <br>
          <div class="mt-2">
            @if ($product->images)
            <img src=" {{ asset('storage/'. $product->image) }}" width="50" class="img-thumbnail">
              @foreach (json_decode($product->images, true)  as $image)
              <img src=" {{ asset('storage/'. $image) }}" width = "50" class="img-thumbnail">
              @endforeach
            @endif
          </div>
      </div>
      <div class="card-body">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        @if ($stock === 'Disponible')
          <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value=" {{ $product->id }} ">
            <button type="submit" class="btn btn-success"><i class="fal fa-shopping-cart" aria-hidden="true"></i> Ajouter au panier</button>
          </form>
        @endif
      </div>
      <div class="card-footer text-muted">
        Posté le: {{ $product->created_at->format('d/m/Y') }}
      </div>
    </div>

  </div>

    <!-- /.card -->

  
  @endsection

  @section('extra-js')
  <script>
    var mainImage = document.querySelector('#mainImage');
    var thumbnails = document.querySelectorAll('.img-thumbnail');

    thumbnails.forEach((element) => element.addEventListener('click', changeImage));

    function changeImage(e) {
      mainImage.src = this.src;
    }
  </script>
@endsection 
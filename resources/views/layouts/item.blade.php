<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title> 🛒 Shop - Item</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">
  <style>
    body {
      padding-top: 56px;
  }
  </style>


@yield('extra-meta')
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('products.index')}} "> 🛒 ShopLand</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href=" {{ route('products.index')}} ">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{ route('cart.index') }} "> Panier <span class="badge badge-pill badge-danger"> {{ Cart::count() }} </span></a>
          </li>
          <li>
            @include('partials.auth')
          </li>
        </ul>
        
      </div>
      
    </div>
    
  </nav>
  
    <!-- /.col-lg-3 -->

    
    <!-- /.col-lg-9 -->
    

  <!-- Page Content -->
  <div class="container">
    <div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            @foreach (App\Category::all() as $category)
              <a href=" {{ route('products.index', ['categorie' => $category -> slug]) }}" class="list-group-item"> {{ $category -> name }} </a>
            @endforeach
            
          </div>
          
        </div>
        <div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" style="margin-right: 7%">
          <img class="d-block img-fluid" alt="First slide" src="{{ asset('img/shop.jpg') }}" style="height: 400px; width:100%; ">
        
          <div class="row" style="margin-right: -36%">
            @yield('container')
          </div>

      </div>
      </div>
        
    </div>
    
  </div>
  <!-- /.container -->
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../public/jquery/jquery.min.js"></script>
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>

  @yield('extra-js')
</body>

</html>

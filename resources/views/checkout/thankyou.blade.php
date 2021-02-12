@extends('layouts.master')

@section('content')

    <div class="card text-center">
      <div class="card-header">
        <div class="ml-3 d-inline-block align-middle">
          <span class="text-muted font-weight-normal font-italic d-block"> 
            <h6 class="display-6">FIN DES OPERATION</h6>
        </span>
        </div>
      </div>
      <div class="card-body">
        <div class="jumbotron text-center">
            <h1 class="display-3">Merci!</h1>
            <p class="lead"><strong>Votre commande a été traitée avec succès</strong></p>
            <hr>
            <p>
                Vous rencontrez un problème? <a href="#">Nous contacter</a>
            </p> 
        </div>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-header">
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}" role="button">Continuer vers la boutique</a>
        </p>
      </div>
    </div>
    <!-- /.card -->
@endsection

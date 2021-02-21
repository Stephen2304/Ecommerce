@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <h3 class="text-muted text-center">Visitez a la <a  href="{{ route('products.index')}} "> boutique</a> !</h3> 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach (Auth()->user()->orders as $order)
                    <div class="card mt-4">
                        <div class="card">
                          <div class="card-header">
                            Commande(s) passée(s) le {{ Carbon\Carbon::parse($order->payment_created_at)
                            -> format('d/m/Y à H:i') }} d'un montant de <strong> {{ getPrice($order->amount ) }} </strong>
                          </div>
                          <div class="card-body">
                            <h6> <strong>Liste des produits de la commande</strong></h6>
                            @foreach (unserialize($order->products) as $product)
                            <ul>
                                <li><div> <strong>Nom du produit:</strong>  {{ $product[0] }}</div></li>
                                <li><div><strong>Prix:</strong> {{ getPrice($product[1]) }}</div></li>
                                <li><div><strong>Quantité: </strong>{{ $product[2] }}</div></li>
                            </ul>
                                
                                
                                
                            @endforeach
                          </div>
                        </div>
                    </div>
                          
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

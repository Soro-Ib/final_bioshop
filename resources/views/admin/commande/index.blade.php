
@extends('partials_view.adminTemplate')

@section('title', 'Commandes')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Produits Bioshop</h5>
                        {{-- <button class="btn btn-primary">
                            <a href="{{ route('produit.create') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                                <i class="fa fa-plus mr-1"></i>Ajouter
                            </a>
                        </button> --}}
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>
                        <tr>
                            <th scope="col">Nom du client</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Résidence</th>
                            <th scope="col">Soubrara 250 g</th>
                            <th scope="col">Piment 250 g</th>
                            <th scope="col">Soubrara 500 g</th>
                            <th scope="col">Piment 500 g</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $commande)
                                <tr>
                                    <td>{{$commande->nom}}</td>
                                    <td>{{$commande->telephone}}</td>
                                    <td>{{$commande->address}}</td>
                                    <td>{{$commande->soubara_500}}</td>
                                    <td>{{$commande->soubara_1000}}</td>
                                    <td>{{$commande->piment_500}}</td>
                                    <td>{{$commande->piment_1000}}</td>
                                    <td><span class="badge bg-success">Validé</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
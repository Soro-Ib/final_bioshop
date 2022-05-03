
@extends('partials_view.adminTemplate')

@section('title', 'Produits')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Produits Bioshop</h5>
                        <button class="btn btn-primary">
                            <a href="{{ route('produit.create') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                                <i class="fa fa-plus mr-1"></i>Ajouter
                            </a>
                        </button>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Contenant</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Action</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td><img src="/images/products/{{$produit->image}}" alt="image" style="width: 100px; height: 70px"></td>
                                    <td>{{$produit->name}}</td>
                                    <td>{{$produit->contenant}} g</td>
                                    <td>{{$produit->prix}} Fcfa</td>
                                    <td>
                                        <a href="{{route('produit.show', $produit->id)}}"><button class="btn btn-warning"><i class="fas fa-pen"></i></button></a>
                                        <a href="{{route('produit.delete', $produit->id)}}" id="delete"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                    </td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
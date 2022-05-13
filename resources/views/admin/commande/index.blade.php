
@extends('partials_view.adminTemplate')

@section('title', 'Commandes')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Liste des commandes enregistrées</h5>
                        {{-- <button class="btn btn-primary">
                            <a href="{{ route('produit.create') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                                <i class="fa fa-plus mr-1"></i>Ajouter
                            </a>
                        </button> --}}
                    </div>
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">Nom du client</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Addesse</th>
                            <th scope="col">Panier</th>
                            <th scope="col">Action</th>
                            <th scope="col">Statut</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $commande)
                                <tr>
                                    <td>{{$commande->nom}}</td>
                                    <td>{{$commande->telephone}}</td>
                                    <td>{{$commande->address}}</td>
                                    <td>
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productModal{{$commande->id}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier
                                        </a>
                                    </td>
                                    <td>
                                        @if ($commande->status == 0)
                                            <span class="badge bg-primary"><a href="{{route('commande.valider', $commande->id)}}" style="color: white">Valider</a></span>
                                            <span class="badge bg-danger"><a href="{{route('commande.annuler', $commande->id)}}" style="color: white">Refuser</a></span>
                                        @elseif ($commande->status==1)
                                            <span class="badge bg-primary"><a href="{{route('commande.annuler', $commande->id)}}" style="color: white">Annuler</a></span>
                                        @else
                                        <span class="badge bg-primary"><a href="{{route('commande.valider', $commande->id)}}" style="color: white">Valider</a></span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($commande->status == 0)
                                            <span class="badge bg-warning">Non-livrée</span>
                                        @elseif ($commande->status==1)
                                            <span class="badge bg-success">Livrée</span>
                                        @else
                                            <span class="badge bg-danger">Annulée</span>
                                        @endif
                                    </td>

                                <div class="modal fade" id="productModal{{$commande->id}}" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h3 class="modal-title" style="color: blue">Liste des produits commandés</h3>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4 style="font-weight: bold">Nombres de boites</h4>
                                            <br>
                                            @if ($commande->soubara_500==null)
                                                <p>Soubara 250 g : <span style="color: red">0</span> boites</p>
                                            @else
                                                <p>Soubara 250 g : <span style="color: red">{{$commande->soubara_500}}</span> boites</p>
                                            @endif
                                            @if ($commande->soubara_1000==null)
                                                <p>Soubara 500 g : <span style="color: red">0</span> boites</p>
                                            @else
                                                <p>Soubara 500 g : <span style="color: red">{{$commande->soubara_1000}}</span> boites</p>
                                            @endif
                                            @if ($commande->piment_500==null)
                                                <p>Piment 250 g : <span style="color: red">0</span> boites</p>
                                            @else
                                                <p>Piment 250 g : <span style="color: red">{{$commande->piment_500}}</span> boites</p>
                                            @endif
                                            @if ($commande->piment_1000==null)
                                                <p>Piment 500 g : <span style="color: red">0</span> boites</p>
                                            @else
                                                <p>Piment 500 g : <span style="color: red">{{$commande->piment_1000}}</span> boites</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                      </div>
                                    </div>
                                  </div><!-- End Large Modal-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
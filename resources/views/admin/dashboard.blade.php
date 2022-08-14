
@extends('partials_view.adminTemplate')

@section('title', 'Admin-Bioshop')

@section('dashboard')
  <div class="row">
      <!-- Left side columns -->
          <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                    <h5 class="card-title">Revenue Soubara</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{$revenu_soubara}} FCFA</h6>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

              <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                  <h5 class="card-title">Revenue Piment</h5>
                  <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                      <h6>{{$revenu_piment}} FCFA</h6>
                      </div>
                  </div>
                  </div>
                </div>
            </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                  <div class="card-body">
                  <h5 class="card-title">Clients</h5>
                  <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                      <h6>{{$clients}}</h6>
                      </div>
                  </div>
                  </div>
              </div>

              </div><!-- End Customers Card -->

                  <div class="card-body">
                  <h5 class="card-title">Commandes recents</h5>

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
                            </tr>
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
              </div><!-- End Recent Sales -->
          </div><!-- End News & Updates -->
          </div><!-- End Right side columns -->
  </div>
@endsection

  

 
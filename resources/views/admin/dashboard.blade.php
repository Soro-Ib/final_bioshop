
@extends('partials_view.adminTemplate')

@section('title', 'Admin-Bioshop')

@section('dashboard')
  <div class="row">
      <!-- Left side columns -->
          <div class="col-lg-12">
          <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                      <h6>Filtre</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                      <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                      <li><a class="dropdown-item" href="#">Cette année</a></li>
                  </ul>
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">Ventes <span>| Aujourd'hui</span></h5>
                  <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                      <h6>145</h6>
                      </div>
                  </div>
                  </div>
              </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                      <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                      <li><a class="dropdown-item" href="#">Cette année</a></li>
                  </ul>
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">Revenue <span>| Ce mois-ci</span></h5>
                  <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                      <h6>$3,264</h6>
                      </div>
                  </div>
                  </div>
              </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                      <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                      <li><a class="dropdown-item" href="#">Cette année</a></li>
                  </ul>
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">Clients <span>| Cette année</span></h5>
                  <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                      <h6>1244</h6>
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
                                <td><span class="badge bg-success">Validé</span></td>
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
                                        <p>Soubara 250 g : <span style="color: red">{{$commande->soubara_500}}</span> boites</p>
                                        <p>Soubara 500 g : <span style="color: red">{{$commande->soubara_1000}}</span> boites</p>
                                        <p>Piment 250 g : <span style="color: red">{{$commande->piment_500}}</span> boites</p>
                                        <p>Piment 500 g : <span style="color: red">{{$commande->piment_1000}}</span> boites</p>
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

  

 
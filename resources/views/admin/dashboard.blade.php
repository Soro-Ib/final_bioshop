
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

                  <table class="table table-borderless datatable">
                      <thead>
                      <tr>
                          <th scope="col">Nom du client</th>
                          <th scope="col">téléphone du client</th>
                          <th scope="col">Résidence</th>
                          <th scope="col">Nombre de boites</th>
                          <th scope="col">Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>Soro Ibrahim</td>
                          <td>0707018421</td>
                          <td>Williamsville</td>
                          <td>10</td>
                          <td><span class="badge bg-success">Validé</span></td>
                      </tr>
                      </tbody>
                  </table>
                  </div>
              </div>
              </div><!-- End Recent Sales -->
          </div><!-- End News & Updates -->
          </div><!-- End Right side columns -->
  </div>
@endsection

  

 
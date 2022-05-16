<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/favicon/logo1.png')}}" rel="icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  {{-- <img src="assets/img/logo.png" alt=""> --}}
                  <span class="logo-bio">
                    <img src="{{asset('assets/favicon/logo1.png')}}" alt="" style="width:70px">
                     BioShop Admin
                </span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 mb-5">Connexion à l'espace Admin</h5>
                    <p class="text-center small">Entrer vos paramettres de connexion</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('login') }}" method="post" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
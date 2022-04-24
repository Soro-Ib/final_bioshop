@extends('layout.app')

@section('title', 'Commander')

@section('content')

    <main id="main">
        <div class="row justify-content-md-center" id="content-commande">
            <div class="col col-lg-6">
                <h4>Commandez vos produits et nous vous livrons....</h4>
    
                <form action="{{route('commande.save')}}" method="post" class="form-group">
                    @csrf
                    <div class="nonC">
                        <label style="font-weight: bold">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Votre nom" class="form-control" required>
                    </div>
                    <div class="adresseC">
                        <label style="font-weight: bold">Ville / Commune</label>
                        <input type="text" name="address" id="" placeholder="Votre lieu d'habitation" class="form-control" required>
                    </div>
                    <div class="telephoneC">
                        <label style="font-weight: bold">Téléphone</label>
                        <input type="text" name="telephone" id="" placeholder="Votre numero de téléphone" class="form-control" required>
                    </div>
                    <div class="emailC">
                        <label style="font-weight: bold">Email</label>
                        <input type="email" name="email" id="" placeholder="Votre email" class="form-control">
                    </div>
                    <div class="container" id="content-cp">
                        <h4 style="text-align: center">Commander du Piment ?</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label style="font-weight: bold">Nombre de boites de 500 F</label>
                                <input type="number" name="piment500" placeholder="0" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label style="font-weight: bold">Nombre de boites de 1000 F</label>
                                <input type="number" name="piment1000" placeholder="0" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="container" id="content-cs">
                        <h4 style="text-align: center">Commander du Soubara ?</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label style="font-weight: bold">Nombre de boites de 500 F</label>
                                <input type="number" name="soubara500" placeholder="0" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label style="font-weight: bold">Nombre de boites de 1000 F</label>
                                <input type="number" name="soubara1000" placeholder="0" class="form-control">
                            </div>
                        </div>
                    </div>
                        <input type="submit" value="Valider ma commande" class="btn btn-primary" id="btn" style="margin-top: 15px;">
                </form>
            </div>
        </div>
    </main><!-- End #main -->
@endsection

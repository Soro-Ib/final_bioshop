@extends('layout.app')

@section('title', 'Commander')

@section('content')
<?php $nav = "commande" ?>
    <main id="main">
        <div class="container col-10">
                
            <h3 class="mt-3 mb-3">Commandez vos produits et nous vous livrons....</h3>
            <form action="{{route('commande.save')}}" method="post" class="form-group">
                @csrf
                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Votre nom" class="form-control" required>
                        {{-- @if ($errors->has('secretaire_name'))
                            <span class="errors">{{ $errors->first('secretaire_name') }}</span>
                        @endif --}}
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Ville / Commune</label>
                        <input type="text" name="address" id="" placeholder="Votre lieu d'habitation" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Téléphone</label>
                        <input type="text" name="telephone" id="" placeholder="Votre numero de téléphone" class="form-control" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Email (Facultatif)</label>
                        <input type="email" name="email" id="" placeholder="Votre email" class="form-control">
                    </div>
                </div>

                <h4 style="text-align: center">Commander du Piment ?</h4>
                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nombre de boites de 500 F</label>
                        <input type="text" name="piment500" placeholder="0" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nombre de boites de 1000 F</label>
                        <input type="text" name="piment1000" placeholder="0" class="form-control">
                    </div>
                </div>
                
                <h4 style="text-align: center">Commander du Soubara ?</h4>
                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nombre de boites de 500 F</label>
                        <input type="text" name="soubara500" placeholder="0" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nombre de boites de 1000 F</label>
                        <input type="text" name="soubara1000" placeholder="0" class="form-control">
                    </div>
                </div>
                <input type="submit" value="Valider ma commande" class="btn btn-primary d-grid gap-2 col-8 mx-auto mb-3">
            </form>
        </div>
    </main><!-- End #main -->
@endsection

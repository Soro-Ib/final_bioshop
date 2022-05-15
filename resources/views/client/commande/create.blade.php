@extends('layout.app')

@section('title', 'Passez une commande')

@section('content')
<?php $nav = "commande" ?>
    <main id="main">
        <div class="container col-10">
                
            <h3 class="mt-3 mb-3">Commandez vos produits et nous vous livrons dans les plus brefs délais.</h3>
            <form action="{{route('commande.save')}}" method="post" class="form-group" id="form_c">
                @csrf
                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Votre nom" class="form-control">
                        @if ($errors->has('nom'))
                            <span class="errors">{{ $errors->first('nom') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Ville / Commune</label>
                        <input type="text" name="address" id="" placeholder="Votre lieu d'habitation" class="form-control">
                        @if ($errors->has('address'))
                            <span class="errors">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-lg-3">
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Téléphone</label>
                        <input type="text" name="telephone" id="" placeholder="Votre numero de téléphone" class="form-control">
                        @if ($errors->has('telephone'))
                            <span class="errors">{{ $errors->first('telephone') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label style="font-weight: bold">Email</label>
                        <input type="email" name="email" id="" placeholder="Votre email" class="form-control">
                        @if ($errors->has('email'))
                            <span class="errors">{{ $errors->first('email') }}</span>
                        @endif
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
                <input type="submit" value="Commander" class="btn btn-primary d-grid gap-2 col-8 mx-auto mb-3">
            </form>
        </div>
    </main><!-- End #main -->
    <style>
        #form_c .errors{
            color: red;
            font-style: italic;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
        }
    </style>
@endsection

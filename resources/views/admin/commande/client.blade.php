
@extends('partials_view.adminTemplate')

@section('title', 'clients')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Liste des clients</h5>
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
                            <th scope="col">telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Addresse</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{$client->nom}}</td>
                                    <td>{{$client->telephone}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->address}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
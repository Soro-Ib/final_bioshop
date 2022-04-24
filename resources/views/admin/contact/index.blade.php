
@extends('partials_view.adminTemplate')

@section('title', 'contact')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Contact</h5>
                        {{-- <button class="btn btn-primary">
                            <a href="{{ route('produit.create') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                                <i class="fa fa-plus mr-1"></i>Ajouter
                            </a>
                        </button> --}}
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>
                        <tr>
                            <th scope="col">Nom du client</th>
                            <th scope="col">telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{$contact->nom}}</td>
                                    <td>{{$contact->telephone}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->message}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
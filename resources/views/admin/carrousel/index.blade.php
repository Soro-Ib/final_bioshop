
@extends('partials_view.adminTemplate')

@section('title', 'Carrousel')

@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="card-body">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="card-title">Produits Bioshop</h5>
                        <button class="btn btn-primary">
                            <a href="{{ route('carrousel.create') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                                <i class="fa fa-plus mr-1"></i>Ajouter
                            </a>
                        </button>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($carrousels as $carrousel)
                                <tr>
                                    <td><img src="/images/carrousels/{{$carrousel->image}}" alt="image" style="width: 100px; height: 70px"></td>
                                    <td>{{$carrousel->description}}</td>
                                    <td>
                                        <a href="{{route('carrousel.show', $carrousel->id)}}"><button class="btn btn-warning"><i class="fas fa-pen"></i></button></a>
                                        <a href="{{route('carrousel.delete', $carrousel->id)}}" id="delete"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

  

 
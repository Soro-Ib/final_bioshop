
@extends('partials_view.adminTemplate')

@section('title', 'Carrousel')

@section('dashboard')
    <div class="row">
        <div class="card-body">
            <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="card-title">Ajouter une image</h5>
                {{-- <button class="btn btn-primary">
                    <a href="{{ route('produit.add') }}" style="color: #fff; list-style-type: none; text-decoration: none">
                        <i class="fa fa-plus mr-1"></i>Ajouter
                    </a>
                </button> --}}
            </div>
            <form method="post" action="{{route('carrousel.update')}}" enctype="multipart/form-data" class="col-10 mx-auto">
                @csrf
                <input type="hidden" name="id" value="{{$carrousel->id}}">
                <div class="form-group">
                    <div class="row">
                        <div class="mx-auto mt-2">
                            <label class="mb-2">Image</label>
                            <input type="file" name="image" class="file form-control custom-file-input" data-show-preview="True">
                            @if ($errors->has('image'))
                                <span class="probleme" style="color: red;font-style: italic;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 12px;">
                                    {{ $errors->first('image') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class=" mx-auto mt-2">
                            <label class="mb-2">Description</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$carrousel->description}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <input type="submit" value="Modifier" class="btn btn-primary d-grid gap-2 col-6 mx-auto">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

  

 
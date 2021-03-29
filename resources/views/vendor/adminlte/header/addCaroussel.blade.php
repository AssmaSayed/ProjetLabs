@extends('adminlte::page')

@section('title', 'AdminLTE')
    @section('content')
        <div class="container">
            <h1>Ajouter une image</h1>
            <form action="/addCaroussel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-around">
                    <input class="w-25 form-control @error('img') is-invalid @enderror" value="@if($errors->first('logo'))@else{{old('img')}}@endif" type="file" name="img" id="" placeholder="Veuillez choisir une image">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>  
                <button type="submit">Ajouter image</button>          
            </form>
        </div>
    @endsection
@endsection
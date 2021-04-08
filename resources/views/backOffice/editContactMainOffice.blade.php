@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- pour voir ou se trouve l'erreur dans notre formulaire --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/contactMainOffice/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="">TITRE</label>
                        <input type="text" name="titre" class="form-control" value="{{old('titre' ) ? old('titre') : $edit->titre}}">
                    </div>
                    <div class="form-group">
                        <label for="">ADRESSE 1</label>
                        <input type="text" name="adresse1" class="form-control" value="{{old('adresse1' ) ? old('adresse1') : $edit->adresse1}}">
                    </div>
                    <div class="form-group">
                        <label for="">ADRESSE 2</label>
                        <input type="text" name="adresse2" class="form-control" value="{{old('adresse2' ) ? old('adresse2') : $edit->adresse2}}">
                    </div>
                    <div class="form-group">
                        <label for="">PHONE</label>
                        <input type="text" name="phone" class="form-control" value="{{old('phone' ) ? old('phone') : $edit->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="">EMAIL 1</label>
                        <input type="email" name="email" class="form-control" value="{{old('email' ) ? old('email') : $edit->email}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@name
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

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

                    <form action="/homeCard/{{$edit->id}}" method="POST" >
                        @csrf
                        @method('PATCH')
                        <div>
                            <label for="">Icon</label>
                            <input type="text" name="icon" class="form-control" value="{{old('icon' ) ? old('icon') : $edit->icon}}">
                        </div>
                        <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="titre" class="form-control" value="{{old('titre' ) ? old('titre') : $edit->titre}}">
                        </div>
                        <div class="form-group">
                          <label for="">Text</label>
                          <input type="text" name="text" class="form-control" value="{{old('text' ) ? old('text') : $edit->text}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop 

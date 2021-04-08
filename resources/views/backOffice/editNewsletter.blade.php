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

                <form action="/newsletter/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="">titre</label>
                        <input type="text" name="titre" class="form-control" value="{{old('titre' ) ? old('titre') : $edit->titre}}">
                    </div>
                    <div>
                        <label for="">button</label>
                        <input type="text" name="button" class="form-control" value="{{old('button' ) ? old('button') : $edit->button}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

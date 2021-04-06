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

                <form action="/homeTitreSpan/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="">titre 1</label>
                        <input type="text" name="titre1" class="form-control" value="{{old('titre1' ) ? old('titre1') : $edit->titre1}}">
                    </div>
                    <div class="form-group">
                        <label for="">span </label>
                        <input type="text" name="span" class="form-control" value="{{old('span' ) ? old('span') : $edit->span}}">
                    </div>
                    <div>
                        <label for="">titre 2</label>
                        <input type="text" name="titre2" class="form-control" value="{{old('titre2' ) ? old('titre2') : $edit->titre2}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

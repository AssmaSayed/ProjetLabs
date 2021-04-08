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

                <form action="/servicesServices/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="">icon</label>
                        <input type="text" name="icon" class="form-control" value="{{old('icon' ) ? old('icon') : $edit->icon}}">
                    </div>
                    <div>
                        <label for="">services</label>
                        <input type="text" name="services" class="form-control" value="{{old('services' ) ? old('services') : $edit->services}}">
                    </div>
                    <div class="form-group">
                        <label for="">text</label>
                        <input type="text" name="text" class="form-control" value="{{old('text' ) ? old('text') : $edit->text}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

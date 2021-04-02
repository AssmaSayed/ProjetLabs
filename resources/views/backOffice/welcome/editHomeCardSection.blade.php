{{-- @extends('adminlte::page')

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

                    <form action="/user/{{$edit->id}}" method="POST" >
                        @csrf
                        @method('PATCH')
                        <div>
                            <label for="">Nom</label>
                            <input type="text" name="name" class="form-control" value="{{old('name' ) ? old('name') : $edit->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Adresse email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email' ) ? old('email') : $edit->email}}">
                        </div>
                        <div class="form-group">
                          <label for="">Mot de passe</label>
                          <input type="password" name="password" class="form-control" value="{{old('password' ) ? old('password') : $edit->password}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop --}}

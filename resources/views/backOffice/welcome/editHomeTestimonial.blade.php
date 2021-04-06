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
                
                                    <form action="/homeTestimonial/{{$edit->id}}" method="POST" >
                                        @csrf
                                        @method('PATCH')
                                        <div>
                                            <label for="">text</label>
                                            <input type="text" name="text" class="form-control" value="{{old('text' ) ? old('text') : $edit->text}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">img</label>
                                            <input type="file" value="{{$edit->img}}" name="img" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">name</label>
                                            <input type="text" name="name" class="form-control" value="{{old('name' ) ? old('name') : $edit->name}}">
                                        </div>
                                        <div>
                                            <label for="">role</label>
                                            <input type="text" name="role" class="form-control" value="{{old('role' ) ? old('role') : $edit->role}}">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                

                </div>
            </div>
        </div>
    </div>
@stop

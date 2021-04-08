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

                <form action="/contactPlaceholder/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="">NOM</label>
                        <input type="text" name="name" class="form-control" value="{{old('name' ) ? old('name') : $edit->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">EMAIL</label>
                        <input type="email" name="email" class="form-control" value="{{old('email' ) ? old('email') : $edit->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">SUJET</label>
                        <input type="text" name="subject" class="form-control" value="{{old('subject' ) ? old('subject') : $edit->subject}}">
                    </div>
                    <div class="form-group">
                        <label for="">MESSAGE</label>
                        <input type="text" name="message" class="form-control" value="{{old('message' ) ? old('message') : $edit->message}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@name
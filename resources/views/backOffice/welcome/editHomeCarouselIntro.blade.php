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

                <form action="/homeCarouselIntro/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Image 1</label>
                        <input type="file" value="{{$edit->img}}" name="img" id="">
                    </div>
                    <div>
                        <label for="">Text</label>
                        <input type="text" name="text" class="form-control" value="{{old('text' ) ? old('text') : $edit->text}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

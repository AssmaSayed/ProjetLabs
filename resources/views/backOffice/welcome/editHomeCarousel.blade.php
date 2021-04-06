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

                <form action="/homeCarousel/{{$edit->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Image 2</label>
                        <input type="file" value="{{$edit->img1}}" name="img1" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Image 3</label>
                        <input type="file" value="{{$edit->img2}}" name="img2" id="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

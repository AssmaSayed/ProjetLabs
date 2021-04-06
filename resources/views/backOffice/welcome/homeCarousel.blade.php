@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>Les utilisateurs</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGE 2</th>
                            <th scope="col">IMAGE 3</th>
                            <th scope="col">MODIFIER</th>
                            <th scope="col">SUPPRIMER</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeCarousel as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>
                                <img src="{{$item->img1}}" height="20px" alt="">
                              </td>
                              <td>
                                <img src="{{$item->img2}}" height="20px" alt="">
                              </td>
                              <td>
                                  <a class="btn btn-warning" href="/homeCarousel/{{$item->id}}/edit">EDIT</a>
                              </td>
                              <td>
                                  <form action="/homeCarousel/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                  </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

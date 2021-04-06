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
                            <th scope="col">IMAGE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">MODIFIER</th>
                            <th scope="col">SUPPRIMER</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeSection as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>
                                <img src="{{$item->img}}" height="40px" alt="">
                              </td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->role}}</td>

                              <td>
                                  <a class="btn btn-warning" href="/homeSection/{{$item->id}}/edit">EDIT</a>
                              </td>
                              <td>
                                  <form action="/homeSection/{{$item->id}}" method="POST">
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

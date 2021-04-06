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
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">MODIFIER</th>
                            <th scope="col">SUPPRIMER</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeCardSection as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td><i class="{{$item->icon}}" style="font-size:20px"></i></td>
                              <td>{{$item->titre}}</td>
                              <td>{{$item->text}}</td>
                              <td>
                                  <a class="btn btn-warning" href="/homeCard/{{$item->id}}/edit">EDIT</a>
                              </td>
                              <td>
                                  <form action="/homeCard/{{$item->id}}" method="POST">
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

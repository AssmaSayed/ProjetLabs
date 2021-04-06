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
                            <th scope="col">TITRE</th>
                            <th scope="col">TEXT</th>
                            <th scope="col">ICON</th>
                            <th scope="col">MODIFIER</th>
                            <th scope="col">SUPPRIMER</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicesFeatures as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->titre}}</td>
                              <td>{{$item->text}}</td>
                              <td><i class="{{$item->icon}}" style="font-size:20px"></i></td>

                              <td>
                                  <a class="btn btn-warning" href="/servicesFeatures/{{$item->id}}/edit">EDIT</a>
                              </td>
                              <td>
                                  <form action="/servicesFeatures/{{$item->id}}" method="POST">
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

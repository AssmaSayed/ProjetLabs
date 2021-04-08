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
                            <th scope="col">TITRE 1</th>
                            <th scope="col">SPAN</th>
                            <th scope="col">TITRE 2</th>
                            <th scope="col">MODIFIER</th>
                            <th scope="col">SUPPRIMER</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicesTitreSpan as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->titre1}}</td>
                              <td>{{$item->span}}</td>
                              <td>{{$item->titre2}}</td>
                              <td>
                                  <a class="btn btn-warning" href="/servicesTitreSpan/{{$item->id}}/edit">EDIT</a>
                              </td>
                              <td>
                                  <form action="/servicesTitreSpan/{{$item->id}}" method="POST">
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

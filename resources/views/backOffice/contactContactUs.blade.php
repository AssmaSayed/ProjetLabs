@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITRE</th>
                            <th scope="col">TEXT</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactContactUs as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->titre}}</td>
                              <td>{{$item->text}}</td>
                              <td>
                                  <a class="btn btn-warning" href="/contactUs/{{$item->id}}/edit">MODIFIER</a>
                              </td>
                              <td>
                                <a class="btn btn-danger" href="/contactUs/{{$item->id}}">SUPPRIMER</a>
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

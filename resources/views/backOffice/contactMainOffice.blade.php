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
                            <th scope="col">ADRESSE 1</th>
                            <th scope="col">ADRESSE 2</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactMainOffice as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->titre}}</td>
                              <td>{{$item->adresse1}}</td>
                              <td>{{$item->adresse2}}</td>
                              <td>{{$item->phone}}</td>
                              <td>{{$item->email}}</td>
                              <td>
                                  <a class="btn btn-warning" href="/contactPlaceholder/{{$item->id}}/edit">MODIFIER</a>
                              </td>
                              <td>
                                <a class="btn btn-danger" href="/contactPlaceholder/{{$item->id}}">SUPPRIMER</a>
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

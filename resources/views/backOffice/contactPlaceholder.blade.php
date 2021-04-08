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
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">SUJET</th>
                            <th scope="col">MESSAGE</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactPlaceholder as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->subject}}</td>
                              <td>{{$item->message}}</td>
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

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>VALIDATION USER</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOM</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">BUTTON</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>
                                <form action="/validate/{{$item->id}}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <button class="btn btn-success" type="submit">CHECK</button>
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
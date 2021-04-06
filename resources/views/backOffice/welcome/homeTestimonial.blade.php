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
                            <th scope="col">TEXT</th>
                            <th scope="col">IMG</th>
                            <th scope="col">NAME</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeTestimonial as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->text}}</td>
                              <td>
                                  <img src="{{$item->img}}" height="40px" alt="">
                                </td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->role}}</td>
                              <td>
                                  <a class="btn btn-warning" href="/homeTestimonial/{{$item->id}}/edit">MODIFIER</a>
                              </td>
                              <td>
                                <a class="btn btn-danger" href="/homeTestimonial/{{$item->id}}">SUPPRIMER</a>
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

@extends('layouts.app')
@section('content')

    <h1 class="text-center">Todo Page</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-3">
                    <h4 class="card-header">Todo List</h4>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                            <li class="list-group-item">{{ $todo->name }} 
                                @if(!$todo->completed)
                                <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right text-white mx-1">complete</a>
                                @endif 
                                <a href="/todos/{{$todo->id}}" class="btn btn-info btn-sm float-right">view</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection
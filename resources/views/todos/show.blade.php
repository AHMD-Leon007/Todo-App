@extends('layouts.app')
@section('content')

        <h2 class="text-center">
            {{$todo->name}}
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-header">Details
                        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger float-right">Delete</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                           {{ $todo->description}}
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary btn-block">Edit</a>
                    </div>
                </div>
            </div>
        </div>


@endsection

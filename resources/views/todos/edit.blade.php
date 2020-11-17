@extends('layouts.app')
@section('content')

    <h1 class="text-center">Update To-Do</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit 
                        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger float-right">Delete</a>
                    </h6>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                    @csrf
                        <div class="form-group">
                            <lebel>Name</lebel>
                            <input type="text" class="form-control" name="name" value="{{$todo->name}}">
                        </div>
                        <div class="form-group">
                            <lebel>Description</lebel>
                            <textarea name="description" rows="6" class="form-control">
                            {{$todo->description}}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Update Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



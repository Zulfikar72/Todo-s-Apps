@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Session::has('alert-success'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('alert-success')}}
</div>

@endif

@if(count($todos)>0)

<table class="table">
  <thead>
    <tr>
      <th >Title</th>
      <th >Description</th>
      <th >Completed</th>
      <th >Actions</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach($todos as $todo)
   
      <td>{{ $todo->title}}</td>
      <td>{{ $todo->description}}</td>
      <td>{!! $todo->is_completed ==1 ?'<a class="btn btn-sn btn-success" href=""> completed</a>': '<a class="btn btn-sn btn-danger" href=""> in completed</a>'!!}</td>
      <td>
    <a class="btn btn-sn btn-success" href="">Edit</a>
    <a class="btn btn-sn btn-info" href="{{ route('todos.show',$todo->id) }}">View</a>
    <form action="">
        <input type="hidden" name="todo_id" value="{{$todo->id }}">
        <input type="submit" class="btn btn-info">
    </form>
    <td>
    </tr>
  @endforeach
  </tbody>
</table>
@endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

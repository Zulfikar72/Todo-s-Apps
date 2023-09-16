@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todos App</div>

                <div class="card-body">
                <h4>Edit From</h4>
                <form>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="titile" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" cols="5" rows="10"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
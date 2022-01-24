@extends('backendtemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="d-inline">Brands</h3>
                    <a href="" class="btn btn-primary float-right">Create</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('brands.store')}}">
                      @csrf  
                      <div class="form-group">
                        <input type="text" class="form-control" id="inputText" placeholder="Enter Brand Name" name="name">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
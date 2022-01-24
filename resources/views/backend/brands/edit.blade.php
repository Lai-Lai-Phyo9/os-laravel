@extends('backendtemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Brands</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('brands.update',$brand->id)}}">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <input type="text" class="form-control" id="inputText" placeholder="Enter Brand Name" name="name" value="{{$brand->name}}">
                      </div>
                      <div class="form-group row col-md-6">
						<input name=" btnsubmit"type="submit" class="btn btn-info w-25" value="Update">
					  </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
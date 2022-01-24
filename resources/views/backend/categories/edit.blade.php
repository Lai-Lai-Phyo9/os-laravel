@extends('backendtemplate')
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header">
					<h3 class="d-inline">Categories Edit</h3>
				</div>
				<div class="card-body">
					<div>
						<form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
		                  @csrf
		                  @method('PUT')
		                  <div class="form-group">
		                    <input type="text" class="form-control" id="inputText" placeholder="Enter Category Name" name="name" value="{{$category->name}}">
		                  </div>
		                  <div class="form-group">
							<label for="inputPhoto" class="ml-3">Photo</label>
							<div class="col-12">
								<input type="file" class="form-control border-0 bg-light" id="inputPhoto" name="photo">
								<img src="{{ asset($category->photo) }}" width="100" height="100">
								<input type="hidden" name="old_photo" value="{{$category->photo}}">
							</div>
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
</div>
@endsection()
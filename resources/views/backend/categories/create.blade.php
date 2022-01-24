@extends('backendtemplate')
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header">
					<h3 class="d-inline">Categories</h3>
				</div>
				<div class="card-body">
					<div>
						<form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
		                  @csrf  
		                  <div class="form-group">
		                    <input type="text" class="form-control" id="inputText" placeholder="Enter Category Name" name="name">
		                  </div>
		                  <div class="form-group">
							<label for="inputPhoto" class="ml-3">Photo</label>
							<div class="col">
								<input type="file" class="form-control border-0 bg-light" id="inputPhoto" name="photo" >
							</div>
						</div>
						<button type="submit" class="btn btn-primary mt-3">Submit</button>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()
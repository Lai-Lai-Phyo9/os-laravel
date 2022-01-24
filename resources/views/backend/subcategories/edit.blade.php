@extends('backendtemplate')
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header">
					<h3 class="d-inline">Subcategories</h3>
				</div>
				<div class="card-body">
					<div>
						<form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
		                  @csrf
		                  @method('PUT')
		                  <div class="form-group">
		                    <input type="text" class="form-control" id="inputText" placeholder="Enter Subcategory Name" name="name" value="{{$subcategory->name}}">
		                  </div>
		                  <div class="form-group">
					         <label for="photo">Category</label>
					         <select class="form-control" name="category_id" id="category_id" value="{{$subcategory->name}}">
					           @foreach($categories as $row)
					            <option value="{{$row->id}}">{{$row->name}}</option>
					           @endforeach
					         </select>
					       </div>
						<button type="submit" class="btn btn-primary mt-3">Update</button>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()
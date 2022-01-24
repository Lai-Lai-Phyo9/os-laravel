@extends('backendtemplate')
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header">
					<h3 class="d-inline">Categories</h3>
					<a href="{{(route('categories.create'))}}" class="btn btn-primary float-right">Create</a>
				</div>
				<div class="card-body">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Name</th>
					      <th scope="col" class="text-center">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $i=1
					  	@endphp 
					  	@foreach($categories as $category)
					  	<tr>
					  		<th>{{$i++}}</th>
					  		<td>{{$category->name}}</td>
					  		<td class="text-center">
					      	<a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary mb-2" style="width: 100px;">Edit</a>
					      	<form class="d-inline-block" method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')">
					      		@csrf
					      		@method('DELETE')
					      		<button type="submit" class="btn btn-danger mb-2" style="width: 100px;">Delete</button>
					      	</form>
					      </td>
					  	</tr>
					  	@endforeach
					  </tbody>					  	
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
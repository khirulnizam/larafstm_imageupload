@extends('layouts.fancy')
@section('content')
	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">

				<div class="card info">

					<div class="card-header">Listing Trainings to Register

						<form method="get" action="{{ url('registers') }}" class="form-inline">
							@csrf
							<input type="text" id="txtsearch" name="txtsearch" class="form-control">
							<button type="submmit" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</form>

					</div>

					<div class="card-body">
						@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif

						@if (session('successdelete'))
							<div class="alert alert-warning">
								{{ session('successdelete') }}
							</div>
						@endif

						<table class="table table-striped">
						<thead>
						  <tr>
							<th>ID</th>
							<th>Training Name</th>
							<th>Desc</th>
							<th>Action</th>
							<th></th>
						  </tr>
						</thead>
						<tbody>
						  @foreach($trainings as $training)
						  <tr>
							<td>{{$training['id']}}</td>
							<td>{{$training['trainingname']}}</td>
							<td>{{$training['desc']}}</td>
							<td>
								<a href="{{action('RegisterController@show', 
								$training['id'])}}" class="btn btn-info">
									  <i class="fa fa-file-text-o"></i>
								  </a>
							</td>
							<td>
								  
							</td>
						  </tr>
						  @endforeach
						<tbody>
						</table>
							
					</div>
					<div align="right">
						{{ $trainings->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection












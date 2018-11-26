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

					<div class="card-header">Participants registered for Training

					</div>

					<div class="card-body">

						<table class="table table-striped">
						<thead>
						  <tr>
							<th>bil</th>
							<th>Name</th>
							<th>Matrix</th>
							<th>Sign</th>
							<th></th>
						  </tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
						  @foreach($registers as $reg)
						  <tr>
							<td><?php echo $i; $i++?></td>
							<td>{{$reg['name']}}</td>
							<td>{{$reg['matrix']}}</td>
							<td>
								
							</td>
							<td>
								  
							</td>
						  </tr>
						  @endforeach
						<tbody>
						</table>
							
					</div>
					<div align="right">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection












@extends('layouts.fancy')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
			@if (session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif

                <div class="card">
                    <div class="card-header">Training details</div>

                    <div class="card-body">
					<img class="card-img-top" 
					src="{{url('storage/uploads/'.$training->filename)}}" 
					alt="{{$training->filename}}">

					<br>
					<a href="{{url('storage/uploads/'.$training->filename)}}" target="_blank">
						Download poster </a>
					<br>
					<br>
					
					Training name <br>
					<h3> {{$training->trainingname}} </h3>
					<br><br>
					Training description <br>
					<strong> {{$training->desc}}  </strong>
					<br><br>
					
					Trainer's name<br>
					<strong> {{$training->trainer}}</strong>
					<br><br>
					
					<hr>
					
					<h3>Self-registration Form</h3>
					
                    <form method="post" action="{{url('registers')}}">
                    @csrf
                      <label for="trainingname">Name</label>
                      <input type="text" class="form-control" name="name">

                      <label for="desc">Matrix</label>
                      <input type="text" class="form-control" name="matrix">
					  
					  <input type="hidden" class="form-control" 
					  name="training_id" value="{{$training->id}}">

                      <button type="submit" class="btn btn-primary"> 
					  Register myself for this training</button>
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
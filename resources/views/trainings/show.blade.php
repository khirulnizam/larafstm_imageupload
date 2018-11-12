@extends('layouts.generic')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
				<div align="right">
					<a href="{{ url('trainings/create') }}">Insert </a> ||
					<a href="{{ url('trainings') }}">Listing for Update/Delete</a>
				</div>
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
					<a href="{{url('storage/uploads/'.$training->filename)}}"> Download poster </a>
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
					


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
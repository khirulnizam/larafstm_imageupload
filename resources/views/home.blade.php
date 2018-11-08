@extends('layouts.generic')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Hello administrator {{ Auth::user()->name }} </p>
                        <br>
					<a href="{{ url('trainings') }}"> Training menus</a>
					<br>
					<a href="{{ url('trainings/create') }}">&nbsp;&nbsp; :: Create Training</a>
					<br>
					<br>
					<br>
					<a href="#"> Registrations Report</a>
					Choose trainings
					<form method="GET" 
					action="{{url('registerreports')}}" 
					class="form-inline">
					@csrf
						<select name="id" class="form-control">
							@foreach($trainings as $training)
							<option value="{{$training['id']}}"> 
							{{$training['trainingname']}} </option>
							@endforeach
						</select>
						
						<button type="submit" class="btn btn-info"> 
						Generate </button>
					</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

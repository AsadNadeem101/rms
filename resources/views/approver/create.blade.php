@extends('adminlte::page')

@section('title', 'Approver')

@section('content_header')
    <h1>Approver Create</h1>
@stop

@section('content')
	<form action="{{route('approvers.store')}}" method="post">
		@csrf
	    <div class="row">
	    	<div class="col-md-6">
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
					@error('name')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div>
	    	<div class="col-md-6">
				<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" required>
					@error('email')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div>	  
		</div>
		<div class="row mt-4">
	    	<div class="col-md-6">
				<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" required>
					@error('password')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div> 
	    	<div class="col-md-6">
			<select name="region" id="" class="form-control @error('region') is-invalid @enderror" required >
					<option value="" readonly>Assign Region</option>
					@foreach($regions as $region)
					<option value="{{$region->name}}">{{$region->name}}</option>
					@endforeach
				</select>
					@error('region')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div> 
				<input type="hidden" name="type" value="approver">
	    </div>
	
	   	<div class="row mt-4">
	    	<div class="col-md-6">
				<input type="submit" class="btn btn-success" value="Save" />
	    	</div> 	   	
	    </div>
	</form>
@stop

@section('css')
	
@stop

@section('js')

@stop

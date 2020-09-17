@extends('adminlte::page')

@section('title', 'First Dropdown | Create')

@section('content_header')
    <h1>Create New</h1>
@stop

@section('content')
	<form action="{{route('first_dropdowns.store')}}" method="POST">
		@csrf
	    <div class="row">	  
	    	<div class="col-md-6">
	    		<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name Of Dropdown's Item" required>
            @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror	  
	    	</div>
	    </div>
	    
	   	<div class="row mt-3">
	    	<div class="col-md-6">
	    		<input type="submit" class="btn btn-success" value="Submit">
	    	</div> 	   	
	    </div>
    </form>
@stop

@section('css')
	
@stop

@section('js')

@stop
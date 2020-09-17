@extends('adminlte::page')

@section('title', 'First Dropdown | Edit')

@section('content_header')
    <h1>Edit Item</h1>
@stop

@section('content')
	<form action="{{route('first_dropdowns.update',$item->id)}}" method="POST">
		@csrf
        @method('PATCH')
	    <div class="row">
	    	<div class="col-md-6">
	    		<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$item->name}}" required>
				@error('name')
					<span class="text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
	    	</div>  
	    </div>
	    
	   	<div class="row mt-3">
	    	<div class="col-md-6">
	    		<input type="submit" class="btn btn-success" value="Update">
	    	</div> 	   	
	    </div>
    </form>
@stop

@section('css')
	
@stop

@section('js')

@stop

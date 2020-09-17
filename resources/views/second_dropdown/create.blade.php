@extends('adminlte::page')

@section('title', 'Second Dropdown | Create')

@section('content_header')
    <h1>Create New</h1>
@stop

@section('content')
	<form action="{{route('second_dropdowns.store')}}" method="POST">
		@csrf
	    <div class="row">
	    	<div class="col-md-6">
				<select name="first_dropdown_id" id="" class="form-control @error('name') is-invalid @enderror" required>
					<option value="" readonly>Select Item</option>
					@foreach($first_dropdown_items as $item)
					<option value="{{$item->name}}">{{$item->name}}</option>
					@endforeach
				</select>
					@error('first_dropdown_id')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div>	  
	    	<div class="col-md-6">
	    		<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name Of Second Dropdown Item" required>
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


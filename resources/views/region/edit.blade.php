@extends('adminlte::page')

@section('title', 'Region')

@section('content_header')
    <h1>Region Edit</h1>
@stop

@section('content')
    <form action="{{route('regions.update',$region->id)}}" method="post">
		@csrf
        @method('PATCH')
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$region->name}}" name="name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$region->description}}" name="description">
                </div>
            </div>	  
	    </div>
	
	   	<div class="row mt-4 ml-1">
	    	<div class="col-md-6">
	    		<input type="submit" class="btn btn-success" value="Update"/>
	    	</div> 	   	
	    </div>
    </form>
@stop

@section('css')
	
@stop

@section('js')

@stop

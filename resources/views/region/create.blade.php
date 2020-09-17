@extends('adminlte::page')

@section('title', 'Region')

@section('content_header')
    <h1>Region Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'regions.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		{!! Form::text('description',null,['class' => 'form-control','placeholder' => 'Description']); !!}
	    	</div>	  
	    </div>
	
	    
	   	<div class="row">
	    	<div class="col-md-6">
	    		{!! Form::submit('Save', ['class'=>'btn btn-success']); !!}
	    	</div> 	   	
	    </div>
	{!! Form::close() !!}
@stop

@section('css')
	
@stop

@section('js')

@stop

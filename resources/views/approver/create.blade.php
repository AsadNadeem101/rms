@extends('adminlte::page')

@section('title', 'Approver')

@section('content_header')
    <h1>Approver Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'approvers.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'Email']); !!}
	    	</div>	  
	    	<div class="col-md-6">
				{!! Form::password('password',['class' => 'form-control password','placeholder' => 'Password']); !!}
	    	</div>   		    	  	
	    		{!! Form::hidden('type','approver'); !!}
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

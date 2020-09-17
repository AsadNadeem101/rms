@extends('adminlte::page')

@section('title', 'Second Dropdown | Edit')

@section('content_header')
    <h1>Edit Item</h1>
@stop

@section('content')
	<form action="{{route('second_dropdowns.update',$item->id)}}" method="POST">
		@csrf
        @method('PATCH')
	    <div class="row">
	    	<div class="col-md-6">
				<select name="first_dropdown_id" id="" class="form-control @error('name') is-invalid @enderror first_dropdown_id" required>
                    <option class="already_selected" readonly>{{$item->first_dropdown->name}}</option>
					<option value="" readonly>Select Item</option>
					@foreach($first_dropdown_items as $items)
					<option value="{{$items->name}}">{{$items->name}}</option>
					@endforeach
				</select>
					@error('first_dropdown_id')
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	    	</div>	  
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
<script>
    $(document).ready(function()
    {
        $('.first_dropdown_id').on('focus',function()
        {
            $('.already_selected').remove();
        });
    });
</script>
@stop


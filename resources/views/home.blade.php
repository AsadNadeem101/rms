@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                    @if(session('sent'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{session('sent')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('submit_form') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="Buttons" class="col-md-4 col-form-label text-md-right">{{ __('Select Button') }}</label>
                                <div class="col-md-2 mt-2">
                                <input id="button1" type="radio"  name="radio_button" value="button1" checked>
                                {{ __('Button 1') }}
                                </div>
                                <div class="col-md-2 mt-2 ml-3">
                                <input id="button2" type="radio"  name="radio_button" value="button2">
                                {{ __('Button 2') }}
                                </div>
                                <div class="col-md-2 mt-2 ml-3">
                                <input id="button3" type="radio"  name="radio_button" value="button3">
                                {{ __('Button 3') }}
                                </div>
                                @error('radio_button')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="Region" class="col-md-4 col-form-label text-md-right">{{ __('Select Region') }}</label>

                            <div class="col-md-6">
                               <select name="region" id="" class="form-control @error('region') is-invalid @enderror" required>
                               <option value="" readonly>Select An Option</option>
                                @foreach($regions as $region)
                                <option value="{{$region->name}}">{{$region->name}}</option>
                                @endforeach
                               </select>
                               @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Dropdown1" class="col-md-4 col-form-label text-md-right">{{ __('Select Item From Dropdown 1') }}</label>

                            <div class="col-md-6">
                               <select name="first_dropdown_item" id="" class="form-control first_dropdown @error('first_dropdown_item') is-invalid @enderror" required>
                               <option value="" readonly>Select An Option</option>
                                @foreach($first_dropdowns as $dropdown)
                                <option value="{{$dropdown->name}}">{{$dropdown->name}}</option>
                                @endforeach
                               </select>
                                @error('first_dropdown_item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Dropdown2" class="col-md-4 col-form-label text-md-right">{{ __('Select Item From Dropdown 2') }}</label>

                            <div class="col-md-6">
                               <select name="second_dropdown_item" id="" class="form-control second_dropdown @error('second_dropdown_item') is-invalid @enderror" required>
                               <option value="" readonly>Select An Option</option>
                               
                               </select>
                               @error('second_dropdown_item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Form') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function()
    {
       $('.first_dropdown').on('change',function()
       {
            $('.second_item').remove();
           var value=$(this).val();
           $.ajax({
                type: 'GET',
                url: '/get_second_dropdown',
                data: {
                    value: value
                },
                success: function(data){
                    for(i=0;i<data.length;i++)
                    {
                        $('.second_dropdown').append('<option class="second_item" value="'+data[i].name+'">'+data[i].name+'</option>');
                    }
                },
                error: function(xhr){
                    console.log(xhr.responseText);
                }
            });
       });
    });
</script>
@endsection

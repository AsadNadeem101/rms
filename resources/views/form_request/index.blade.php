@extends('adminlte::page')

@section('title', 'Form Requests')

@section('content_header')
    <h1>Form Request's</h1>
@stop

@section('content')
@if(session('accepted'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('accepted')}}
</div>
@endif
@if(session('rejected'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('rejected')}}
</div>
@endif
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Requests</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Radio Button</th>
                  <th>First Dropdown Item</th>
                  <th>Second Dropdown Item</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$request->name}}</td>
                  <td>{{$request->radio_button}}</td>
                  <td>{{$request->first_dropdown_item}}</td>
                  <td>{{$request->second_dropdown_item}}</td>
                  <td>{{$request->status}}</td>
                  <td>
                    @if($request->status == 'pending')
                    <a class="btn btn-success text-white" href="{{route('form_request.accept',$request->id)}}">Accept</a>
                    <a class="btn btn-danger text-white delete-content" href=""
                    data-url="{{route('form_request.reject',$request->id)}}" data-toggle="modal" data-target="#rejectModal">Reject</a>
                    @endif
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Radio Button</th>
                  <th>First Dropdown Item</th>
                  <th>Second Dropdown Item</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    <!-- Modal -->
    <form action="" method="POST" class="delete-form">
    @csrf
    @method('DELETE')
        <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLongTitle">Reject Request</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to reject this request?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Reject</button>
            </div>
            </div>
        </div>
        </div>
    </form>
@stop

@section('css')
	<!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@stop

@section('js')

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script src="{{asset('js/custom.js')}}"></script>
@stop

@extends('layouts.admin_layout')

@section('content')
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif
                @if(Session::has('error'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                @endif

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">User Listing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($user as $item)    
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->lname}}</td>
                      <td>{{$item->email}}</td>
                      <td>
                        @if ($item->user_type == 1)
                            <label class="label label-success">User </label>
                        @else
                            <label class="label label-primary">Agent </label>
                        @endif
                      </td>
                      <td>{{$item->created_at}}</td>
                      <td>
                        @if ($item->status == 1)
                          <form action="{{route('admin.inactivate_user')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$item->id}}">
                            <input type="submit" value="Activate" class="btn btn-xs btn-success">
                          </form>    
                        @else
                          <form action="{{route('admin.activate_user')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$item->id}}">
                            <input type="submit" value="Inactivate" class="btn btn-xs btn-warning">
                          </form>    
                        @endif
                        
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
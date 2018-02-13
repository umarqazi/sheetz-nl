@extends('layouts/admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Customers
      <small>preview of customers</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Customers</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Customers Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
              </tr>
              
              @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{ucwords($user->name)}}</td>
                  <td>{{$user->created_at->format('d-m-Y')}}</td>
                  <td>{{$user->email}}</td>
                </tr>
              @endforeach
            
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
@endsection
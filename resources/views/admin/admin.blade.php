@extends('layouts/admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admins
            <small>preview of admins</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admins</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Admins Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->id}}</td>
                                <td>{{ucwords($admin->name)}}</td>
                                <td>{{$admin->created_at->format('d-m-Y')}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary deleteForm" href="/admin/administrators/{{$admin->id}}/edit">Edit</a>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/administrators/'.$admin->id)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                            <button class="btn btn-sm btn-danger formDeleteButton">Delete</button>
                                        {{ Form::close() }}
                                    </div>
                                </td>
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
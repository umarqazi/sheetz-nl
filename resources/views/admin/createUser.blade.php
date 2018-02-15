@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    {{--Session Alert Starts--}}
                    @if (session('message'))
                        <div class="alert alert-success alert-notification">
                            {{ session('message') }}
                        </div>
                    @endif
                    {{--Session Alert Ends--}}

                    <form role="form" action="/admin/customers" method="POST">
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>User Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control" placeholder="Retype Password" required>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@extends('layouts.app')
<!---->
@section('content')
<div class="accounts_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <h3>Password recovery</h3>
            <p>Please, enter your e-mail below. We will send you instructions for reseting your password.</p>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your e-mail...">
                </div>
                <button type="button" data-toggle="modal" data-target=".password_recovery" class="hvr-sweep-to-right"><span>recover</span></button>
            </form>
        </div>
    </div>
</div>


<div class="modal fade password_recovery accounts_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <a href="#" class="modal_dismiss" data-dismiss="modal" aria-label="Close"><img src="/images/close.png"></a>
            <h3>Check your e-mail!</h3>
            <p>E-mail with password recovery instructions has been sent to your e-mail. Please, check it and follow the instructions!</p>
            <a href="#" class="continue hvr-sweep-to-right" data-dismiss="modal" aria-label="Close">continue</a>
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection

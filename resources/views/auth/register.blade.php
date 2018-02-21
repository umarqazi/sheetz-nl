@extends('layouts.app')
<!---->
@section('content')
<div class="signup_modal accounts_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <h3>Registration</h3>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Your first name..." name="fname" value="{{ old('fname') }}" required autofocus>
                    @if ($errors->has('fname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Your last name..." name="lname" value="{{ old('lname') }}" required>
                    @if ($errors->has('lname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Your e-mail..." name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Create password..." name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm password..." name="password_confirmation" required>
                </div>
                <button type="submit" class="hvr-sweep-to-right"><span>sign up!</span></button>
            </form>
        </div>
    </div>
</div>
@endsection

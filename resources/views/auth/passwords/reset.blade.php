@extends('layouts.app')
<!---->
@section('content')
<div class="resetpassword_modal accounts_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <a href="#" class="modal_dismiss" data-dismiss="modal" aria-label="Close"><img src="/images/close.png"></a>
            <h3>Reset your password</h3>
            <form method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                    <input type="email" class="form-control" placeholder="Your e-mail..." name="email" value="{{ $email or old('email') }}" required autofocus>
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

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Confirm password..." name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="hvr-sweep-to-right"><span>Reset</span></button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
<!---->
@section('content')
<div class="accounts_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <h3>Password recovery</h3>

            <p>Please, enter your e-mail below. We will send you instructions for reseting your password.</p>

            <form id="emailResetForm" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Your e-mail..." name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <button id="emailResetButton" type="submit" class="hvr-sweep-to-right"><span>Reset</span></button>
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

@endsection

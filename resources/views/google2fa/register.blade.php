@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <div class="container">
        <div class="card text-center mt-5">
          <div class="card-header">
            <h5 class="card-title">Set Up Google Authenticator</h5>
          </div>
          <div class="card-body">
            <h4 class="card-text">Complete registration using this code <code>{{ $secret }}</code>
            <br>or scan QR Code below</h4>
            <div>
                {!! $QR_IMAGE !!}
            </div>
            <a href="/complete-registration" class="btn btn-primary">Complete Registration</a>
          </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/register.css')) }}
@endsection

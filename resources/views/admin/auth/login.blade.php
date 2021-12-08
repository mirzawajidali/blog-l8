@extends('admin.auth.auth-layout')
@section('auth')
{{-- Main Content Start --}}
<div class="login-logo">
    <a href="../../index2.html"><b>Blog</b>L8</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if (Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
      @endif
      @if (Session::has('error'))
          <div class="alert alert-danger">{{ Session::get('error') }}</div>
      @endif
      <form action="{{ Route('logged_in') }}" method="post">
        @csrf
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block form-control">Sign In</button>
        </div>
      </form>
      <p class="mb-1 text-center">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
{{-- Main Content End --}}
@endsection

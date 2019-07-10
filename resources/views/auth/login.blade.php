@extends('layouts.adminlte_login')

@section('content')

<div class="login-box">
        <div class="login-logo">
          <a href="{{('/')}}"><b>ischool</b>tec</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">
                @if(session()->has('login_error'))
              <div class="alert alert-warning">
                {{ session()->get('login_error') }}
              </div>
            @endif

            </p>

            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ผู้ใช้" name="identity" required>
                <div class="input-group-append input-group-text">
                    <span class="fas fa-phone"></span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" required>
                <div class="input-group-append input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      จำรหัสผ่าน
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>



            <p class="mb-1">
              <a href="#">I forgot my password</a>
            </p>

          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->







@endsection

@extends('layouts.base')

@section('main')
    <body class="hold-transition register-page">
    <div class="container">
        <div class="row">
            <div class="login-box">
                <div class="register-logo">
                    <a href="{{url('login')}}">测试后台</a>
                </div>

                {{--login-logo--}}
                <div class="register-box-body">
                    <p class="register-box-msg">注册 </p>
                    <form method="post" action="{{url('register')}}">
                        {{csrf_field()}}

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" required autofocus>
                            <span class="glyphicon  glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required>
                            <span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" id="password-confirm" placeholder="Password" required>
                            <span class="glyphicon glyphicon-cloud form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="PasswordConfirm" required>
                            <span class="glyphicon glyphicon-cloud form-control-feedback"></span>
                        </div>

                        <div class="row">

                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
                            </div>
                        </div>
                    </form>

                    <p class="text-center col-xs-12">- OR -</p>

                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-6">
                                <a href="{{url('login')}}"><button class="btn btn-success btn-block">重新登陆</button></a>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{url('password/reset')}}"><button class="btn btn-info btn-block">忘记密码</button></a>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 20px">
                        @if(count($errors) > 0)
                            <ul class="alert alert-error">
                                @foreach($errors->all() as $error)
                                    <li style="margin-left: 10px">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

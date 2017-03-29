@extends('layouts.base')

@section('title','login')

@section('main')

    <body class="hold-transition login-page">
    <div class="container">
        <div class="row">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{url('login')}}">测试后台</a>
                </div>

                {{--login-logo--}}
                <div class="login-box-body">
                    <p class="login-box-msg">登陆 </p>

                    <form method="post" action="{{url('login')}}">
                        {{csrf_field()}}
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required autofocus>
                            <span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="glyphicon glyphicon-cloud form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}>&nbsp;&nbsp;记住我
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
                            </div>
                        </div>
                    </form>

                    {{--<p class="text-center col-xs-12">- OR -</p>--}}
                    {{--<div class="text-center">--}}
                        {{--<a href="{{url('register')}}"><button class="btn btn-success ">注册用户</button></a>--}}
                        {{--<a href="{{url('password/reset')}}"><button class="btn btn-info">忘记密码</button></a>--}}
                    {{--</div>--}}

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

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });

    </script>
@endsection

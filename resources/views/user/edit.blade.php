@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="box-title"><h5><strong>修改用户</strong></h5></div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <form class="form-horizontal"  style="padding-top: 20px;" method="post" action="{{route('user.update', ['user' => $user->id])}}">
                            {!! csrf_field() !!}
                            {!! method_field('PUT') !!}

                            <div class="form-group">
                                <label class="control-label col-xs-2">用户ID</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="id" value="{{$user->id}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-2">用户名</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-2">邮箱</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-2">新密码</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="password" value="{{old('password')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <input type="submit" class="form-control btn btn-primary" value="确定">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-8 col-xs-offset-2">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
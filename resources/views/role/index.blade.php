@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="box-title"><h5><strong>角色列表</strong></h5></div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>角色名称</th>
                                <th>展示名称</th>
                                <th>角色描述</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->display_name}}</td>
                                    <td>{{$role->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$roles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
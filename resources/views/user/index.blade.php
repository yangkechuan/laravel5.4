@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="box-title"><h5><strong>用户列表</strong></h5></div>
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
                                <th>用户名</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td><a href="{{route('user.edit', ['user' => $user->id])}}" class="btn btn-primary">修改</a>
                                        @if($user->id != 1)
                                            <a href="{{route('user.destroy', ['user' => $user->id])}}" class="btn btn-primary"
                                                onclick="event.preventDefault();
                                                                document.getElementById('delete_from').submit()">删除
                                            </a>
                                            <form id="delete_from" method="POST" action="{{route('user.destroy', ['user' => $user->id])}}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        @if(Request::get('update'))
            swal('修改成功','', 'success');
        @elseif(Request::get('store'))
             swal('添加成功','', 'success');
        @elseif(Request::get('destroy'))
              swal('删除成功','', 'success');
        @endif
    </script>
@endsection
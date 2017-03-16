@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">API 自动化测试日志</div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>内容</th>
                                <th>是否通过</th>
                                <th>记录时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logList as $log)
                                <tr>
                                    <td>{{$log->id}}</td>
                                    <td>{{$log->content}}</td>
                                    <td>@if($log->status ==1)
                                            <span class="label label-success">通过</span>
                                            @else
                                            <span class="label label-danger">不通过</span>
                                        @endif
                                    </td>
                                    <td>{{$log->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$logList->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
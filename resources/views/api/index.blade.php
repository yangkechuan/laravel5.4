@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="box-title"><h5><strong>API自动化测试日志</strong></h5></div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th class="col-xs-1">id</th>
                                <th class="col-xs-8">内容</th>
                                <th class="col-xs-1">是否通过</th>
                                <th class="col-xs-2">记录时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logList as $log)
                                <tr>
                                    <td>{{$log->id}}</td>
                                    <td>{!! nl2br($log->content) !!}</td>
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
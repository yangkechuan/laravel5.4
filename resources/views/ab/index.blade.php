@extends('layouts.content')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="box-title"><h5><strong>AB压测</strong></h5></div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <form method="post" style="padding-top: 20px" action="{{route('ab.store')}}" class="form-horizontal">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="form-group">
                                        <label class="control-label   col-xs-2">每次请求数</label>
                                        <div class="col-xs-10">
                                            <input type="number" class="form-control" name="c">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-xs-2">请求次数</label>
                                        <div class="col-xs-10">
                                            <input type="number" class="form-control" name="n">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">请求url</label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control" name="url">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10">
                                            <input type="submit" value="提交" class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10">
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
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10">
                                            @if(isset($result))
                                                @foreach($result as $value)
{{--                                                    <strong>{!! $value."<br>" !!}</strong>--}}
                                                    {!! $value !!}
                                                    @endforeach
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


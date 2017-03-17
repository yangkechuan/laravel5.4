@extends('layouts.content')

@section('content')


    <div class="callout callout-success">
        <h4>欢迎使用!</h4>

        <p>hello, {{Auth::user()->name}}.</p>
    </div>


    <div class="row">
        <div class="col-md-3">

            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{$success}}<sup style="font-size: 20px">%</sup></h3>

                    <p>API接口通过率</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('api.index')}}" class="small-box-footer">详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>



    <script>
        @if(url('login') == $from)
                   swal('欢迎使用测试后台','', 'success');
        @endif
    </script>
    @endsection
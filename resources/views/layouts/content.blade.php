@extends('layouts.base')

@section('main')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

        @include('layouts.headbar')

        @include('layouts.sidebar')

            <div class="content-wrapper">

                <section class="content">

                    @yield('content')

                </section>

            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>create by <a href="mailto:yangkechuan@happyjuzi.com">kechuan</a>.</strong>

            </footer>

        </div>
    </body>
@endsection
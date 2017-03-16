@extends('layouts.content')

@section('content')


    <div class="callout callout-success">
        <h4>欢迎使用!</h4>

        <p>hello, {{Auth::user()->name}}.</p>
    </div>

    @endsection
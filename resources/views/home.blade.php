@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Welcome</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p>Hi <B>{{ Auth::user()->name }}</B>, nice to see you on Mapa Spontex Reporting site !</p>
            </div>
        </div>
    </div>
</div>
@stop
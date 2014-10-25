@extends('_master')

@section('title')
    Testing a For Loop
@stop

@section('content')
    <h1>Here's a For Loop Example</h1>

    @foreach($array as $value)

        <p>We have a TA named {{ $value }}</p>

    @endforeach

 @stop
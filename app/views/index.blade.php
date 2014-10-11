@extends('_master')

@section('title')
    Welcome to my test Laravel site!
@stop

@section('content')
    <h1>Hello World!</h1>
    <p>Hi {{ $name }}! Welcome to my app!</p>
@stop
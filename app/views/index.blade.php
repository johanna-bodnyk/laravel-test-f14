@extends('_master')

@section('title')
    Welcome to my test Laravel site!
@stop

@section('content')
    <h1>Hello World!</h1>
    <p>Hi {{ $name }}! Welcome to my app!</p>
    <p>Looking for the package test page? <a href="/package-test">Here it is.</a></p>
@stop
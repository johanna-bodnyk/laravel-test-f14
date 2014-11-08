@extends('_master')

@section('title')
    Testing out Controllers
@stop

@section('content')
    <h1>Testing Controllers</h1>
    <p>The site language is currently set to: {{ Session::get('language'); }}</p>
    <p>{{ Session::get('foo'); }}</p>
@stop
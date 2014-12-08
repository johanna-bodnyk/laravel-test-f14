@extends('_master')

@section('title')
    Create an account
@stop

@section('content')

    {{ Form::open(array('url' => 'signup')) }}

    {{Form::label('firstname', 'First Name')}}
    {{Form::text('firstname')}}
    <br>
    <br>

    {{Form::label('lastname', 'Last Name')}}
    {{Form::text('lastname')}}
    <br>
    <br>

    {{Form::label('email', 'Email')}}
    {{Form::text('email')}}
    <br>
    <br>

    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}
    <br>
    <br>

    {{Form::label('age', 'Age')}}
    {{Form::text('age')}}
    <br>
    <br>

    {{Form::submit('Sign Up')}}

{{ Form::close() }}

@stop
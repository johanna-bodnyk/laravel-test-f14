{{ Form::open(array('url' => 'for-loop')) }}

    {{Form::label('person1', 'Person 1')}}
    {{Form::text('person1')}}
    <br>

    {{Form::label('person2', 'Person 2')}}
    {{Form::text('person2')}}
    <br>

    {{Form::label('person3', 'Person 3')}}
    {{Form::text('person3')}}
    <br>

    {{Form::label('box', "Checkbox test")}}
    {{Form::checkbox('box','1')}}
    <br>

    {{Form::submit('Submit')}}

{{ Form::close() }}
@extends('layouts.default')

@section('content')
<h1>Reset passwrod</h1>

    @include('partials.errorsForm')

    {!! Form::open() !!}
        {!! Form::hidden('token',$token) !!}
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation','Password confirmation:') !!}
            {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Register',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@stop
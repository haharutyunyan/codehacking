@extends('layouts.admin')
@section('content')
    <h1>Create a user</h1>

    {!! Form::open (['method' => 'POST', 'action' => 'AdminUsersController@store','files'=>true]) !!}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Name') !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::label('email','Email')  !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        {!! Form::text('email', null, ['class'=>'form-control ' ]) !!}
    </div>

    <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
        {!! Form::label('photo_id','Photo') !!}
        @if ($errors->has('photo_id'))
            <span class="help-block">
                <strong>{{ $errors->first('photo_id') }}</strong>
            </span>
        @endif

        {!! Form::file('photo_id',['class'=>'form-control ']) !!}
    </div>

    <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
        {!! Form::label('role_id','Role') !!}
        @if ($errors->has('role_id'))
            <span class="help-block">
                <strong>{{ $errors->first('role_id') }}</strong>
            </span>
        @endif

        {!! Form::select('role_id', ['' => 'Choose Options']+$roles,null, ['class'=>'form-control'])  !!}
    </div>
    <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], '0',['class'=>'form-control'])  !!}
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password','Password') !!}
        @if ($errors->has('password'))
            <span class="help-block">
               <strong>{{ $errors->first('password','lalalal') }}</strong>
           </span>
        @endif

        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create a user', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


    {{--@include('includes.form_error')--}}

@stop
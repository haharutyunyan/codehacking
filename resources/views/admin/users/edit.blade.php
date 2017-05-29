@extends('layouts.admin')

@section('content')
    <h1>Edit user</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$users->photo ? $users->photo->file :' http://placehold.it/400x400'}}" class="img-responsive img-rounded" alt="">
        </div>

        <div class="col-sm-9">
            {!! Form::model ($users,['method' =>'PATCH', 'action' => ['AdminUsersController@update', $users->id ], 'files'=>true]) !!}
            {{--{{dd('aaa')}}--}}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'],null,['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('title','Password') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create a user', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    @include('includes.form_error')

@stop

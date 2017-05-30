@extends('layouts.admin')
@section('content')

    <h1>Create Posts</h1>
    <div class="row">
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('category_id','Title') !!}
        {!! Form::select('category_id',[''=>'Select Category', '1'=>'PHP', '2'=>'Laravel', '3'=>'Javascript' ],null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Title') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Title') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>
@stop
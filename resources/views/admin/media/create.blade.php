@extends('layouts.admin')


@section('styles')
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    @stop

@section('content')
    <h1>Upload media</h1>
    {!! Form::open (['method'=>'POST', 'action'=>'AdminMediasController@store','class'=>'dropzone']) !!}


    {!! Form::close() !!}

@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop

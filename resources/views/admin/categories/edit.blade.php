@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::model ($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Title') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

       {!! Form::open (['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
        </div>

       {!! Form::close() !!}

    </div>

    {{--<div class="col-sm-6">--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Id</th>--}}
                {{--<th>Category Name</th>--}}
                {{--<th>Created</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}

            {{--@if($categories)--}}
                {{--{dd($categories)}}--}}
                {{--<tr>--}}
                    {{--@foreach($categories as $category)--}}

                        {{--<td>{{$category->id}}</td>--}}

                        {{--<td> {{$category->name}}</td>--}}
                        {{--<td>{{$category->created_at ? $category->created_at->diffForHumans() :'No date'}}</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
            {{--@endif--}}

            {{--</tbody>--}}
        {{--</table>--}}


    {{--</div>--}}
@stop
@extends('layouts.admin')
@section('content')

    @if($photos)
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>photo</th>
                <th>created at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>

                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file ? $photo->file :'no image' }}" alt=""></td>
                    <td>{{$photo->created_at}}</td>
                    <td>{!! Form::open (['method'=>'DELETE', 'action'=>['AdminMediasController@destroy',$photo->id]]) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>

    @endif
@stop

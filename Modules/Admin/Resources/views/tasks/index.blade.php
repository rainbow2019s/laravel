@extends('admin::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>

    <p>{{$message}}</p>

    <ul>
    @foreach($tasks as $task)
        <li style="list-style-type: none">
        
            <a href="{{url('admin/tasks',$task->id)}}">{{$task->title}}</a>
        </li>
    @endforeach
    </ul>


@stop

@extends('admin::layouts.master')

@section('content')   
    <p>{{$task->content}}</p>

    <a href="{{url('admin/tasks')}}">返回列表</a>
@stop


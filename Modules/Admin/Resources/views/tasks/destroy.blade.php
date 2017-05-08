@extends('admin::layouts.master')

@section('content')


<style>
div:hover{
    transform: rotate(45deg);
    transform-origin:top left;
}
</style>

<h3>实现div居中</h3>

<div style="width:200px;height:200px;background-color: #090;margin:60px auto;"></div>

@stop

@extends('admin::layouts.master')

@section('content')
    <div style="margin:auto;width:640px;height:720px;display:table;">
    <div style="vertical-align:middle;display:table-cell">
    {!! Form::open(['url'=>'admin/tasks']) !!}
        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title',null,['class'=>'form-control','placeHolder'=>'请输入标题']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::textarea('content',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publish_at','Publish_at:') !!}
            {!! Form::input('date','publish_at',date('Y-m-d'),['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}

    @if($errors->any())
    <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{$error}}</li>
    @endforeach
    @endif
    </div>
    </div>

    <img style="border-radius:50%" src="http://t2.27270.com/uploads/tu/mx/175/1.jpg">

@stop

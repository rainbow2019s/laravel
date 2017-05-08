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
        {!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    </div>
    </div>

    <img style="border-radius:50%" src="http://t2.27270.com/uploads/tu/mx/175/1.jpg">

@stop

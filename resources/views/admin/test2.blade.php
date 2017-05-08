@extends('layouts.master')

@section('style')
    div#main{
        width:300px;
        height:300px;
        border:1px solid black;
        display:table;
    }

    #main div{
        border:1px solid black;
        display:table-cell;
        text-align:center;
        vertical-align:middle;
    }

@endsection


@section('title','Hello Laravel')


@section('content')

<div id="main">
    <div>
        <p>aaaaaaaaaaaaaaaaaa</p>
        <p>bbbbbbbbbbbbbbbbbb</p>
    </div>
<div>
@endsection
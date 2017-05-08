@extends('admin::layouts.master')

@section('content')

<style>

#phone:before{
    content:'';
    width:50px;
    height:6px;
    background-color:#2e2e2e;
    display:block;
    position:absolute;
    top:-10px;
    left:150px;
    border-radius:3px 3px 0 0;
}

#phone:after{
    content:'';
    width:6px;
    height:50px;
    background-color:#2e2e2e;
    display:block;
    position:absolute;
    top:80px;
    left:-10px;
    border-radius: 3px 0 0 3px;
}

.carmera {
    width:10px;
    height:10px;
    border:#4a4a4a solid 2px;
    margin:20px auto 0;
    background-color: #1a1a1a;
    border-radius: 50%;
    box-shadow: 1px 2px 2px rgba(0,0,0,0.5);
}

.headphone{
    width:60px;
    height:10px;
    border:#4a4a4a solid 2px;
    margin:8px auto;
    background-color:#1a1a1a;
    border-radius: 10px;
    box-shadow: 1px 2px 2px rgba(0,0,0,0.5);
}

.screen{
    width:220px;
    height:360px;
    margin:15px auto 0;
    background-color:#0a0a0a;
    border:#1a1a1a solid 4px;
    display:table;
}

.btn2{

    width:40px;
    height:40px;
    background-color:#1a1a1a;
    margin:8px auto 0;
    border-radius:50px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.5) inset;
    overflow:hidden;
}

.btn2:before{
    content:'';
    width:20px;
    height:20px;
    border:#fff solid 2px;
    display:block;
    margin:9px auto;
    border-radius:5px;
}

</style>

<div id='phone' style="width:250px;height:500px;background-color:#2e2e2e;margin:60px auto;border:#3b3b3b solid 4px;
border-radius:30px;box-shadow:3px 5px 5px 1px rgba(0,0,0,0.5);position:relative;"> 
    <div class="carmera"></div>
    <div class="headphone"></div>
    <div class="screen">
        <p style="color:white;text-align:center;vertical-align: middle;display:table-cell">一面科技 一面艺术</p>
    </div>
    <div class="btn2"></div>
</div>

@stop

<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            #nav{
                list-style-type:none;
                margin:50px auto 0px;
                width:950px;
                height:38px;
                color:#333;
                /*border:#000 solid 1px;*/
                font-size:14px;
                padding:0;
                overflow:hidden;
            }

            #nav li{
                width:100px;
                height:36px;
                float:left;
                text-align:center;
                line-height:38px;
                border-top:#c9cbce solid 1px;
                border-left:#c9cbce solid 1px;
                border-bottom:#c9cbce solid 1px;
                cursor:pointer;
            }

            #nav li:last-child{
                border-right:#c9cbce solid 1px;
            }


            #nav .li-onclick{
                border-top:#54b82a solid 2px;
                border-bottom:none;
            }

            #nav span{
                position:relative;
                width:100%;
                height:38px;
                display:block;
                z-index:-1;
            }


            input[class]{
                background:#c5c5c5;
            }

            p span:nth-child(3){
                color:red;
            }

            div#test:before{
                content:'11111';
            }

            div#test:after{
                content:'33333';
            }

        </style>
    </head>
    <body>
        <h3>Test</h3>
        <ul id="nav">
            <li class="li-onclick">我的主页1<span style="background-color:#b9d329"></span></li>
            <li>我的主页2<span style="background-color:#b9d329"></span></li>
            <li>我的主页3<span style="background-color:#c0ebf7"></span></li>
            <li>我的主页4<span style="background-color:#69bcf3"></span></li>
        </ul>
        <audio src="/laravel/5.4/res/mp3/1.mp3"></audio>
        <audio src="/laravel/5.4/res/mp3/2.mp3"></audio>
        <audio src="/laravel/5.4/res/mp3/1.mp3"></audio>
        <audio src="/laravel/5.4/res/mp3/2.mp3"></audio>


        <input type="text" name="firstname" class="first">
        <input type="text" name="lastname" class="last">

        <p>
            <span>1</span>
            <img>
            <span>2</span>
            <img>
        </p>

        <div id="test">2222</div>

        <script type="text/javascript" src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
        <script>

            $(function(){
                $('#nav li').click(function(e){
                    $('.li-onclick').removeClass('li-onclick');
                    $(this).addClass('li-onclick');
                }).hover(function(){

                    $(this).children('span').animate({top:'-38px'},200);
                    var index=$(this).index();
                    $('audio').get(index).play();
                },function(){
                    $(this).children('span').animate({top:0},200);
                    var index=$(this).index();
                    $('audio').get(index).pause();
                });
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--js csrf-token--}}
        {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
        <title>@yield("title")</title>   
        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- your css file -->
        <!-- <link href="css/style.css" rel="stylesheet">         -->
        <link href="/css/main_css_red.css" rel="stylesheet">        
        <!-- <link href="css/float.css" rel="stylesheet">     -->    
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            body {
                background: url(/images/main-bg2.png) center;
            }
            .t-header {
                background: url(/images/header-bg4.png) center repeat-x;
            }
        </style>
    </head>
    <body>


    @if($errors->any())
        @component('alert', ['foo' => ''])
            @slot('title')
               <strong>Something Went Wrong!</strong>
            @endslot
            <div class="alert alert-danger">
                <ul style="list-style: none;">
                    @foreach($errors->all() as $error)
                        <li>{{$loop->iteration}}. {{$error}}</li>
                    @endforeach
                </ul> 
            </div>

        @endcomponent
    @endif

    {{--成功提示消息--}}
    {{--@if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif--}}


    @include("layout.header")

    @yield("content")

    @include("layout.footer")
        
    @include("layout.script")



    </body>
</html>





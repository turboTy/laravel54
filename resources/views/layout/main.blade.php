<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>   
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

    <!-- .t-header begin -->
    <div class="t-header">
        <div class="container">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 header-logo">
                <img src="/images/logo.png" alt="LOGO" class="header-logo-img fl">
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="header-login">
                    <a class="std-login" href="">学生登录</a>
                    <a class="admin-login" href="">管理员登录</a>
                    <a class="com-login" href="">用人单位登录</a>
                </div>
                <div class="header-search">
                    <input type="text" name="" class="header-search-text form-control fl">
                    <input type="button" name="" class="header-search-btn fl">
                </div>
            </div>
        </div>
        <div class="header-menu">
            <ul>
                <li class="header-menu-items"><a href="" style="border:none;">首页</a></li>
                <li class="header-menu-items">
                    <a href="">学校概况</a>
                    <ul>
                        <li><a href="">学校概况一</a></li>
                        <li><a href="">学校概况二</a></li>
                        <li><a href="">学校概况三</a></li>
                        <li><a href="">学校概况四</a></li>
                    </ul>
                </li>
                <li class="header-menu-items">
                    <a href="">新闻公告</a>
                    <ul>
                        <li><a href="">新闻公告一</a></li>
                        <li><a href="">新闻公告二</a></li>
                        <li><a href="">新闻公告三</a></li>
                    </ul>
                </li>
                <li class="header-menu-items"><a href="/posts/listArticle">招聘信息</a></li>
                <li class="header-menu-items"><a href="">就业指导</a></li>
                <li class="header-menu-items"><a href="">办事指南</a></li>
                <li class="header-menu-items"><a href="">生源信息</a></li>
                <li class="header-menu-items"><a href="">就业质量报告</a></li>
                <li class="header-menu-items"><a href="">资料下载</a></li>
                <li class="header-menu-items"><a href="">创新创业</a></li>
                <li class="header-menu-items"><a href="">联系我们</a></li>
            </ul>
        </div>
        <div class="fixed-nav" style="display:none;">
            <div>
                 <span class="fl fixed-nav-btn">Menu</span>
                 <img src="/images/logo-fixed.png" alt="LOGO" class="fr">
            </div>
            <ul style="display: none;">
                <li class="fixed-menu-items"><a href="" style="border:none;">首页</a></li>
                <li class="fixed-menu-items">
                    <a href="">学校概况</a>
                    <ul>
                        <li><a href="">学校概况一</a></li>
                        <li><a href="">学校概况二</a></li>
                        <li><a href="">学校概况三</a></li>
                        <li><a href="">学校概况四</a></li>
                    </ul>
                </li>
                <li class="fixed-menu-items">
                    <a href="">新闻公告</a>
                    <ul>
                        <li><a href="">新闻公告一</a></li>
                        <li><a href="">新闻公告二</a></li>
                        <li><a href="">新闻公告三</a></li>
                    </ul>
                </li>
                <li class="fixed-menu-items"><a href="">招聘信息</a></li>
                <li class="fixed-menu-items"><a href="">就业指导</a></li>
                <li class="fixed-menu-items"><a href="">办事指南</a></li>
                <li class="fixed-menu-items"><a href="">生源信息</a></li>
                <li class="fixed-menu-items"><a href="">就业质量报告</a></li>
                <li class="fixed-menu-items"><a href="">资料下载</a></li>
                <li class="fixed-menu-items"><a href="">创新创业</a></li>
                <li class="fixed-menu-items"><a href="">联系我们</a></li>
            </ul>
        </div>
        <!-- pc端顶部fixed菜单 -->
        <div class="fixed-nav-pc">
            <div>
                 <img src="/images/logo-fixed.png" alt="LOGO" class="fl">
            </div>
            <ul>
                <li class="fixed-pc-menu-items fl"><a href="" style="border:none;">首页</a></li>
                <li class="fixed-pc-menu-items fl">
                    <a href="">学校概况</a>
                    <ul>
                        <li><a href="">学校概况一</a></li>
                        <li><a href="">学校概况二</a></li>
                        <li><a href="">学校概况三</a></li>
                        <li><a href="">学校概况四</a></li>
                    </ul>
                </li>
                <li class="fixed-pc-menu-items fl">
                    <a href="">新闻公告</a>
                    <ul>
                        <li><a href="">新闻公告一</a></li>
                        <li><a href="">新闻公告二</a></li>
                        <li><a href="">新闻公告三</a></li>
                    </ul>
                </li>
                <li class="fixed-pc-menu-items fl"><a href="">招聘信息</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">就业指导</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">办事指南</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">生源信息</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">就业质量报告</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">资料下载</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">创新创业</a></li>
                <li class="fixed-pc-menu-items fl"><a href="">联系我们</a></li>
            </ul>
        </div>
    </div>
    <!-- .t-header end -->

    @yield("content")

    <!-- .t-footer begin -->
    <div class="t-footer">
        <div class="container">
            <div class="col-md-8 col-md-offset-3">
                <div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        主办单位：汉码学院
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        技术支持：汉码软件技术有限公司
                    </div>
                </div>
                <div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        联系电话：0755-29922127
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        Email：hanma@163.com
                    </div>
                </div>
                <div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    今日访问量：245
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        总访问量：15442
                    </div>
                </div>
                <div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    地址：深圳市西乡街道流塘路好运来商务大厦F7017
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        粤ICP备xxxxxxxxxx
                    </div>
                </div>
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- .t-footer end -->
        
    <!-- BACK-TO-TOP begin -->
    <div class="back-to-top">
        <a href="#" class="glyphicon glyphicon-chevron-up"></a>
    </div>
    <!-- BACK-TO-TOP end -->
    

<script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function(){
        if(screen.width < '1280')
        {
            $(".fixed-nav").css('display','block');
            $(".header-menu").css('display','none');
            $(".fixed-nav-pc").css('display','none');
        }

        if(screen.width < '768'){
            $(".c1-r2-content-r").css('display','none');
            $(".main-c2-r2").css('display','none');
        }else{
            $(".main-c2-r2-mobile").css('display','none');
        }

        $(".main-c2-r2 #nav-tab1").css({
            'color':'#fff',
            'background-color':'#d56c6c',
        });

        $(".main-c2-r2 #nav2-tab1").css({
            'color':'#fff',
            'background-color':'#d56c6c',
        });

    })

    $(".header-menu-items").hover(function(){
        $(this).find("ul").slideDown();
    },function(){
        $(this).find("ul").slideUp();
    })

    $(".news-txt").hover(function(){
        var id = $(this).attr("id");
        $("."+id).siblings("li").css('display','none');
        $("."+id).css('display','block');
    })

    $(".nav-tabs").hover(function(){
        $(".nav-tabs").css({
            'background-color':'#fff',
            'color':'#d56c6c',
        });
        $(this).css({
            'color':'#fff',
            'background-color':'#d56c6c',
        });
        var id = $(this).attr("id");
        $("."+id).siblings("div").css('display','none');
        $("."+id).css('display','block');
    })

    $(".nav2-tabs").hover(function(){
        $(".nav2-tabs").css({
            'background-color':'#fff',
            'color':'#d56c6c',
        });
        $(this).css({
            'color':'#fff',
            'background-color':'#d56c6c',
        });
        var id = $(this).attr("id");
        $("."+id).siblings("div").css('display','none');
        $("."+id).css('display','block');
    })

    //fixed-nav菜单按钮
    $(".fixed-nav-btn").click(function(){
        if($(".fixed-nav > ul").css('display') == 'block'){
            $(".fixed-nav > ul").slideUp();
        }else{
            $(".fixed-nav > ul").slideDown();
        }
    })

    $(".fixed-menu-items").click(function(){
        if($(this).find("ul").css("display") == "block"){
            $(this).find("ul").slideUp();
        }else{
            $(this).find("ul").slideDown();
        }
    })

    window.onscroll = function(){
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        if(t > 250){
            $(".fixed-nav-pc").css('top','0');
        }else{
            $(".fixed-nav-pc").css('top','-46px');
        }
    }

    $(".fixed-pc-menu-items").hover(function(){
        $(this).find("ul").slideDown();
    },function(){
        $(this).find("ul").slideUp();
    })

    $(".nav3-tabs").click(function(){
        var id = $(this).attr("id");
        $("."+id).css('display','block');
        $("."+id).siblings("div").css('display','none');
        $(".c2-r2-tmoblie-title > ul").slideUp();
    })

    $("#show-jymenu").click(function(){
        if($(".c2-r2-tmoblie-title > ul").css('display') == 'block'){
            $(".c2-r2-tmoblie-title > ul").slideUp();
        }else{
            $(".c2-r2-tmoblie-title > ul").slideDown();
        }
    })
</script>




    </body>
</html>



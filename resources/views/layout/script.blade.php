<script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script type="text/javascript">
    var abc = 'this is verbatim';

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


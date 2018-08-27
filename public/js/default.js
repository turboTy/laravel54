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

function sleepTime(time){
    var start = new Date().getTime();
    while(true) {
        if(new Date().getTime() - start >= time) break;
    }
}

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

$(".article-list-delete").click(function(){
    var url = $(this).attr("id");
    //alert("/posts/" + url);
    //return false;
    if(!confirm("确定删除？")){
        return false;
    }else{
        //layer.msg('删除成功！', {icon: 1});
        $.ajax({
            url: "/posts/" + url,
            type: 'post',
            dataType: 'json',
            data: {
                testt: "而测试",
                '_token': $("input[name='_token']").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
            },
            success: function(data) {
                if(data.status){
                    layer.msg(data.msg, {icon: 1});

                    setTimeout(function(){
                        window.location.reload();
                    }, 500); 
                }  
            },
            error: function(xhr, type){
                layer.alert('Ajax error!')
            }
        });
    }
})

function ajax_submit(url, success = 1, type = 'post'){
	
}

//增加10条数据
$(".article-list-addData").click(function(){
    //window.location.href = "/posts/addData";
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: "/posts/addData",
        data: {
            '_token': $("input[name='_token']").val(),
        },
        success: function(data){
            if(data.status){
                layer.msg(data.msg, {icon: 6});

                setTimeout(function(){
                    window.location.reload();
                }, 500);
            }
        },
        error: function(xhr, type){
            layer.alert('something went wrong!');
        }
    });
})



//js csrf-token
//'X-CSRF-TOKEN' : $("meta[name='csrf-token']").attr('content');





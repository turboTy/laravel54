@extends("layout.main")

@section("title", "Create Page")

@section("content")
<form name='form1' action='\posts\{{$post->id}}' method='post'>
<div class="article-detail container">
	{{method_field("PUT")}}
	{{csrf_field()}}
	<input class="form-control article-title" type='text' name='title' placeholder='文章标题' value="{{$post->title}}">

	<div class="article-editor" style="margin-bottom: 65px;">
	    @include('vendor.UEditor.head')  
	    <!-- 加载编辑器的容器 -->  
	    <script id="container" name="content" type="text/plain" style='width:100%;height:300px;'>  
	    	{!!$post->content!!}
	    </script>  
	    <!-- 实例化编辑器 -->  
	    <script type="text/javascript">  
	        var ue = UE.getEditor('container');  
	        ue.ready(function(){  
	            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');   
	        });  
	    </script>
		<!-- <textarea class="form-control" name="content" rows="12" cols="120"></textarea> -->
	</div>


	<div class="article-bottom-btn">
		<input class="btn btn-primary article-submit" type="button" value="提交" onclick="return submit();">
		<input class="btn btn-default" type="button" value="返回" onclick="return window.history.back();">
	</div>
</div>
</form>
@endsection
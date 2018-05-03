@extends("layout.main")

@section("title", "Create Page")

@section("content")
<form name='form1' action='\posts\store' method='post'>
<div class="article-detail container">
	{{csrf_field()}}
	<input class="form-control article-title" type='text' name='title' placeholder='文章标题'>
	<textarea class="form-control" name="content" rows="12" cols="120"></textarea>


	<div class="article-bottom-btn">
		<input class="btn btn-primary article-submit" type="button" value="提交" onclick="return submit();">
		<input class="btn btn-default" type="button" value="返回" onclick="return window.history.back();">
	</div>
</div>
</form>
@endsection
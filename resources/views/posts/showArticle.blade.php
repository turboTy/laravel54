@extends("layout.main")

@section("title", "Show Article")

@section("content")
<div class="article-detail container">


	<h3>{{$post->title}}</h3>
	<h5>编辑：{{$post->user_id}} 　时间：{{$post->created_at->toFormattedDateString()}}</h5>
	<div style="margin-bottom: 65px;">
	{!!$post->content!!}
	</div>


	<div class="article-bottom-btn">
		<input class="btn btn-primary" type="button" value="编辑" onclick="return window.location.href = '{{$post->id}}/edit'">
		<input class="btn btn-default" type="button" value="返回" onclick="return window.history.back();">
	</div>

</div>
@endsection

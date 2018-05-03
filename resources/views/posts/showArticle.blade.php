@extends("layout.main")

@section("title", "Show Article")

@section("content")
<div class="article-detail container">


	<h3>{{$post->title}}</h3>
	<h5>编辑：{{$post->user_id}} 　时间：{{$post->created_at->toFormattedDateString()}}</h5>
	<p>
	{{$post->content}}
	</p>


	<div class="article-bottom-btn">
		<input class="btn btn-default" type="button" value="返回" onclick="return window.history.back();">
	</div>

</div>
@endsection

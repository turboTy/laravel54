@extends("layout.main")

@section("title", "Show Article")

@section("content")
<div class="article-detail container">

	@foreach ($article as $v)
	<h3>{{$v->title}}</h3>
	<h5>编辑：{{$v->user_id}} 　时间：{{$v->created_at}}</h5>
	<p>
	{{$v->content}}
	</p>
	@endforeach

	<div class="article-bottom-btn">
		<input class="btn btn-default" type="button" value="返回" onclick="return window.history.back();">
	</div>

</div>
@endsection

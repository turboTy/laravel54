@extends("layout.main")

@section("title", "Show Article")

@section("content")
<div class="article-detail">

	@foreach ($article as $v)
	<h3>{{$v->title}}</h3>
	<h5>编辑：{{$v->user_id}} 　时间：{{$v->created_at}}</h5>
	<p>
	{{$v->content}}
	</p>
	@endforeach

</div>
@endsection
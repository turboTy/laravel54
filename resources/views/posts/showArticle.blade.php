@extends("layout.main")

@section("title", "Show Article")

@section("content")
<div class="article-detail">
	<h3>{{$data}}扩展布局{{$id}}</h3>
	<h5>编辑：admin 　时间：2018年4月27日</h5>
	<p>
		定义子页面的时候，可以使用 Blade 的 extends 指令来指定子页面所继承的布局，继承一个 Blade 布局的视图将会使用 section指令注入内容到布局的片段中，记住，如上面例子所示，这些片段的内容将会显示在布局中使用 yield 的地方：

	</p>
	<p>
		记者从交警处了解到，男子将孩子托出车窗小便的行为，除了孩子本身的安全得不到保障外，极易造成安全隐患，还会影响到后方车辆的正常行驶。按照《道法》的相关规定，在驾车过程中有其它妨碍安全行车的违法行为将被罚款200元、记2分。目前，辖区交警已经对此事介入调查，一旦证实有安全问题，将进行相应的处罚。
	</p>
</div>
@endsection
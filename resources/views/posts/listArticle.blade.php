@extends("layout.main")

@section("title", "List Article")

@section("content")
    <!-- .t_main begin -->
    <div class="t_main">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="col-md-12 hot_news">
    					<div class="hot_news_title">
    						<h4 class="fl">热点新闻</h4>
                            <a class="fr" href="">MORE</a>
    					</div>
    					<div class="hot_news_content">
    						<ul>
    							<li class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="hot_news_l fl">
                                        <p href="">7月</p>
                                            <h4>06</h4>
                                    </div>
                                    <div class="hot_news_r fl">
                                            <h5><a href="/posts/showArticle/1">我校获国家自然科学基金项目立项两项</a></h5>
                                    </div>
                                </li>
    							<li class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="hot_news_l fl">
                                        <p href="">7月</p>
                                            <h4>02</h4>
                                    </div>
                                    <div class="hot_news_r fl">
                                            <h5><a href="">文学与新闻学院领导赴实习单位看望学生</a></h5>
                                    </div>
                                </li>
    							<li class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="hot_news_l fl">
                                        <p href="">7月</p>
                                            <h4>02</h4>
                                    </div>
                                    <div class="hot_news_r fl">
                                            <h5><a href="">化学与材料工程学院：开展“三转”...</a></h5>
                                    </div>
                                </li>
    							<li class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="hot_news_l fl">
                                        <p href="">6月</p>
                                            <h4>16</h4>
                                    </div>
                                    <div class="hot_news_r fl">
                                            <h5><a href="">考察深圳市铁汉......</a></h5>
                                    </div>
                                </li>
    							<li class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="hot_news_l fl">
                                        <p href="">6月</p>
                                            <h4>09</h4>
                                    </div>
                                    <div class="hot_news_r fl">
                                            <h5><a href="">政治与公共管理学院组队参加中国政...</a></h5>
                                    </div>
                                </li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-md-12 contact_us">
    					<div class="contact_us_title">
    						<h4 class="fl">联系我们</h4>
                            <a class="fr" href="">MORE</a>
    					</div>
    					<div class="contact_us_content">
    						<ul>
    							<li style="padding-top: 14px;">
    								<span>联&nbsp;系&nbsp;人&nbsp;：</span><p>XXX</p>
    							</li>
    							<li style="padding-top: 14px;">
    								<span>联系电话：</span><p>0755-27292022</p>
    							</li>
    							<li style="padding-top: 14px;">
    								<span>传　　真：</span><p>0755-27292022</p>
    							</li>
    							<li style="padding-top: 14px;">
    								<span>邮　　箱：</span><p>hanma@163.com</p>
    							</li>
    							<li>
    								<span>联系地址：</span><p>深圳市宝安区西乡街道流塘路好运来商务大厦A座7017</p>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-8">
    				<div class="sm_main col-md-12">
    					<div class="sm_main_position">
    						<p><b>您当前所在的位置：</b><a href="index.php">首页</a>&nbsp;&gt;&gt;&nbsp;历年招生计划</p>
    					</div>
    					<div class="sm_main_title">
    						<p>历年招生计划&nbsp;详细列表</p>
    					</div>
    					<div class="sm_main_content">
    						<span class="fr">
    							<form name="form1" method="post" action="">
    								<input type="button" class="btn btn-primary fl" value='发布新文章' onclick="return window.location.href='create';">
	    							<input type="text" name="search_keyword" class="search_keyword fl form-control" placeholder="请输入关键字">
	    							<select name="search_type" class="fl">
	    								<option value="1">标　题</option>
	    								<option value="2">发布人</option>
	    							</select>
	    							<button name="search_btn" class="btn btn-default fl">搜索</button>
	    						</form>
    						</span>
    						<table border="1" cellpadding="0" cellspacing="0" width="90%">
    							<tr class="trbg ">
    								<th>序号</th>
    								<th>标题</th>
    								<th>阅读人次</th>
                                    <th>发布日期</th>
    								<th>操作</th>
    							</tr>
                                {{csrf_field()}}

                                @foreach ($articles as $v)
    							<tr class="trbg">
    								<td align="center">{{$loop->iteration}}</td> <!-- $loop->iteration 迭代次数 -->
    								<td align="left"><a href="{{$v->id}}" title="{{$v->title}}">{{str_limit($v->title, 48, '...')}}</a></td>	<!-- str_limit() 超过param2部分用param3代替 -->
    								<td align="center">{{$v->read_times}}</td>
    								<td align="center">{{$v->created_at->toFormattedDateString()}}</td> <!-- toFormattedDateString() 时间格式化 -->
                                    <td align="center" width="70">
                                        <a class="article-list-edit" href="{{$v->id}}/edit" title="编辑"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                        <a class="article-list-delete" id="{{$v->id}}/delete" title="删除"><span class="glyphicon glyphicon-remove"></span> </a>
                                    </td>
    							</tr>
                                @endforeach
    							
    						</table>
    					</div>
    					<!-- <div class="sm_main_page">
    						<p>共&nbsp;23&nbsp;条信息，每页显示&nbsp;10&nbsp;条，共&nbsp;3&nbsp;页&nbsp;第&nbsp;1&nbsp;<a href="">2</a>&nbsp;<a href="">3</a>&nbsp;页&nbsp;<a href="">
    						下一页</a>&nbsp;<a href="">尾页</a>，转到第&nbsp;<input type="text" name="page_num" class="page_num">&nbsp;页 
    						<input type="button" name="page_btn" class="btn btn-primary" value="确定"></p>
    					</div> -->
    					<div class="sm_main_page" style="margin-left: 38px;">
    						{{$articles->links()}}
                            <input type="button" class="btn btn-warning article-list-addData" value="增加10条测试数据" >
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- .t_main end -->
@endsection

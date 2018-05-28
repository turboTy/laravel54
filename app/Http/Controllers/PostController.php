<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //$p = Post::get()->first();
        //$p = Post::find(1);
        //$p = Post::where('title','保存上传的文件')->get();
        //dd($p);

    	return view("posts/index");
    }

    public function listArticle()
    {
    	//$articles = DB::select('select * from posts where user_id < ? order by id', [6]);
        //paginate分页方法，视图层用 {{$articles->links()}} 
		$articles = Post::orderBy('created_at', 'desc')->paginate(10);
    	return view("posts/listArticle", compact('articles'));
    }

    public function showArticle(Post $post)	//模型绑定
    {
    	$post->user_id = $post->user_id == '1' ? '管理员' : '一般用户';
    	
    	return view("posts/showArticle", compact('post'));
    }
    
    public function create()
    {
    	return view("posts/create");
    }
    
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request, [
                'title' => 'required|unique:posts|max:255',
                'content' => 'required',
            ]);

        /*$post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();*/

    	$post = Post::create(request(['title', 'content']));    	//tinker的应用，等同于上面注释

    	return redirect("posts/listArticle");
    }

    public function edit(Post $post)
    {
        //dd($post);
        return view("posts/edit", compact("post"));
    }

    public function save(Request $request, $post)
    {
        $posts = Post::find($post);

        $posts->title = $request->title;
        $posts->content = $request->content;

        $posts->save();

        return redirect("posts/listArticle");
    }

    public function delete(Post $post)
    {
        if($post->delete())
        {
            return response()->json(array(
                    'status' => 1,
                    'msg' => '删除成功！',
                ));
        }
        else
        {
            //return Redirect::back()->withInput()->withErrors('保存失败！');
        }
        return redirect("posts/listArticle");
    }

    public function addData()
    {
        //使用模型工厂增加10条测试数据，具体配置在 \database\factories\ModelFactory.php
        if(factory(Post::class)->times(10)->create())
        {
            return response()->json(array(
                    'status' => 1,
                    'msg' => '添加成功！',
                ));
        }
        return redirect("posts/listArticle");
    }
}

?>
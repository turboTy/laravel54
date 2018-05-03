<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \App\Post;

class PostController extends Controller
{

    public function index()
    {
    	return view("posts/index");
    }

    public function listArticle()
    {
    	//$articles = DB::select('select * from posts where user_id < ? order by id', [6]);
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
    
    public function store()
    {
    	$post = Post::create(request(['title', 'content']));    	//tinker的应用
    	return redirect("\posts\listArticle");
    }
    
    

}












?>
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

    public function showArticle($id)
    {
    	$article = DB::select('select * from posts where id = ? limit 1', [$id]);

    	//var_dump($article);

    	$article[0]->user_id = $article[0]->user_id == '1' ? '管理员' : '一般用户';

    	return view("posts/showArticle", compact('article'));
    }

}












?>
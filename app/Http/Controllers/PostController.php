<?php
namespace App\Http\Controllers;

class PostController extends Controller
{

    public function index()
    {
    	return view("posts/index");
    }

    public function listArticle()
    {
    	return view("posts/listArticle");
    }

    public function showArticle($id)
    {
    	$data = 'test';
    	return view("posts/showArticle", compact(
    		array(
    			'id', 
    			'data',
    		)
    	));
    }

}











?>
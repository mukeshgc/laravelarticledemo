<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		//for now - test purpose -  url is hardecoded
		$apiURL = "http://localhost:8000/api/articles";
		$client = new \GuzzleHttp\Client();
		$request = $client->get($apiURL);
		$posts = $request->getBody();
       	return view('user.blog',compact('posts'));
    }
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));
    }
}
